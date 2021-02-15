<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" /></a>
    <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto flex-nowrap">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#startModal">Try Demo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
        </li>

      </ul>
    </div>
  </div>
</nav>



<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <img src="img/login.svg" class="img-fluid mt-5" style="max-width: 200px;" />
        <h3>Login to Dashboard</h3>
        <p>Welcome back.</p>
        <div class="d-grid gap-2">
          <button type="button" class="btn btn-lg sign-up-btn" style="background-color:#00acee;border:none;"><i class="fab fa-twitter"></i> Continue with twitter</button>
          <button type="button" class="btn btn-lg sign-up-btn" style="background:#000;border:none;"><i class="fab fa-google"></i> Continue with google</button>
        </div>

        <p class="mt-3 mb-3"><a href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Influencer? Signup here.</a></p>
        <small>By signing up, you agree to our <a href=" #">Terms & Conditions</a> & <a href="#">Privacy Policy</a></small>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <img src="img/signup.svg" class="img-fluid mt-5" style="max-width: 200px;" />
        <h3>Create your Page</h3>
        <p>A personal contact page.</p>
        <div class="d-grid gap-2">
          <button type="button" class="btn btn-lg sign-up-btn" style="background-color:#00acee;border:none;"><i class="fab fa-twitter"></i> Continue with twitter</button>
          <button type="button" class="btn btn-lg sign-up-btn" style="background:#000;border:none;"><i class="fab fa-google"></i> Continue with google</button>
        </div>

        <p class="mt-3 mb-3"><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Have an account? Login.</a></p>
        <small>By signing up, you agree to our <a href=" #">Terms & Conditions</a> & <a href="#">Privacy Policy</a></small>
      </div>

    </div>
  </div>
</div>


<div class="modal fade" id="startModal" tabindex="-1" aria-labelledby="startModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <img src="img/signup.svg" class="img-fluid mt-5" style="max-width: 200px;" />
        <h3>Create your Page</h3>
        <p>A personal contact page.</p>
        <div class="d-grid gap-2">
          <button type="button" class="btn btn-lg sign-up-btn" style="background-color:#00acee;border:none;"><i class="fab fa-twitter"></i> Continue with twitter</button>
          <button type="button" class="btn btn-lg sign-up-btn" style="background:#000;border:none;"><i class="fab fa-google"></i> Continue with google</button>
        </div>

        <p class="mt-3 mb-3"><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Have an account? Login.</a></p>
        <small>By signing up, you agree to our <a href=" #">Terms & Conditions</a> & <a href="#">Privacy Policy</a></small>
      </div>

    </div>
  </div>
</div>