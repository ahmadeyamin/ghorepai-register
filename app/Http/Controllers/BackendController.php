<?php

namespace App\Http\Controllers;

use App\DeliveryMan;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        $heros = DeliveryMan::latest()->paginate(20);
        return view('backend.home',compact('heros'));
    }
}
