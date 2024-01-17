<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;

class AdminController extends Controller
{
    public function index() {
        $application=Applications::all();
        return view('admin.index',['application' => $application]);
    }
}
