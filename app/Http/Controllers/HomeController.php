<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $client = \Auth::user();    
        return view('home', ['client' => $client]);
    }

    public function edit(){
        $client = \Auth::user();  
        return view('profile.edit', ['client' => $client]);
    }

    public function update(Request $request){
        $request->validate([
            'height' => 'required',
            'weight' => 'required',
            'birth_date' => 'required',
        ]);

        $id = \Auth::user()->id;
        $user = User::find($id);

        $user->birth_date = $request->birth_date;
        $user->height = $request->height;
        $user->weight = $request->weight;

        $user->save();


        return view('home', ['client' => $user, 'warning_1' => 'true']);
    }

}
