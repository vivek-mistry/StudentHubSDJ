<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('students.register');
    }

    public function store(StoreRegisterRequest $request): RedirectResponse
    {
        Student::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'course' => $request->input('course'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('students.register')
            ->with('success', 'Registration successful! Welcome aboard.');
    }
}
