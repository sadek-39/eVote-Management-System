
@include('layout.page-head')
<!-- auth -->
<main id="auth">
    <div class="container">
        <form class="form-auth py-5 text-center" action="{{route('auth.login')}}" method="POST" >
            @csrf
            <img class="mb-4 img-fluid" src="assets/img/d-logo.png" alt="logo" width="75">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox my-3">
                <label for="remember-me">
                    <input id="remember-me" type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
             <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
            {{-- <a href="dashboard.html" class="w-100 btn btn-lg btn-primary">Sign In</a> --}}
            <p class="mb-0 mt-2">
                <small>Don't have an account?</small>
                <a href="{{route('auth.index')}}">Sign Up</a>
            </p>
            <p class="mt-5 mb-3 text-muted"> 
                &copy; <script type="text/javascript"> document.write(new Date().getFullYear()) </script> 
            </p>
        </form>
    </div>
</main>
<!-- auth -->
@include('layout.page-tail')