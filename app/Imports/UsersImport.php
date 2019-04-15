<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Validator;

class UsersImport implements ToCollection, WithChunkReading
{
    public function collection(Collection $rows)
    {
        $messages = [
            '*.1.required' => 'Tên không được trống ở dòng :attribute.',
            '*.2.required' => 'Ngày sinh không được trống ở dòng :attribute.',
            'string' => ':attribute phải là chuỗi kí tự',
            'email' => 'Địa chỉ email không hợp lệ',
            'unique' => 'Địa chỉ email đã được sử dụng',
            'integer' => ':attribute phải là số',
            'size' => ':attribute phải có :size kí tự',
            'min' => ':attribute ít nhất phải có :min kí tự',
            'regex' => ':attribute phải là chuỗi chữ số'
        ];

        $validator = Validator::make($rows->toArray(), [
            // '*.1' => ['required'],
            // '*.2' => ['required']
        ], $messages);

        if ($validator->fails()) {
            dd($validator->errors());
        }
        $request = request()->all();
        $district_id = $request['district_id'];
        $subdistrict_id = $request['subdistrict_id'];
        if ($row->getIndex() < 9) {
            return;
        }

        dd($request->all());
        $row = $row->toArray();
        $user = [
            'name' => $row[1],
            'birthday' => $row[2],
            'gender' => $row[3] === 'nam' ? 'male' : 'female',
            'academic_level' => $row[6],
            'specialize' => $row[7],
            'address' => $row[8],
            'phone' => (string)intval($row[9]),
            'labor_ability' => $row[10] === null ? 0 : 1,
            'employment_status' => $row[12],
            'income' => $this->getIncome($row[14]),
            'email' => $row[22],
            'identity_card' => $row[23],
            'password' => '123456789',
            'district_id' => $district,
            'subdistrict_id' => $subdistrict_id,
            'approver_id' => Auth::guard('admin')->user()->id,
            'status' => User::APPROVED,
            'admin_update_id' => null,
            'created_at' => now(),
            'updated_at' => now()
        ];
        dd($user);
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

     public function chunkSize(): int
    {
        return 100;
    }
}
