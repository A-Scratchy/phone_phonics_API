<?php

use App\Phonic;
use Illuminate\Http\Request;

Route::get('phonics', function() {
    return Phonic::all();
});

Route::get('phonic/{id}', function($id) {
    return Phonic::find($id);
});

Route::post('phonic', function(Request $request) {
    return Phonic::create($request->all);
});

Route::put('phonic/{id}', function(Request $request, $id) {
    $phonic = Phonic::findOrFail($id);
    $phonic->update($request->all());

    return $phonic;
});

Route::delete('phonic/{id}', function($id) {
    Phonic::find($id)->delete();

    return 204;
});