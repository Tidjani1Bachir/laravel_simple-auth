<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;


class AdminController extends Controller
{
    public function AdminDashboard(){

        return view('admin.index');

    } //end public function AdminDashboard
}
