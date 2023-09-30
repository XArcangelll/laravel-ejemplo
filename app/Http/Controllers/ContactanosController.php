<?php

namespace App\Http\Controllers;

use App\Mail\ContactactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        

        $request->validate([
            "name"=> "required",
            "correo"=> "required|email",
            "mensaje"=> "required"
        ]);

       

        Mail::to('correoqudeberecibir@gmail.com')->send(new ContactactanosMailable($request->all()));

        return redirect()->route("contactanos.index")->with("success","Correo enviado correctamente");

    }
}
