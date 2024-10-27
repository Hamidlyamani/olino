@extends('master')
@section('main')
    <section>
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">


                                <img src="{{ asset('images/default.webp') }}" alt="" alt="login form"
                                    class="img-fluid" style="margin:30px 0px ; height:500px ; overflow:hidden ;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if (session('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <form action="/login/connect" method="POST">
                                        {{ csrf_field() }}


                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account
                                        </h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17" name='email'
                                                class="form-control form-control-lg" placeholder="Email address" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" name="password"
                                                class="form-control form-control-lg" placeholder="Password" />
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn  btn-lg btn-block" type="submet">Login</button>
                                        </div>

                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #ff6600;">Don't have an account?
                                            <a href="{{ route('registe') }}" style="color: #ff6600;">Register here</a>
                                        </p>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
