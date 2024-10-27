@extends('master')
@section('main')
    <section >
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('images/default.webp') }}" alt="login form" class="img-fluid"
                                    style="margin:30px 0px ; height:500px ; overflow:hidden ;" />
                            </div>
                            <div class="wrapper">
                                <h2>Registration</h2>
                                <form action="/registe/store" method="post">
                                    @csrf
                                    @method('post')
                                    <div class="input-box">
                                        <input type="text" name="name" placeholder="Enter your name" required>
                                        @error('name')
                                            <div class="text-danger"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-box">
                                        <input type="text" name="email" placeholder="Enter your email" required>
                                        @error('email')
                                            <div class="text-danger"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-box">
                                        <input type="text" name="phone" placeholder="Enter your number phone" required>
                                        @error('phone')
                                            <div class="text-danger"> {{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="input-box">
                                        <input type="text" name="adresse" placeholder="Enter your adresse" required>
                                        @error('adresse')
                                            <div class="text-danger"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-box">
                                        <input type="password" name="password" placeholder="Create password" required>
                                        @error('password')
                                            <div class="text-danger"> {{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="input-box button">
                                        <input type="Submit" class="btn  btn-lg btn-block" value="Register Now">
                                    </div>
                                    <div class="text">
                                        <h3>Already have an account? <a href="{{ route('login') }}">Login now</a></h3>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
