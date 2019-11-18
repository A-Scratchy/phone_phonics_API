<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonicController extends Controller
{
    public function index()
    {
        return Phonic::all();
    }

    public function show($id)
    {
        return Phonic::find($id);
    }

    public function update(Request $request, $id)
    {
        $phonic = Phonic::findOrFail($id);
        $phonic->update($request->all())

        return $phonic
    }

    public function delete(Request $request, $id) 
    {
        $phonic = Phonic::findOrFail($id);
        $phonic->delete();

        return 204;

    }
}
