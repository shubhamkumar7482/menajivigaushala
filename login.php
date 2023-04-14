<?php include("pages/header.php") ?>


<?php 

    if(isset($_POST['submit'])){

        // print_r($_POST);
        // die;

       
       $email = $_POST['email'];
       $password = $_POST['password'];
       
       
        // $check_user = "SELECT * FROM user_register WHERE email='$email'";
        $check_user = "SELECT * FROM user_register WHERE email='$email' AND password='$password'";

        $query_run = $conn->query($check_user);

        $check_rows = mysqli_num_rows($query_run);


        if($check_rows > 0){
          
            ?>
            <script>
              alert("Login Successfully !🤣");
            window.location.href='index.php';
            </script>
          <?php
        }else{

          ?>
            <script>
              alert("Wrong Usersname Please Vaild user Details !🤣");
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
                    <div class="login-form text-center border  ">
                        
                        <h4 style="color:#419c6b;">Login Now </h4>
                        <p style="color:#415B81;">Provide The Below Details To Login.</p>
                        
                      <form method="POST">
                      <input type="email" class="form-control mt-2" name="email" placeholder="Enter Your Email">
                        <input type="password" class="form-control mt-2" name="password" placeholder="Entet Your Password">
                        <p class="text-start pt-2">Forgot Your Password? <span><a href="forget.php"class="text-decoration-none">Reset Here</a></span></p>                 
                        <!-- <button class="btn btn-info my-1 px-3 " type="submit">Submit form</button>  -->
                        <input type="submit" name="submit" class="form-control mt-2" id="exampleFormControlInput1" value="Submit" style="background-color: #848fff;">
                        
                        <div class="register-page bg-light text-center rounded">
                        <p class="m-0 py-2 text-decoration-none">Don't Have Any Account? <a href="new-account.php"class="text-decoration-none">Register Here</a></p> 
                      </form>
                    </div> 
                    </div> 
                
                          
                </div>       
            </div>
        </div>
    </div>
</section>

<!-- this is footer link  -->
<?php include("pages/footer.php") ?>