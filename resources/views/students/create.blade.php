{{-- @extends('layouts.app')

@section('content')
    <h1>Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <button type="submit">Add Student</button>
        </div>
    </form>
@endsection --}}

@extends('layouts.app')

@section('content')
    <h1>Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Register Today</h3>
                            <p>Fill in the data below.</p>
                            <form class="requires-validation" novalidate>

                                <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                <div class="valid-feedback">Username field is valid!</div>
                                <div class="invalid-feedback">Username field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                    <div class="valid-feedback">Email field is valid!</div>
                                    <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>


                            <div class="col-md-12 mt-3">
                                <label class="mb-3 mr-1" for="gender">Gender: </label>

                                <input type="radio" class="btn-check" name="gender" id="male" value="male" autocomplete="off" required>
                                <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                                <input type="radio" class="btn-check" name="gender" id="female" value="female" autocomplete="off" required>
                                <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                    <div class="invalid-feedback mv-up">Please select a gender!</div>
                                </div>

                            {{-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label">I confirm that all data are correct</label>
                            <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div> --}}


                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
