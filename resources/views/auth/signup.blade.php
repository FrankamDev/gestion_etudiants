@extends('layouts.clean')
@section('title', 'Inscription')
@section('childContent')
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <img src="/img/logoipsum-265.svg" alt="" />
                        </a>
                    </div>
                    <h1 class="auth-page-title">Signup</h1>

                    <form action="" method="post">
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Your Password" />
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Repeat Password" />
                        </div>
                        <hr />
                        <div class="form-group">
                            <input type="text" placeholder="First Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Last Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone" />
                        </div>
                        <button class="w-full btn btn-primary btn-login">Register</button>

                        <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                            <button class="flex items-center justify-center gap-1 btn btn-default">
                                <img src="/img/google.png" alt="" style="width: 20px" />
                                Google
                            </button>
                            <button class="flex items-center justify-center gap-1 btn btn-default">
                                <img src="/img/facebook.png" alt="" style="width: 20px" />
                                Facebook
                            </button>
                        </div>
                        <div class="login-text-dont-have-account">
                            Already have an account? -
                            <a href="/login.html"> Click here to login </a>
                        </div>
                    </form>
                </div>
                <div class="auth-page-image">
                    <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </main>
@endsection
