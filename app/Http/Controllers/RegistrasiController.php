<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;

class RegistrasiController extends Controller
{
    public function index() 
    {
        return view('registrasi.index');
    }

    public function simpanRegistrasi(Request $request)
    {
        $this->validate($request, [
                'username' => 'required|string',
                'password' => 'required|string',
        ]);
    }
}
