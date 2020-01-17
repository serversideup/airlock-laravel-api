<?php

Route::post('/login', function( ){
    $email = Request::get('email');
    $password = Request::get('password');
    

    if (Auth::attempt([
        'email' => $email,
        'password' => $password
    ])) {
        return response()->json('', 204 );
    }else{
        return response()->json([
            'error' => 'invalid_credentials'
        ], 403);
    }
});
