@extends('front.auth.auth')
@section('title') Sign Up @endsection
@section('content')
   <section class="login-container">
      <div class="container">
         <div class="col-lg-7 m-auto text-center">
            <div class="card worldwideLeader bg-transparent border-0">
               <div class="card-header bg-transparent">
                  <h1>Sign in</h1>
               </div>
               <div class="card-body my-5">
                  <div class="col-lg-5 m-auto">
                     <input type="text" class="form-control bg-transparent shadow-sm border" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Email address">
                  </div>
                  <div class="col-lg-5 m-auto my-3">
                     <input type="password" class="form-control bg-transparent shadow-sm border" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Password">
                  </div>
                  <div class="col-lg-5 m-auto my-4">
                     <a href="javascript:void(0)" class="see-all btn-lg login-button">
                        Sign Up to Start Fundraising
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</body>
@endsection
