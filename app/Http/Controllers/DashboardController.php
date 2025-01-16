<?php

namespace App\Http\Controllers;

use App\Models\idea;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        /*dump(idea::all());*/
        return view('dashboard',[
            'ideas' => idea::orderBy('created_at', 'DESC')->paginate(5)
        ]);
    }
}
