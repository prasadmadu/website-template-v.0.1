<!-- from insert-query.php -->

<?php require_once('../php/connection.php');?> 
<?php include("../utils/MailHelper.php");
$errors = array();

    if(isset($_POST['submit'])){
            if(empty($_POST['name'])){
                $errors['name'] = 'name is required';
            }

            if(!isset($_POST['name']) || (!preg_match("/^[a-zA-Z\s]+$/", $_POST['name'])) ){
                  $errors['name'] = 'Please enter strings only';
            } 
    
            if(!isset($_POST['email']) || empty($_POST['email'])){
                $errors['email'] = 'email is required <br/>';
            }
                $email = $_POST['email'];
                $domains = array('std.uwu.ac.lk');
                $pattern = "/^[a-z0-9._%+-]+@[a-z0-9.-]*(" . implode('|', $domains) . ")$/i";
            if (!isset($_POST['email']) || !preg_match($pattern, $email)) {
                $errors['email'] = 'Invalid email';
            }
            
            if(!isset($_POST['phone']) || empty($_POST['phone'])){
                $errors['phone'] = 'Enter a phone number <br/>';
            }
            if(!isset($_POST['u_password']) || empty($_POST['u_password'])){
                $errors['u_password'] = 'password is required <br/>';
            }
            if(!isset($_POST['u_password']) || strlen($_POST['u_password']) < 8){
                $errors['u_password'] = 'password must be >= 8';
            }
            if(!isset($_POST['cu_password']) || empty($_POST['cu_password'])){
                $errors['cu_password'] = 'Re-enter password';
            }
            
            if(!isset($_POST['cu_password']) || ($_POST['cu_password']) != ($_POST['u_password'])){
                $errors['cu_password'] = 'Password not match';
            }
            if(!isset($_POST['ug_degree']) || empty($_POST['ug_degree'])){
                $errors['ug_degree'] = 'Enter Your Degree Program';
            }
            if(!isset($_POST['ac_year']) || empty($_POST['ac_year'])){
                $errors['ac_year'] = 'Enter Your Academic Year';
            }
            
            
            if(empty($errors)){

            $name = $_POST['name'];
            $u_password = $_POST['u_password'];
            $hashed_password = sha1($u_password);
            $email = $_POST['email'];
            $cu_password = $_POST['cu_password'];
            $phone = $_POST['phone'];
            $ug_degree = $_POST['ug_degree'];
            $ac_year = $_POST['ac_year'];
            $verification_code = sha1($email . time());

            $verification_url = "http://localhost/project-2/pages/login.php?code=" . $verification_code;
            
            
                $query = "insert into user(name, u_password, email, ug_degree, ac_year) 
                            values('$name', '$hashed_password', '$email', '$ug_degree', '$ac_year')";
                
                
                $result = mysqli_query($connection, $query);
                    if($result){
                        
                        sendSimpleMail($name, $email, "Thank you for registered with us!",
                         "<p>Click here to login to our website.<br>$verification_url<br>Thank you<p>");

                        echo '<script>alert("Welcome to UWU")</script>';

                        header('Location: ../pages/login.php');
                    }
                
                    else{
                        
                        function customError($errno, $errstr) {
                            echo "<b>Error:</b> [$errno] $errstr<br>";
                            echo "Ending Script";
                            die();
                          }
                    }

             
                header('Location: login.php');
    
            }    
        
    }
    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <?php include '../include/links.php'?>
</head>

<body class="page-register">
<?php include '../include/header.php'?>
  
    
    <section class="title-section">
        <div class="container">

          <h1>Create An Account</h1>
            <p>Join University Marketplace and Save Time</p>
        </div>
    </section>
    <section class="form-section-login">
        <div class="container">
          <div class="row">
              <div class="col-md-3">    
              </div>
              <div class="col-md-6"> 
                <form action="register.php" method="post" class="style-1">
                
                    <h2>Sign Up</h2>
        
                    <label for="">Name</label>
                    <input type="text" name="name" id="" placeholder="Saman Perera" required>
                    <?php 
                        if(isset($errors['name'])){
                            echo $errors['name'];
                        }
                    ?>
                    <label for="">Student Email</label>
                    <input type="text" name="email" id="" placeholder="abc123@std.uwu.ac.lk" required>
                    <?php 
                        if(isset($errors['email'])){
                            echo $errors['email'];
                        }
                        
                    ?>
<!-- 85555599999999999999999999999999999999999999999999999999 -->
                    <label for="phone">Contact number</label>
                    <input type="tel" id="phone" name="phone" placeholder="077xxxxxxx" pattern="[0-9]{10}" required>
                    <?php 
                        if(isset($errors['phone'])){
                            echo $errors['phone'];
                        }
                    ?>
<!-- 88888888888888888888888888888888888 -->
                    <label for="">Password</label>
                    <input type="password" name="u_password" id="" placeholder="Password" required>
                    <?php 
                        if(isset($errors['u_password'])){
                            echo $errors['u_password'];
                        }
                    ?>
                    <label for="">Confirm Password</label>


                    <input type="password" name="cu_password" id="" placeholder="Confirm Password" required>
                    <?php 
                        if(isset($errors['cu_password'])){
                            echo $errors['cu_password'];
                        }
                    ?>
                    
                    <!-- <input type = "submit" value = "Degree Program">  -->
                    <label for="">Degree</label>

                    <input list="ug_degree" name="ug_degree" placeholder="CST" required>
                    <datalist id = "ug_degree">
                            <option value="Computer Science & Technology">
                            <option value="Industrial Information Technology">
                            <option value="Mineral Resources & Technology">
                            <option value="Science & Technology">
                            <option value="Hospitality Tourism & Event Management">
                            <option value="Entrepreneurship & Management">
                            <option value="Animal Science">
                            <option value="Aquatic Resources & Technology">
                            <option value="Export Agriculture">
                            <option value="Palm & Latex Technology">
                            <option value="Tea Technology">
                            <option value="Engineering Technology">
                            <option value="Bio-systems Technology">
                    </datalist>
                            

                        <label for = "">Academic Year</label> 
                        <!-- <input type = "submit" value = "Academic Year"> -->


                        <input list="ac_year" name="ac_year" placeholder="20xx/20xx" required>

                        <datalist id="ac_year">

                            <option value="2020/2021">
                            <option value="2019/2020">
                            <option value="2018/2019">
                            <option value="2017/2018">
                            <option value="2016/2017">
                            <option value="2015/2016">

                        </datalist>
                        
                   <!-- <label for="">Last Name</label>
                    <input type="text" name="last_name" id="" placeholder="Kumara">
                   
                    <input type="submit" formtarget="login.php" value="submit">-->

                    <button name="submit" id="" class="btn btn-primary" type="submit">Sign Up</button>
                   
                </form>
                
            </div>
          </div>  
        </div>
    </section>
    
    <?php include '../include/footer.php'?>
    </body>
</html>

<?php mysqli_close($connection); ?>