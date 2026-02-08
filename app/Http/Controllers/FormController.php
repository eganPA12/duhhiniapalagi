<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function submit(Request $request) {
        $username = $request->input('username');
        return view('thank_you', compact('username'));
    }
}
