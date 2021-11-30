<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smile Foundation</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
            small { 
                color:red;
            }
    </style>
</head>

<body>

<header class="continer-fluid ">
    <div  class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            smilefoundation@gmail.com
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            +876 987 666 5433</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 folouws">
                  
                    <ul class="ulright">
                       <li> <small>Folow Us </small>:</li>
                        <li>
                            <i class="fab fa-facebook-square"></i>
                        </li>
                        <li>
                            <i class="fab fa-twitter-square"></i>
                        </li>
                        <li>
                            <i class="fab fa-instagram"></i>
                        </li>
                        <li>
                            <i class="fab fa-linkedin"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    <a href="volunteer.php"><button class="btn btn-sm btn-success">Join Us</button></a>
                    <button class="btn btn-sm btn-default">Donate</button>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="index.php">
                        <img src="assets/images/logo.jpg" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                            <ul class="navbad">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about_us.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.php">Our Work</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact_us.php">Contact US</a>
                                </li>




                            </ul>


                </div>
            </div>
        </div>
    </div> 
</header>
 
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Volunteer with Us in Spreading Smiles</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Join Us</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!--  ************************* Volunteer Form Starts Here ************************** -->
        <!-- php code for form validation -->
        <?php

$errorname = $erroremail = $errorphone = $genderErr = $addressErr = "";
$name = $email = $phone = $gender = $address = "";

    $anyErr = false;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // name
    if (empty($_POST["name"])) {
        $errorname = "Name is required";
        $anyErr = true;
    } else {
        $name = $_POST["name"];
        $name = trim($name);
        if (ctype_alpha(str_replace(' ', '', $name)) === false) {
            $errorname = "Please write a valid name";
            $anyErr = true;
        }
    }

        // email
        if (empty($_POST["email"])) {
            $erroremail = "Email is required";
            $anyErr = true;
        } else {
            $email = trim($_POST["email"]);
            // $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $erroremail = "Enter valid email";
                $anyErr = true;
            }
        }

        // phone
        if (empty($_POST["phone"])) {
            $errorphone = "Phone is required";
            $anyErr = true;
        } else {
            $phone = trim($_POST["phone"]);
            if (!ctype_digit($phone)) {
                $errorphone = "Only digits are allowed";
                $anyErr = true;
            }
            if (strlen($phone) < 10) {
                $errorphone = "Phone number cannot be less than 10 digits";
                $anyErr = true;
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
          } else {
            $gender = test_input($_POST["gender"]);
          }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
          } else {
            $address = test_input($_POST["address"]);
          }
        
    }

    function checkSubmission()
    {
        global $anyErr;
        if ($anyErr==false) {
            return true;
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <?php // if ($anyErr == false) echo 'profilemain.php'; 
    ?>

        <div class="">

            <div class="text-center">
                <br>
                <h1>Please fill the form below</h1>
                <h5>We assure you that all your donations are being spent on a social cause.</h5>
            </div>

            <!-- donation form -->
            <form
                class="container"
                name="userForm"
                method="POST"
                action='volunteer.php'>
                    
                <div class="form-label-group">
                <label for="name">Name<small>*</small></label>
                        <input
                            type="text"
                            class="form-control"
                            name="name">
                        <small id="errorname"><?php echo $errorname; ?> </small>
                    </div>

                <div class="form-label-group">
                    <label class="col-form-label" for="email">Email<small>*</small></label>
                    <input
                        class="form-control"
                        type="email"
                        name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <small id="erroremail"><?php echo $erroremail; ?> </small>
                </div>

                <div
                    class="form-label-group">
                    <label class="col-form-label" for="phone">Contact<small>*</small></label>
                    <input
                        class="form-control"
                        type="tel"
                        name="phone">
                        <small id="errorphone"><?php echo $errorphone; ?> </small>
                </div>

                <div class="form-label-group">
                    <label class="col-form-label" for="gender">Gender<small>*</small></label><br> 
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female<br> 
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male<br> 
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other<br> 
                    <small id="genderErr"><?php echo $genderErr; ?> </small>
                </div>

                <div class="form-label-group">
                    <label class="col-form-label" for="address">Address<small>*</small></label>
                    <input
                        type="text"
                        name="address"
                        class="form-control">
                </div>

                <div
                    class="form-label-group">
                    <label for="events" class="col-form-label">Event/s you would like to volunteer in:<small>*</small></label><br>
                    <input type="checkbox" name="check_list[]" value="Food Distribution Drive"><label>Food Distribution Drive</label><br>
                    <input type="checkbox" name="check_list[]" value="Covid Relief Camp"><label>Covid Relief Camp</label><br>
                    <input type="checkbox" name="check_list[]" value="Old Age Home Visit"><label>Old Age Home Visit</label><br>
                    <input type="checkbox" name="check_list[]" value="Orphange Visit"><label>Orphange Visit</label><br>
                    <input type="checkbox" name="check_list[]" value="Mental Health Center Volunteering"><label>Mental Health Center Volunteering</label><br>
                    <b>Please Select Atleast One Option for Volunteering.</b>
                </div>

                <br>

                
                <br>
                <input class="btn btn-green pull-left" type="submit" value="Submit "/>
                <input
                    class="btn btn-danger pull-right"
                    type="reset"
                    value="Reset"/>
                    <br><br>
            </form>

        </div>

        <div style="padding:100px" class="card">
                    <h5>Thank you for volunteering with us, here's the information we've received-</h5>
                    <ul class="list-unstyled">
                        <li>Name = <?php echo $name; ?></li>
                        <li>Email = <?php echo $email; ?></li>
                        <li>Phone = <?php echo $phone; ?></li>
                        <li>Gender = <?php echo $gender; ?></li>
                        <li>Address = <?php echo $address; ?></li>
                        <li>  
                        <?php
                            if(!empty($_POST['check_list'])) {
                                // Counting number of checked checkboxes.
                                    $checked_count = count($_POST['check_list']);
                                    echo "You have selected following ".$checked_count." option(s) for volunteering: <br/>";
                                    // Loop to store and display values of individual checked checkbox.
                                    foreach($_POST['check_list'] as $selected) {
                                        echo "<p>".$selected ."</p>";
                                    }
                                }
                        ?>
                        </li>
                    </ul>
                    <br><p>Click here to confirm data and <b><a style="color:green;" href = "volunteer.php">return.</a></b></p>
        </div>

<?php
            // database connection code
            // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

            $con = mysqli_connect('localhost', 'root', '','ngo_db');

            mysqli_select_db($con,"ngo_db");

            $query = "SELECT ID FROM vounteer_tbl";
            $result = mysqli_query($con, $query);
            
            $sql = "CREATE TABLE IF NOT EXISTS
            volunteer_tbl(
                id INT(6) UNSIGNED
                AUTO_INCREMENT
                PRIMARY KEY,
                fldName VARCHAR(50),
                fldEmail VARCHAR(50),
                fldPhone VARCHAR(10),
                fldGender VARCHAR(10),
                fldAddress VARCHAR(150),
                fldEvent TEXT
            )";

            mysqli_query($con, $sql);

            // get the post records
            if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            // $check_list = $_POST['check_list'];
            // $chk="";  
            // foreach($check_list as $chk1)  
            // {  
            //     $chk .= $chk1.",";  
            // }  
            $chk = implode(',', $_POST['check_list']);
            

            // $query = "SELECT count(*) as allcount FROM volunteer_tbl 
            // WHERE fldName='".$name."' && fldEmail='".$email."' && 
            // fldPhone='".$phone."'";
            // $result = mysqli_query($con,$query);
            // $row = mysqli_fetch_array($result);
            // $allcount = $row['allcount'];

            // // insert new record
            // if($allcount == 0){
                //database insert SQL code
                $sql = "INSERT INTO `volunteer_tbl` (fldName, fldEmail, fldPhone,  fldGender, fldAddress, fldEvent) VALUES ('".$name."','".$email."','".$phone."','".$gender."','".$address."','".$chk."')";
                
                // insert in database 
                // mysqli_query($con, $sql);  
                if (mysqli_query($con, $sql)) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                  } 

                // Redirect to another page
                // header('location: volunteer.php');
            // }
            }

            mysqli_close($con);

            ?>

    
      
      
       
  
                 
  <!--  ************************* Footer Starts Here ************************** -->
          
      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smile Foundation, a non-profit organization in india is to empower underprivileged children, youth and women through relevant education, innovative healthcare and market-focused livelihood programmes.
                    </p>
                    <p>We aim to achieve behavioural, social and economic transformation for all girls towards an India where all children have equal opportunities to access quality education.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Smile Foundation <br>
                        Mumbai <br>
                        Maharashtra, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:smilefoundation@gmai.com" class="">smilefoundation@gmai.com</a><br>
                        Web: <a href="index.php" class="">www.smilefoundation.org</a>
                    </address>

                </div>
            </div>
            
            <h2>Subscribe to our Newsletter</h2>
            <form action="sendemail.php" method="post">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            <div class="nav-box row clearfix">
                <div class="inner col-md-9 clearfix">
                    <ul class="footer-nav clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about_us.php">About US</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="services.php">Our Work</a></li>
                        <li><a href="blog.php">Blogs</a></li>
                        <li><a href="contact_us.php">Contact US</a></li>
                    </ul>

                  
                </div>
                
                  <div class="donate-link col-md-3"><a href="donate.php" class="btn btn-primary "><span class="btn-title">Donate Now</span></a></div>
            </div>
            
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="index.php">2021 &copy; All Rights Reserved</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
          
    
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>