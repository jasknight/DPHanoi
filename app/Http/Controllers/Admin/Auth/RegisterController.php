<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\Admin;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected function guard()
    {
        return Auth::guard('admin');
    }

    
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'required' => 'Giá trị :attribute không được trống.',
            'string' => 'Giá trị của :attribute phải là chuỗi kí tự',
            'email' => 'Địa chỉ email không hợp lệ',
            'integer' => 'Giá trị của :attribute phải là số',
            'size' => 'Giá trị của :attribute phải có :size kí tự',
            'min' => 'Giá trị của :attribute ít nhất phải có :min kí tự',
            'regex' => 'Giá trị của :attribute phải là chuỗi chữ số'
        ];

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'identity_card' => ['required', 'string', 'size:9', 'regex:/^([0-9]+)$/'],
            'phone' => ['required', 'string', 'min:10', 'regex:/^([0-9]+)$/'],
            'birthday' => ['required', 'date'],
            'gender' => ['required', Rule::in(['male', 'female'])],
            'district_id' => ['required', 'integer'],
            'subdistrict_id' => ['required', 'integer']
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $this->validator($request->all())->validate();

        $data = $request->all();
        $admin = Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'identity_card' => $data['identity_card'],
            'birthday' => $data['birthday'],
            'gender' => $data['gender'],
            'district_id' => $data['district_id'],
            'subdistrict_id' => $data['subdistrict_id'],
        ]);

        $adminRole = Role::find($data['role']);
        $admin->attachRole($adminRole);

        return redirect()->route('admin.admins.index');
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
