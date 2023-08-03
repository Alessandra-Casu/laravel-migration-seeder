<?php

namespace App\Http\Controllers\Guest;

use Carbon\Carbon;
use App\Models\Train;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function trains(){
        // il controller chiama il Model per recuperare i dati dal database
        $collTrains = Train::all();
         // il controller chiama la View passando dei dati
        return view('trains', compact('collTrains'));
    }
   
    public function today()
    {
        $today = Carbon::today();
        // dd($today);
        $collTrains = Train::where('departure_date', $today)->get();
        return view('today', [
            'trains' => $collTrains,
        ]);
    }
}
