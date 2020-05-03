<!Doctype html>
<html>
<head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!--This is my kit font awesome pls remind me-------------------------------------------->
        <script src="https://kit.fontawesome.com/92d742c429.js" crossorigin="anonymous"></script>
        <!--------------------------------------------------------------------------------------->
    </head>
    <body>
     
    <div>     
        <nav class ="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
          <a class="navbar-brand" style="background-color:transparent;" href="index.html">Tap Hotel</a>
          <ul class ="nav navbar-nav">
              <li class ="nav-item"> 
                 <a class="nav-link " href="#">Link1</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link2</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link3</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link3</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link3</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link3</a>
              </li>
          </ul>
          <ul class=" nav navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fas fa-user-alt"></i>Login</a> 
                <div class="dropdown-menu dropdown-menu-right p-3">
                    <form class="form-horizontal" method="POST" accept-charset="UTF-8" action="login_action.php">
                        <input class="form-control login" type="text" name="email" placeholder="Email" id="email">
                        <input class="form-control login" type="text" name="password" placeholder="Password" id="pass">
                        <input class="btn btn-primary" type="submit" name="submit" value="Login">
                    </form>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=register.php> <i class="fas fa-user-plus"></i> Sign up</a> 
             </li>
          </ul>
        </nav>
    </div>
    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 mx-auto"  src="./picHotelRoom/black1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 mx-auto"  src="./picHotelRoom/beach2_5.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 mx-auto" width="100%" height="20%" src="./picHotelRoom/hotel2_5.jpg" alt="Third slide">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
    </div>
    

        <form id="Register" action="#" style="border:1px solid #ccc" method = "POST">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
          
                <label for="StaffID"><b>StaffID</b></label>
                <input type="text" placeholder="Enter StaffID" name="StaffID" required>

                <label for="Firstname"><b>Firstname</b></label>
                <input type="text" placeholder="Enter Firstname" name="Firstname" required>
                
                <label for="Lastname"><b>Lastname</b></label>
                <input type="text" placeholder="Enter Lastname" name="Lastname" required>
                
                <label for="position"><b>Position</b></label>
                <input type="text" placeholder="Enter position" name="position" required>

                <label for="salary"><b>Salary</b></label>
                <input type="text" placeholder="Enter salary" name="salary" required>

                <label for="branchID"><b>branchID</b></label>
                <input type="text" placeholder="Enter branchID" name="branchID" required>
    
                <label for="workTimeDescription"><b>workTimeDescription</b></label>
                <input type="text" placeholder="Enter your work time description" name="workTimeDescription" required>
                <label>

                <label for="starDate"><b>workTimeDescription</b></label>
                <input type="text" placeholder="Enter your star date of work" name="starDate" required>
                <label>

                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Are you sure to summit
                </label>
          
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </body>
</html>