<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Specialty;
use App\Schedule;

class AppointmentController extends Controller
{
    public function index(){  
    	$specialties = Specialty::all(); 
    	$schedule = Schedule::all();
        return view('appointment.appointment',  ['specialty' => $specialties, 'schedule' => $schedule];
    }

    public function update(Request $request){
    	$request->validate([
            'specialty' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);

    	$appointment = new Appointment;

    	$appointment->user_id = \Auth::user()->id;
    	$appointment->doctor_id = $request->doctor_id;
    	$appointment->description = $request->description;
    	$appointment->appointment_date = $request->date;

    	$appointment->save();


    	return view('home');
    }
}
