<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penanam;

use function PHPSTORM_META\type;

class PenanamController extends Controller
{
    public function index(){
        return view('dataPenanam', [
            'pnm' => Penanam::all()
        ]);
    }

    public function standar(){
        return view('standarPenanam', [
            'pnm' => Penanam::all()
        ]);
    }
}
