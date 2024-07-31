<?php

namespace App\Http\Controllers;

use App\Models\Doctor_date_ar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorDateArController extends Controller
{
    //

   // Display a listing of the doctors
   public function index()
   {
       $doctors = Doctor_date_ar::all();
    //    return view('doctors.index', compact('doctors'));
   }

   // Show the form for creating a new doctor
   public function create()
   {
       return view('doctors.create');
   }

   // Store a newly created doctor in the database
   public function store(Request $request)
   {
       $validatedData = $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255|unique:doctor_date_ars',
           'phone' => 'required|string|max:20',
           'password' => 'required|string|min:8',
           'department' => 'nullable|string|max:255',
           'job' => 'nullable|string|max:255',
           'city' => 'nullable|string|max:255',
           'location' => 'nullable|string|max:255',
           'scientific_certificate_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'syndicate_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'clinic_photos' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'doctor_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'professional_license' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       $doctor = Doctor_date_ar::create($validatedData);

       // Store the doctor's ID in the session
       session([
                'id' => $doctor->id
    
            ]);

       return redirect()->route('layouts.app')->with('success', 'Doctor created successfully!');
   }
    
   
}
