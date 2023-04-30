<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\EmailService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    protected $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function existEmail(){
        $email = $this->request->input('email');
        $user = User::where('email', $email)
                    ->first();
        $response = "";
        ($user) ? $response = "exist" : $response = "not_exist";
        return response()->json([
            'code' =>200,
            'response' => $response
        ]);
    }

    public function activationCode($token){
        $user = User::where('activation_token', $token)->first();
        if(!$user){
            return redirect()->route('login')->with('danger', 'This token does not exist!');
        }
        if($this->request->isMethod('post'))
        {
            $code = $user->activation_code;
            $activation_code = $this->request->input('activation-code');
            if($activation_code != $code){
                return back()->with([
                    'danger' => 'This activation code is invalid!',
                    'activation_code' => $activation_code
                ]);
            }else{
                DB::table('users')
                    ->where('id', $user->id)
                    ->update([
                        'is_verified' => 1,
                        'activation_code' => '',
                        'activation_token' =>'',
                        'email_verified_at' =>new \DateTimeImmutable,
                        'updated_at' =>new \DateTimeImmutable
                    ]);
                    return redirect()->route('login')->with('success', 'Your email adress has been verified');
            }
        }
        return view('auth.activation_code', [
            'token' => $token
        ]);
    }

    public function userChecker()
    {
        $activation_token = Auth::user()->activation_token;
        $is_verified = Auth::user()->is_verified;

        if($is_verified != 1)
        {
            Auth::logout();
            return redirect()->route('app_activation_code', ['token' => $activation_token])
                        ->with('warning', 'your account is not activate yet, please check your mail-box
                        and activate your account or resent the confirmation message.');
        }else{
            return redirect()->route('app_dashboard');
        }
    }

    public function resendActivationCode($token){
        $user = User::where('activation_token', $token)->first();
        $email = $user->email;
        $name = $user->name;
        $activation_token = $user->activation_token;
        $activation_code = $user->activation_code;

        $emailSend = new EmailService;
        $subject = "Activate your account";
        $emailSend->sendEmail($subject, $email, $name, true, $activation_code, $activation_token);

        return back()->with('success', 'You have just resend the new activation code!');
    }
    public function activationAccountLink($token){
        $user = User::where('activation_token', $token)->first();
        if(!$user){
            return redirect()->route('login')->with('danger', 'This token does not exist!');
        }
        DB::table('users')
                    ->where('id', $user->id)
                    ->update([
                        'is_verified' => 1,
                        'activation_code' => '',
                        'activation_token' =>'',
                        'email_verified_at' =>new \DateTimeImmutable,
                        'updated_at' =>new \DateTimeImmutable,
                    ]);
                    return redirect()->route('login')->with('success', 'Your email adress has been verified');
    }
    public function activationAccountChangeEmail($token){
        $user = User::where('activation_token', $token)->first();
        if($this->request->isMethod('post'))
        {
            $new_email = $this->request->input('new-email');
            $user_exist = User::where('email', $new_email)->first();

            if($user_exist){
                return back()->with([
                    'danger' => 'This email address is already used! Please enter an other email address!',
                    'new_email' => $new_email
                ]);
            }else{
                DB::table('users')
                    ->where('id', $user->id)
                    ->update([
                        'email'=> $new_email,
                        'updated_at' =>new \DateTimeImmutable
                    ]);
                $activation_code = $user->activation_code;
                $activation_token = $user->activation_token;
                $name = $user->name;
                $emailSend = new EmailService;
                $subject = "Activate your account";

                $emailSend->sendEmail($subject, $new_email, $name, true, $activation_code, $activation_token);
                return back()->with('success', 'You have just resend the new activation code!');

            }
        }else{
            return view('auth.activation_account_change_email', ['token' =>$token]);
        }
    }
}
