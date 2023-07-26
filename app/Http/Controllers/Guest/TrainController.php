<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trains;

class TrainController extends Controller
{
    public function home(){
        $trains = Trains::all();
        return view('home');
    }
}
