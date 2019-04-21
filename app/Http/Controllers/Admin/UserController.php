<?php

namespace App\Http\Controllers\Admin;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Disability;
use App\Models\UserDisability;
use App\Models\Need;
use App\Models\Role;
use App\Models\UserNeed;
use App\Models\District;
use App\Models\Subdistrict;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['district', 'subdistrict'])->get();
        return view('admin.user.list')->with([
            'users' => json_encode($users)
        ]);
    }

    public function showUserImport()
    {
        $addressData = $this->getAddressByRole();
        $isSuperadministrator = $this->checkIsSuperAdmin();
        return view('admin.user.import')->with([
            'districts' => $addressData['districts'],
            'subdistricts' => $addressData['subdistricts'],
            'isSuperadministrator' => $isSuperadministrator,
        ]);
    }

    public function importUser(Request $request)
    {
        try {
            $import = Excel::import(new UsersImport, request()->file('user_file'));
            return redirect()->route('admin.users.index');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
        }
    }

    public function showUserExport()
    {
        return view('admin.user.export');
    }

    public function exportUser(Request $request)
    {
        try {
            return Excel::download(new UsersExport, 'users.xlsx');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
        }
    }

    public function show(Request $request, $id)
    {
        $user = User::where('id', $id)->with(['disability']);
        $addressData = $this->getAddressByRole();
        $isSuperadministrator = $this->checkIsSuperAdmin();
        $disabilities = Disability::all()->pluck('description', 'id');
        $needs = Need::all();
        return view('admin.user.show')->with([
            'user' => $user,
            'districts' => $addressData['districts'],
            'subdistricts' => $addressData['subdistricts'],
            'isSuperadministrator' => $isSuperadministrator,
            'disabilities' => $disabilities,
            'needs' => $needs
        ]);
    }

    public function showCreateForm()
    {
        $isSuperadministrator = $this->checkIsSuperAdmin();
        $addressData = $this->getAddressByRole();
        $disabilities = Disability::all()->pluck('description', 'id');
        $needs = Need::all();
        return view('admin.user.create')->with([
            'districts' => $addressData['districts'],
            'subdistricts' => $addressData['subdistricts'],
            'isSuperadministrator' => $isSuperadministrator,
            'disabilities' => $disabilities,
            'needs' => $needs
        ]);
    }

    protected function getAddressByRole() {
        $admin = Auth::guard('admin')->user();
        $adminRole = $admin->roles()->first();
        $data = [
            'districts' => [],
            'subdistricts' => []
        ];

        if ($adminRole->name === 'superadministrator') {
            $data['districts'] = District::all();
            $data['subdistricts'] = Subdistrict::all();
        } else if ($adminRole->name === 'district_administrator') {
            $data['districts'] = District::where('id', $admin->district_id)->get();
            $data['subdistricts'] = Subdistrict::where('district_id', $admin->district_id)->get();
        } else {
            $data['districts'] = District::where('id', $admin->district_id)->get();
            $data['subdistricts'] = Subdistrict::where('id', $admin->subdistrict_id)->get();
        }

        return $data;
    }

    protected function checkIsSuperAdmin() {
        $adminRole = Auth::guard('admin')->user()->roles()->first();
        if ($adminRole->name === 'superadministrator') {
            return 1;
        } else {
            return 0;
        }
    }

    protected function validator(array $data)
    {
        $messages = [
            'required' => ':attribute không được trống.',
            'string' => ':attribute phải là chuỗi kí tự',
            'email' => 'Địa chỉ email không hợp lệ',
            'unique' => 'Địa chỉ email đã được sử dụng',
            'integer' => ':attribute phải là số',
            'size' => ':attribute phải có :size kí tự',
            'min' => ':attribute ít nhất phải có :min kí tự',
            'regex' => ':attribute phải là chuỗi chữ số'
        ];

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'identity_card' => ['required', 'string', 'size:9', 'regex:/^([0-9]+)$/'],
            'phone' => ['required', 'string', 'min:10', 'regex:/^([0-9]+)$/'],
            'birthday' => ['required', 'string'],
            'gender' => ['required', Rule::in(['male', 'female'])],
            'address' => ['required', 'string'],
            'employment_status' => ['string'],
            'labor_ability' => ['required', 'boolean'],
            'income' => ['integer'],
            'academic_level' => ['required'],
            'disability' => ['required', 'integer'],
            'disability_detail' => ['required', 'string'],
            'specialize' => ['required', 'string'],
            'need' => ['required'],
            'district_id' => ['required', 'integer'],
            'subdistrict_id' => ['required', 'integer']
        ], $messages);
    }

    public function createUser(Request $request)
    {
        $data = $request->all();
        $this->validator($data)->validate();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'identity_card' => $data['identity_card'],
            'birthday' => $data['birthday'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'employment_status' => $data['employment_status'],
            'labor_ability' => $data['labor_ability'],
            'income' => $data['income'],
            'academic_level' => $data['academic_level'],
            'specialize' => $data['specialize'],
            'status' => User::APPROVED,
            'district_id' => $data['district_id'],
            'subdistrict_id' => $data['subdistrict_id'],
            'approver_id' => Auth::guard('admin')->user()->id,
            'admin_update_id' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $userRole =Role::where('name', 'user')->first();
        $user->attachRole($userRole);

        UserDisability::create([
            'user_id' => $user->id,
            'disability_id' => $data['disability'],
            'detail' => $data['disability_detail']
        ]);

        $userNeed = $data['need'];
        foreach($userNeed as $need) {
            $dataUserNeed[] = [
                'user_id' => $user->id,
                'need_id' => $need,
                'detail' => $this->getNeedDetail($need, $data),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
        }
        UserNeed::insert($dataUserNeed);
        return redirect()->route('admin.users.index');
    }

    protected function getNeedDetail($need, $data) {
        switch ($need) {
            case Need::HOC_NGHE:
                return $data['user-job-detail'];
                break;

            default:
                return null;
                break;
        }
    }
}
