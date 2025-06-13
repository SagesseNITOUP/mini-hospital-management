<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function dashboard()
    {
        return view("frontend.home");
    }



    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegisterForm()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = $request->firstName . ' ' . $request->lastName;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);

        $randomString = Str::random(40);
        $verificationCode = $randomString . now()->timestamp . $user->email;
        $user->email_verification_code = $verificationCode;

        // Save the user to the database first
        $user->save();

        Mail::to($user->email)->send(new UserMail($user));

        $message = "We sent an email, verify your account. Didn't receive it?.";

        //$message = "We sent an email, verify your account. Didn't receive it? <a href='" . route('resend-confirmation-email') . "' class='underline'>Resend</a>.";

        return redirect()->route('login')->with('success', $message);

    }

    public function connexion()
    {
        return   view("frontend.connexion");
    }

    public function displayData()
    {
        $doctors = User::where('profile', 'doctor')
            //->with('nextAppointment')
            ->get();

        return view("frontend.Appointment", compact('doctors'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $location = $request->input('location');

        $doctors = User::where('profile', 'doctor')
            ->when($query, function ($q) use ($query) {
                $q->where(function ($subQuery) use ($query) {
                    $subQuery->where('name', 'like', "%{$query}%")
                        ->orWhere('speciality', 'like', "%{$query}%")
                        ->orWhere('establishment', 'like', "%{$query}%"); // if this field exists
                });
            })
            ->when($location, function ($q) use ($location) {
                $q->where('city', 'like', "%{$location}%"); // or use address if city not stored separately
            })
            ->get();

        return view('frontend.Appointment', compact('doctors'));
    }

    public function verify($id, $verificationCode)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('login')->with('error', 'User not found.');
        }

        if($user->email_verification_code == null)
        {
            return redirect()->route('login')->with('warning', 'Email already verified.');
        }

        if ($user->email_verification_code == $verificationCode) {
            $user->email_verified_at = now();
            $user->email_verification_code = null; // Clear the code
            $user->save();

            return redirect()->route('login')->with('success', 'Email verified successfully.');
        } else {
            return redirect()->route('login')->with('error', 'Invalid verification code.');
        }

    }

    public function resend_confirmation_email()
    {
        return view('front.pages.resend_email');
    }

    public function  resend_email_verification_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }
        $user = User::where('email',$request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        Mail::to($user->email)->send(new UserMail($user));

        return redirect()->route('login')->with('success_verification_email_sent', 'Email sent successfully.');


    }


    public function list()
    {
        return view('admin.pages.user-list');
    }
}
