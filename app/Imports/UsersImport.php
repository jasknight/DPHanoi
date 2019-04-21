<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Disability;
use App\Models\UserDisability;
use App\Models\Need;
use App\Models\Role;
use App\Models\UserNeed;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersImport implements OnEachRow
{
    public function onRow(Row $row)
    {   
        $rowIndex = $row->getIndex();
        if ($rowIndex < 2) {
            return;
        }

        // $messages = [
        //     '1.required' => 'Họ tên không được trống ở dòng ' . $rowIndex,
        //     '2.required' => 'Ngày sinh không được trống ở dòng '. $rowIndex,
        //     '2.required' => 'Ngày sinh không hợp lệ ở dòng '. $rowIndex,
        //     '3.required' => 'Giới tính không được trống ở dòng '. $rowIndex,
        //     '4.required' => 'Email không được trống ở dòng '. $rowIndex,
        //     '5.required' => 'Số chứng minh thư không được trống ở dòng '. $rowIndex,
        //     '5.regex' => 'Số chứng minh thư không hợp lệ ở dòng'. $rowIndex,
        //     '5.size' => 'Số chứng minh thư phải có 9 chữ số ở dòng'. $rowIndex,
        //     '6.required' => 'Dạng tật không được trống ở dòng '. $rowIndex,
        //     '7.required' => 'Chi tiết dạng tật không được trống ở dòng '. $rowIndex,
        //     '8.required' => 'Trình độ học vấn không được trống ở dòng '. $rowIndex,
        //     '9.required' => 'Chuyên môn không được trống ở dòng '. $rowIndex,
        //     '10.required' => 'Địa chỉ không được trống ở dòng '. $rowIndex,
        //     '11.required' => 'Số điện thoại không được trống ở dòng '. $rowIndex,
        //     '11.regex' => 'Số điện thoại không hợp lệ ở dòng'. $rowIndex,
        //     '11.mind' => 'Số điện thoại phải có ít nhất 10 chữ số ở dòng'. $rowIndex,
        // ];

        // $validator = Validator::make($row->toArray(), [
        //     '1' => ['required'],
        //     '2' => ['required'],
        //     '3' => ['required'],
        //     '4' => ['required'],
        //     '5' => ['required'],
        //     '6' => ['required'],
        //     '7' => ['required'],
        //     '8' => ['required'],
        // ], $messages)->validate();
        
        $row = $row->toArray();
        $request = request()->all();
        $district_id = $request['district_id'];
        $subdistrict_id = $request['subdistrict_id'];

        $userData = [
            'name' => $row[1],
            'birthday' => Carbon::parse($row[2]),
            'gender' => $row[3] === 'nam' ? 'male' : 'female',
            'email' => $row[4],
            'identity_card' => $row[5],
            'academic_level' => $row[8],
            'specialize' => $row[9],
            'address' => $row[10],
            'phone' => (string)intval($row[11]),
            'labor_ability' => $row[12] === null ? 0 : 1,
            'employment_status' => $row[13] ? $row[13] : null,
            'income' => $this->getIncome($row[14]),
            'password' => Hash::make('123456789'),
            'district_id' => $district_id,
            'subdistrict_id' => $subdistrict_id,
            'approver_id' => Auth::guard('admin')->user()->id,
            'status' => User::APPROVED,
            'admin_update_id' => null,
            'created_at' => now(),
            'updated_at' => now()
        ];

        $user = User::where('email', $row[4])->first();
        if (is_null($user)) {
            $user = User::create($userData);
            $userRole = Role::where('name', 'user')->first();
            $user->attachRole($userRole);
        } else {
            $user->update($userData);
        }

        $userDisabilityData = [
            'user_id' => $user->id,
            'disability_id' => $this->getUserDisabilityId($row[6]),
            'detail' => $row[7]
        ];
        $userDisability = UserDisability::where('user_id', $user->id)->first();
        if (is_null($userDisability)) {
            UserDisability::create($userDisabilityData);
        } else {
            $userDisability->update($userDisabilityData);
        }

        $dataUserNeed = [];
        for ($i = 15; $i <= 21; $i++) {
            $userNeed = $row[$i];
            if ($userNeed !== null) {
                switch ($i) {
                    case 15:
                        $needId = 1;
                        $detail = null;                 
                        break;
                    
                    case 16:
                        $needId = 2;
                        $detail = null;                 
                        break;
                    
                    case 17:
                        $needId = 3;
                        $detail = $row['19'];                 
                        break;

                    case 18:
                        $needId = 4;
                        $detail = null;                 
                        break;

                    case 19:
                        $needId = 5;
                        $detail = null;                 
                        break;

                    case 20:
                        $needId = 6;
                        $detail = null;                 
                        break;

                    case 21:
                        $needId = 7;
                        $detail = null;                 
                        break;
                    
                    default:
                        break;
                }

                $dataUserNeed[] = [
                    'user_id' => $user->id,
                    'need_id' => $needId,
                    'detail' => $detail,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ];
            }
        }
        
        UserNeed::insert($dataUserNeed);
    }

    private function getIncome($data)
    {
        if ($data === null) {
            return null;
        } elseif ($data === 'không có') {
            return 0;
        } else {
            $data = str_replace('.', '',$data);
            $data = str_replace(' vnđ', '', $data);
            return intval($data);
        }
    }

    private function getUserDisabilityId($data)
    {
        $data = strtolower($data);
        $disability = Disability::where('name', $data)->first();
        if ($disability !== null) {
            return $disability->id;
        } else {
            return 6;
        }
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
