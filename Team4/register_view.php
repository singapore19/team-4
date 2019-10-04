<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    </div>
    <h1 class='text-center'> Sign up as a volunteer</h1>
    <div class="col-md-12 order-md-1 text-center">
      
      <form class="needs-validation" action="form_view.php" method="post">
        <div class="row justify-content-center">
          <div class="col-md-6">
            Name <input type="text" class="form-control " id="username" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid name is required.
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-6">
            Email <input type="text" class="form-control " id="email" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid email is required.
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
        <div class="col-md-6 ">
          <label for="address">Location</label>
          <input type="text" class="form-control" id="address" placeholder="Bras Pasah" required>
          <div class="invalid-feedback">
            Please enter a proper address.
          </div>
        </div>

        </div>

        <div class="row justify-content-center">

        <div class=" col-md-2">
            <label for="Age">Age</label>
            <select class="form-control" id="Age">
            <?php
                for ($x = 16; $x <= 100; $x++) {
                  echo "<option>$x</option>";
              }
            ?>
            </select>
          </div>

          <div class=" col-md-2">

            <label for="Race">Race</label>
            <select class="form-control" id="Race">
            <?php
            $race_list = array('Chinese', 'Indian', 'Malay', 'Caucasian', 'Others');
                foreach($race_list as $race) {
                  echo "<option>$race</option>";
              }
            ?>
            </select>
          </div>
          <div class=" col-md-2">

            <label for="Age">Gender</label>
            <select class="form-control" id="Gender">
            <?php
            $gender_list = array('Male', 'Female');
                foreach($gender_list as $gender) {
                  echo "<option>$gender</option>";
              }
            ?>
            </select>
            </div>
            </div>
          <div class="row justify-content-center">
          </div>

        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="mailing_subscription" name= 'mailing_subscription' value = 'yes'>
          <label class="custom-control-label" >Subscribe to our mailing list</label>
        </div>

        <hr class="mb-4">
        <div class = "row justify-content-center">

        <div class="col-md-4 ">
          <a href="profile.php">submit</a>
        </div>
        </div>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 New Hope Services Singapore</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>