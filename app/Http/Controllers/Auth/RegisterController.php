<?php
namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/trang-chu';
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
        $checktoantu = [
            'name' => ['required', 'string', 'max:255','min:6','regex:/^[a-zA-Z`]{6,255}$/'],
            'email' => ['required', 'string', 'email','min:8', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => ['bail','required','same:password'],
        ];
        $checkvalidate =[
            'name.required'=>'Họ Và Tên Phải Lớn Hơn 6 Kí Tự',
            'name.regex'=>'Họ Và Tên Không chứa kí tự đặc biệt',
            'email.unique'=>'Email Đã Tồn Tại',
            'email.required'=>'Email không xác định',
            'email.email'=>'Email Không Đúng Định Dạng',
            'password.min'=>'Mật Khẩu Phải Lớn Hơn 6 Kí Tự',
            'password.confirmed'=>'Mật Khẩu Không Trùng Nhau',
        ];
   // dd($data);
    // die();
     return Validator::make($data,$checktoantu,$checkvalidate);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_group_user'=> 1,
            'role_id'=>2,
        ]);
    }
}
