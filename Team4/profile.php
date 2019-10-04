<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>Menu</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
   

<body style="background-color:rgb(255,255,255)">
    <?php require_once 'include/header.php'; ?>



 
      <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>John Tan</h3>
                    </div>
                    <div class="row justify-content-center">
                    <img src="johndoe.jpg" width="150" height="150" alt="" >
                    </div>
                </div>
            </div>
         
    </section>
    <section id="main-block dark-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="features">
            <div style='text-align: center' class="features_content">
              <h3>Upcoming Events</h3>
              <p class="justify-content-center">
                <img src="https://scontent.cdninstagram.com/vp/e19d3d20419314500c631e19213915df/5E34EDF3/t51.2885-15/sh0.08/e35/s640x640/67491869_2216219148669543_8631016873381122557_n.jpg?_nc_ht=scontent.cdninstagram.com" width="150" height="150" alt="" >
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="features">

          <div style='text-align: center' class="features_content">
              <h3>Hours Earned</h3>
              <p class="justify-content-center">
                <img src="https://image.flaticon.com/icons/svg/68/68132.svg" width="150" height="150" alt="" >

              </p>
        
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="features">

          <div style='text-align: center' class="features_content">
              <h3>Clock in</h3>
              <p >
                <img src="https://image.flaticon.com/icons/svg/77/77271.svg" width="150" height="150" alt="" >
              </p>
              
            </div>
          </div>
        </div>

      </div>

      <!-- blank divider -->
      <div class="row">
        <div class="span12">
          <div class="blank10"></div>
        </div>
      </div>






    </div>
  </section>
    
 
    <!--//END FEATURED PLACES -->
  



    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>