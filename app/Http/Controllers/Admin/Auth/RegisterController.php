<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
use App\Models\Disability;
use App\Models\UserDisability;
use App\Models\Need;
use App\Models\Role;
use App\Models\UserNeed;
use App\Models\District;
use App\Models\Subdistrict;
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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'identity_card' => ['required', 'string'],
            'phone' => ['required', 'string', 'min:8'],
            'birthday' => ['required', 'date'],
            'gender' => ['required', Rule::in(['male', 'female'])],
            'district_id' => ['required', 'integer'],
            'subdistrict_id' => ['required', 'integer']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'birthday' => $data['birthday'],
            'gender' => $data['gender'],
            'district_id' => $data['district_id'],
            'subdistrict_id' => $data['subdistrict_id'],
        ]);

        $userRole = Role::where('name', 'user')->first();
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
        return $user;
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
