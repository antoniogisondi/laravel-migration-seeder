<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trains;

class TrainController extends Controller
{
    public function home(){
        $data = date('Y-m-d', strtotime(now()));
        $trains = Trains::where('data_di_partenza', '=', $data)->get();
        return view('home', compact('trains'));
    }
}
