<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;

class AdminController extends Controller
{
    public function index() {
        $application=Applications::paginate(2);
        return view('admin.index',compact('application'));
    }
}
