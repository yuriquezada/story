<?php include("../includes/header.php")?>

<div class="container pt-5">
  <div class="row">
    <div class="col-sm-4 m-auto">
      <form>
        <h2>Sign Up</h2>
        <h5>Or <a href="login.php">Log in</a></h5>
        <div class="form-group">
          <label for="firstName">First name</label>
          <input id="firstName" type="text"  class="form-control" aria-required="true">
        </div>
        <div class="form-group">
          <label for="lastName">Last name</label>
          <input id="lastName" type="text" class="form-control" aria-required="true">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php include("../includes/footer.php")?>