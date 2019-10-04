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
    <title>Order Summary</title>
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
    <div class="w3-container">

        <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Ticketing View</h3>
                    </div>
                </div>
            </div>
  
		<div class="container-table100">
        <div class="wrap-table100">
        <div class="table100">
        <table>
				<thead>
						<tr class="table100-head"  style="background-color:rgb(0, 0, 0)">
                        <th class="column1">Age</th>
                        <th class="column2">Race</th>
                        <th class="column3">Gender</th>
                        <th class="column1">Description</th>
                        <th class="column2">Location</th>
                        <th class="column3">Time</th>
                        <th class="column1">Date</th>
                        <th class="column2">Weather</th>
                        <th class="column3">Dangerous</th>
                        <th class="column2">Smell</th>
						<th class="column3">Solved?</th>
				</thead>
				<tbody>	
				
						</div>

                <tr>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">from 40 to 50</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">null</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">Female</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">This old women is wearing a black shirt with blue pants</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">80 Victoria St</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">18:30:25</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">04-10-2019</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">Rainy</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">Yes</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)">No</td>
                    <td class="column1" style="background-color:rgb(255, 247, 249)"><a href="ticketing_view2.php" class="button" value ="Solved?">Solved</td>
                </tr>

    

            </form>
            </div>
            </tbody>
                    </table>
                    
                  
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