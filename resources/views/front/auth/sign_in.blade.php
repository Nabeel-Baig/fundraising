@extends('front.auth.auth')
@section('title') Sign In @endsection
@section('content')
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 m-auto ms-0">
                    <a class="brandong-logo" href="home.blade.php"><img class="w-100" src="{{ asset($setting->logo) }}" alt="{{ asset($setting->logo) }}"></a>
                </div>
                <div class="col-6 col-lg-4 text-end me-0 m-auto">
                    <div>
                        Don't have an account?
                        <a href="becomemember.php" class="see-all">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login-container">
        <div class="container">
            <div class="col-lg-7 m-auto text-center">
                <div class="card worldwideLeader bg-transparent border-0">
                    <div class="card-header bg-transparent">
                        <h1>Sign in</h1>
                    </div>
                    <div class="card-body my-5">
                        <form action="">
                        <div class="col-lg-5 m-auto">
                            <input type="text" class="form-control bg-transparent shadow-sm border"
                                   aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                   placeholder="Email address">
                        </div>
                        <div class="col-lg-5 m-auto my-3">
                            <input type="password" class="form-control bg-transparent shadow-sm border"
                                   aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                   placeholder="Password">
                        </div>
                        <div class="col-lg-5 m-auto my-4">
                            <button type="submit" class="see-all btn-lg login-button">
                                Sign In to Start Fundraising
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
