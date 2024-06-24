<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request) {
        $id = $request->id;
        $name = "Donal Trump";
        $age = "75";
        $data = array('id' => $id, 'name' => $name, 'age' => $age);

        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $cookie = cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        return response()->json($data, 200)->withCookie($cookie);
    }

    
}
