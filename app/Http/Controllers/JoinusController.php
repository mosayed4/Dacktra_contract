<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor_date_ar;
use App\Models\Doctor_date_en;
use Illuminate\Support\Facades\Hash;


class JoinusController extends Controller
{
    public function showEnglishForm(){

        return view('user_area.join_us_en');
    }
    
    public function showArabicForm()
       {
        
        return view('user_area.join_us_ar');

        }

            // Store a newly created doctor in the database
   public function store(Request $request)
   {
       $validatedData = $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255|unique:doctor_date_ars',
           'phone' => 'required|string|max:20',
           'password' => 'required|string|min:8',
           'department' =>'required|string|max:255',
           'job' => 'nullable|string|max:255',
           'city' => 'required|string|max:255',
           'location' => 'string|max:255',
           'scientific_certificate_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           'syndicate_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           'clinic_photos' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'doctor_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           'professional_license' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);
   
       try {
        $doctor = Doctor_date_en::create($validatedData);

        session(['id' => $doctor->id]);

        return redirect()->route('user_area.join_us_en')->with('success', 'Doctor created successfully!');
     } 
    catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Failed to create doctor.']);
    }
     
}
    
         // Save a new doctor to the database ar 
    public function saveDoctor(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'الاسم' => 'required|string|max:255',
            'البريد' => 'required|string|email|max:255|unique:doctors',
            'الهاتف' => 'required|string|max:20',
            'كلمه-المرور' => 'required|string|min:8',
            'القسم' => 'required|string|max:255',
            'عمل' => 'nullable|string|max:255',
            'الموقع' => 'required|string|max:255',
            'المدينة' => 'required|string|max:255',
            'الشهادة-العلمية' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'كارنيه-النقابة' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'صوره-العياده' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'الشعار' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'صوره-الطبيب' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'الرخصه-المهنيه' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Hash the password
        $validatedData['كلمه-المرور'] = Hash::make($validatedData['كلمه-المرور']);

        try {
            // Create a new doctor record
            $doctor = Doctor_date_ar::create($validatedData);

            // Store the doctor ID in the session
            session(['id' => $doctor->id]);

            // Redirect with success message
            return redirect()->route('user_area.join_us_ar')->with('success', 'تم إنشاء الطبيب بنجاح!');
        } catch (\Exception $e) {
            // Handle errors and redirect back with an error message
            return redirect()->back()->withErrors(['error' => 'فشل في إنشاء الطبيب.']);
        }
    }


}
