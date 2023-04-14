<?php include("pages/header.php") ?>

<?php 

    if(isset($_POST['submit'])){

        // print_r($_POST);
        // die;

       $fullname = $_POST['fullname'];
       $mobile = $_POST['mobile'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       
       
        $check_user = "SELECT * FROM user_register WHERE email='$email'";

        $query_run = $conn->query($check_user);

        $check_rows = mysqli_num_rows($query_run);


        if($check_rows == 0){
            $sql = "INSERT INTO user_register(fullname,mobile,email,password) VALUES ('$fullname', '$mobile', '$email', '$password')";
            $run = $conn->query($sql);
        }else{

          ?>
          <script>

            alert("You Have Already Registered !🤣");
          </script>
          <?php
        }

      
 
    }

?>

<section class="login-section"style="padding-top:px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="loginimg">
                    <img src="img/login.webp" alt=""class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="login_here py-5">
                    <div class="login-form text-center border ">

                        <form class="row g-3"  method="post">
                            <h4 style="color:#419c6b;">Create Account</h4>
                            <p style="color:#415B81;">Provide The Below Details To Login.</p>

                            <div class="col-12 col-sm-6">
                            <!-- <label for="inputPassword2" class="visually-hidden">this sapce for label the content</label> -->
                            <input type="text" class="form-control" id="name" name="fullname" placeholder="Full Name" required>
                            </div>

                            <div class="col-12 col-sm-6">
                            <!-- <label for="inputPassword2" class="visually-hidden">this sapce for label the content</label> -->
                            <input type="number" class="form-control" id="moblie"  name="mobile" placeholder="Mobile Number" required>
                            </div>


                            <div class="col-md-12 col-sm-6">
                            <!-- <label for="inputPassword2" class="visually-hidden">this sapce for label the content</label> -->
                            <input type="email" class="form-control" id="email"  name="email" placeholder="Email" required>
                            </div>


                            
                            <div class="col-md-12 col-sm-6">
                            <!-- <label for="inputPassword2" class="visually-hidden">this sapce for label the content</label> -->
                            <input type="password" class="form-control" id="pass"   name="password" placeholder="Create Password">

                            <input type="submit" name="submit" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Enter Your Email" value="Submit" style="background-color: #848fff;">
                            
                            <div class="register-page bg-light text-center rounded">
                            <p class="m-0 py-2 text-decoration-none">Already Have An Account?<a href="login.php"class="text-decoration-none">Login Here</a></p> 
                        </from>
                    </div>      
                          
                </div>       
            </div>
        </div>
    </div>
</section>

<!-- this is footer link  -->
<?php include("pages/footer.php") ?>