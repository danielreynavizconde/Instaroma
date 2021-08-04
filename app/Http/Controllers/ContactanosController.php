<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }
    public function store(){
        $correo=new ContactanosMailable;
        Mail::to('dreynaviz@gmail.com')->send($correo);
        return "Mensaje enviado";
    }

}
