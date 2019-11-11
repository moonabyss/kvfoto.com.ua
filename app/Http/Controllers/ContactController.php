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
        $validator = validator($request->all());
        //dd($validator);
        if ($validator->fails()) {
            return redirect('contacts')
                        ->withErrors($validator)
                        ->withInput();
        }
        return view('contacts');
    }
}
