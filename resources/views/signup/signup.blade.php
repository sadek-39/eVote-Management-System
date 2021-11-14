@include('layout.page-head')
<!-- auth -->
<main id="auth">
    <div class="container">   
        <form class="form-auth py-5 text-center" action="{{route('auth.register')}}" method="POST">
            @csrf
            @if (isset($response))
                @if ($response==='1')
                    <div class="alert alert-success mb-3" role="alert">
                        <p class="mb-0">Account Created Successfully</p>
                    </div>
                @else
                    <div class="alert alert-danger mb-3" role="alert">
                        <p class="mb-0">{{$response}}</p>
                    </div>
                @endif  
            @endif
            <img class="mb-4 img-fluid" src="assets/img/d-logo.png" alt="logo" width="75">
            <h1 class="h3 mb-3 fw-normal">Admin sign Up</h1>
            <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingUserName" placeholder="User Name" name="username">
                <label for="floatingUserName">User Name</label>
                @error('username')
                    <p class="mb-3 text-start text-danger"><small>{{$message}}</small></p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="floatingFullName" placeholder="Full Name" name="fullname">
                <label for="floatingFullName">Full Name</label>
                @error('fullname')
                    <p class="mb-3 text-start text-danger"><small>{{$message}}</small></p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('position') is-invalid @enderror" id="floatingPosition" placeholder="Position" name="position">
                <label for="floatingPosition">Position</label>
                @error('position')
                    <p class="mb-3 text-start text-danger"><small>{{$message}}</small></p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="number" class="form-control @error('phone') is-invalid @enderror" id="floatingPhnNumber" placeholder="Phone Number" name="phone">
                <label for="floatingPhnNumber">Phone Number</label>
                @error('phone')
                    <p class="mb-3 text-start text-danger"><small>{{$message}}</small></p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="number" value="2021" readonly  class="form-control"  placeholder="Pin number" name="pin">
                <label for="floatingPin">Pin Number</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <p class="mb-3 text-start text-danger"><small>{{$message}}</small></p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <p class="mb-3 text-start text-danger"><small>{{$message}}</small></p>
                @enderror
            </div>
            <div class="checkbox my-3">
                <label for="remember-me">
                    <input id="remember-me" type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
            <p class="mb-0 mt-2">
                <small>have an account?</small>
                <a href="{{route('auth.loginview')}}">Sign In</a>
            </p>
            <p class="mt-5 mb-3 text-muted"> 
                &copy; <script type="text/javascript"> document.write(new Date().getFullYear()) </script> 
            </p>
        </form>
       
    </div>
</main>
<!-- auth -->
@include('layout.page-tail')