<?php

namespace App\Http\Controllers;

use http\Env\Request;

abstract class Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:4', 'max:20'],
            'password' => ['required']
        ]);
    }
}
