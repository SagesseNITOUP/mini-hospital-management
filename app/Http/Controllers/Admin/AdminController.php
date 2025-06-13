<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        return view('admin.pages.index');
    }

    public function roles()
    {
        return view('admin.pages.roles');
    }
}
