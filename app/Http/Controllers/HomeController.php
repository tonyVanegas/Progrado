<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('layouts_user.admin');
            } else if ($usertype == 'admin') {
                return view('layouts_admin.admin');
            } else {
                return redirect()->back();
            }
        }
    }
}
