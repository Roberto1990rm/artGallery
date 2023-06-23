<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;
use App\Models\Pintura;



class PinturasController extends HomeController
{
    public function list()
    {
        $pinturas = Pintura::all();

        return view('pinturas', ['pinturas' => $pinturas]);
    }
}