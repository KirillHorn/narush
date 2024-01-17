<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class applicationController extends Controller
{
    public function application_view() {
        return view('application');
    }
    public function apllication_create(Request $request) {
      $request->validate([
        'description' => 'required',
        'car' => 'required',
      ],[
        'description.required' => 'Это обязательное поле!',
        'car.required' => 'Это обязательное поле!',
      ]);
     
      $application = $request->all();

      $applicationCreate=Applications::create([
        'description' => $application['description'],
        'car' => $application['car'],
        'status'=>1,
        'id_user'=> Auth::user()->id,
      ]);

      if ($applicationCreate) {
        return redirect("/personalcab")->with("application", "Заявка создана!");
      } else {
        return redirect()->back()->with("application", "Заявка создана!");
      }
    }

    public function accepted($id) {

      $application=Applications::find($id);

      $application->status = 2;

      $application->save();
      
      return redirect("/admin/index")->with("accepted", "Заявка Принята!");
    }

    public function reject($id) {
      $application=Applications::find($id);

      $application->status = 3;

      $application->save();
      
      return redirect("/admin/index")->with("accepted", "Заявка Отклоенна!");
    }

}
