<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function dashboard()
    {
        return view('doctor.dashboard');
    }
    
    public function patientRecords()
    {
        // Doctor patient records logic
    }

    public function appointments()
    {
        return view('doctor.appointments');
    }

    public function patients()
    {
        return view('doctor.patients');
    }

    public function profile()
    {
        return view('doctor.profile');
    }
}