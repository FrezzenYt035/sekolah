<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
{
    $siswa = Siswa::with('kelas')->get();
    return view('dummy', compact('siswa'));
}

}
