<?php
use Illuminate\Http\Request;

Route::middleware('auth:airlock')->get('/user', function (Request $request) {
    return $request->user();
});
