@extends('layouts.app')

@section('title', 'Laravel Unlocked! - Edit Student')

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-header bg-danger text-white">
            <h4 class="mb-0">Edit Student</h4>
        </div>

        <div class="card-body">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('students.update', $student) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Enter Full Name"
                            value="{{ old('name', $student->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Enter Email"
                            value="{{ old('email', $student->email) }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text"
                            name="phone"
                            class="form-control @error('phone') is-invalid @enderror"
                            placeholder="9876543210"
                            value="{{ old('phone', $student->phone) }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Course</label>
                        <select name="course" class="form-select @error('course') is-invalid @enderror">
                            <option value="">Select Course</option>
                            @foreach(['BCA', 'MCA', 'BBA', 'MBA'] as $course)
                                <option value="{{ $course }}"
                                    {{ old('course', $student->course) === $course ? 'selected' : '' }}>
                                    {{ $course }}
                                </option>
                            @endforeach
                        </select>
                        @error('course')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="text-end">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-danger">Save Student</button>
                </div>

            </form>

        </div>
    </div>
@endsection
