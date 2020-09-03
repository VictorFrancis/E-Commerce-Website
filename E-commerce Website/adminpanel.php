<?php

require_once 'dbconnection.php';

$sql = "SELECT * FROM product WHERE id=1";
$result = mysqli_query($link,$sql) or die("Bad Query");
$row = mysqli_fetch_array($result);


?>


<!DOCTYPE html>
  <html lang="en">
      <head>

      <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!---------Custom CSS--------->
        <link rel="stylesheet" type="text/css" href="stylesheet/custom.css">

        <title>CloudMart - Everything that you need</title>
      </head>


      <body>
        
        <!--------------------Navigation Bar----------------------------------------------->
    <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.html"><img src="stylesheet/logo.png" class="img-fluid" style="height: 50px; width: 47px; position: relative; left: 10px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="position: relative; left: 200px;">
          <li class="nav-item">
            <a class="nav-link" href="adminpanel.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminpanel-add.php">Add Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminpanel-delete.php">Delete Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminpanel-modify.php">Modify Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminpanel-list">Order List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminpanel-support">Supports</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>

  <!--------------------Navigation Bar----------------------------------------------->

  <!--------------------Content------------------------------------------------------------->
  <section>
    <!--------------------------------Footer------------------------------------->
    



  <!--------------------Content------------------------------------------------------------->

    
<!--------------------Footer-------------------------------------------------------->
  <div class="container-fluid" style="background-color: #0085b7;">
    <div class="row">
        <div class="col-xl-md">
          <div class="container-fluid">
            <ul style="list-style-type: none; font-family: Calibri; font-weight: 10px; position: relative; top: 50px;">
            <li style="">
              <a href="" style="color: white;" data-toggle="modal" data-target="#signupmodal">BECOME A MEMBER</a>

            <!-- Modal -->
            <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                                  <!-- Default form register -->
                <form class="text-center border border-light p-5" action="registration.php" method="POST">

                    <p class="h4 mb-4">Sign up</p>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" name="firstname" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="lastname" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">

                    <!-- Password -->
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>

                    <!-- Phone number -->
                    <input type="text" name="pnum" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                        Optional - for two step authentication
                    </small>

                    <!----Option----->
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Type</label>
                      <select class="form-control" name="type">
                        <option>Customer</option>
                        <option>Employee</option>
                      </select>
                    </div>
                    <!----Option----->

                    <!-- Sign up button -->
                    <button class="btn btn-info my-4 btn-block" type="submit">Sign Up</button>

                    <!-- Social register -->
                    <p>or sign up with:</p>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="" target="_blank">terms of service</a>

                </form>
                <!-- Default form register -->
                </div>
              </div>
            </div>
            </li>

            <li style="">
              <a href="" style="color: white;" data-toggle="modal" data-target="#signinmodal">SIGN IN </a>

            <!-- Modal -->
            <div class="modal fade" id="signinmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <!-- Default form login -->
                <form class="text-center border border-light p-5" action="validate.php" method="POST">

                    <p class="h4 mb-4">Sign in</p>

                    <!-- Email -->
                    <input type="email" name="lg-email" class="form-control mb-4" placeholder="E-mail">

                    <!-- Password -->
                    <input type="password" name="lg-pass" class="form-control mb-4" placeholder="Password">

                    <!----Option----->
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Type</label>
                      <select class="form-control" name="lg-type">
                        <option>Customer</option>
                        <option>Employee</option>
                      </select>
                    </div>
                    <!----Option----->

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                    <!-- Register -->
                    <p>Not a member?
                        <a href="">Register</a>
                    </p>

                    <!-- Social login -->
                    <p>or sign in with:</p>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                </form>
                <!-- Default form login -->
              </div>
              </div>
            </div>
            </li>
            <li style="">
              <a href="" style="color: white;" data-toggle="modal" data-target="#feedbackmodal">SITE FEEDBACK</a>

              <!-- Modal -->
            <div class="modal fade" id="feedbackmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <!-- Default form contact -->
                <form class="text-center border border-light p-5" action="sitefeedback.php" method="POST">

                    <p class="h4 mb-4">Site Feedback</p>

                    <!-- Name -->
                    <input type="text" name="sname" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

                    <!-- Email -->
                    <input type="email" name="semail" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

                    <!-- Subject -->
                    <label>Subject</label>
                    <select class="browser-default custom-select mb-4" name="ssubject">
                        <option value="" disabled>Choose option</option>
                        <option value="1" selected>Feedback</option>
                        <option value="2">Report a bug</option>
                        <option value="3">Feature request</option>
                        <option value="4">Feature request</option>
                    </select>

                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" name="smessage" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                    </div>

                    <!-- Copy -->
                    <div class="custom-control custom-checkbox mb-4">
                        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
                    </div>

                    <!-- Send button -->
                    <button class="btn btn-info btn-block" type="submit">Send</button>

                </form>
                <!-- Default form contact -->

                </div>
              </div>
            </div>

            </li>
            <li style="">
              <a href="" style="color: white;" data-toggle="modal" data-target="#subscribemodal">SUBSCRIBE TO NEWSLETTER</a>

              <!-- Modal -->
            <div class="modal fade" id="subscribemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <!-- Default form subscription -->
                <form class="text-center border border-light p-5" action="subscribe.php" method="POST">

                    <p class="h4 mb-4">Subscribe</p>

                    <p>Join our mailing list. We write rarely, but only the best content.</p>

                    <p>
                        <a href="" target="_blank">See the last newsletter</a>
                    </p>

                    <!-- Name -->
                    <input type="text" name="subname" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">

                    <!-- Email -->
                    <input type="email" name="subemail" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail">

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block" type="submit">Sign in</button>


                </form>
                <!-- Default form subscription -->
                </div>
              </div>
            </div>

            </li>
          </ul>

          <ul style="list-style-type: none; font-family: Calibri; font-weight: 10px; position: relative; left: 250px; bottom: 60px;">
            <li style=""><p style="color: white; font-weight: bolder;">GET HELP</p></li>
            <li style=""><a href="" style="color: white;">Order Status</a></li>
            <li style=""><a href="" style="color: white;">Shipping & Delivery</a></li>
            <li style=""><a href="" style="color: white;">Payment & Receipt</a></li>
            <li style=""><a href="" style="color: white;">Help & Support</a></li>
            <li style=""><a href="" style="color: white;">Contact Us</a></li>
          </ul>

          <ul style="list-style-type: none; position: relative; left: 1000px; bottom: 250px;">
            <li style=" float: left; padding-right: 10px;"><a href=""><i style=" color: black;" class="fab fa-facebook fa-3x"></i></a></li>
            <li style=" float: left; padding-right: 10px;"><a href=""><i style=" color: black;" class="fab fa-twitter fa-3x"></i></a></li>
            <li style=" float: left; padding-right: 10px;"><a href=""><i style=" color: black;" class="fab fa-instagram fa-3x"></i></a></li>
            <li style=" float: left; padding-right: 10px;"><a href=""><i style=" color: black;" class="fab fa-youtube fa-3x"></i></a></li>
          </ul>   
          </div>

        </div>
    </div>
  </div>
  <!--------------------Footer-------------------------------------------------------->

      <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
  </html>