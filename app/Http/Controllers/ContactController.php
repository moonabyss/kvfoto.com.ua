<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:2',
            'phone' => 'required|digits:10'
        ]);
    }

    protected function sendMessage(Request $request)
    {
        //google recaptcha
        $post = $request->all();
        if(isset($post['g-recaptcha-response']) && !empty($post['g-recaptcha-response'])) {
            $secret = env('GOOGLE_CAPTCHA_KEY', '');
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success)
            {
                $this->validate($request, [
                    'name' => 'required|string|min:3|max:50',
                    'zvonilka' => 'required|string|min:10|max:20',
                    'commentar' => 'required|min:3|max:100',
                ]);
            }
        }

        return view('contacts');
    }
}
