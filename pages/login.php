
<?php require_once('../php/connection.php');?>
<?php 

    if(isset($_POST['submit'])){

        $errors = array();

        if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1){
            $errors[] = 'Invalid username';
        }

        if(!isset($_POST['u_password']) || strlen(trim($_POST['u_password'])) < 1){
            $errors[] = 'Invalid password';
        }
        
        if(empty($errors)){
            $email = mysqli_real_escape_string($connection,$_POST['email']);
            $u_password = mysqli_real_escape_string($connection,$_POST['u_password']);
            $hashed_password = sha1($u_password);
        

            $query = "SELECT * FROM user WHERE email = '{$email}' AND u_password = '{$hashed_password}'
                        LIMIT 1";

            $result = mysqli_query($connection, $query);
            if($result){
                if(mysqli_num_rows($result) == 1){
                    
                    $user = mysqli_fetch_assoc($result);

                    session_destroy();
                    session_start();
                    $_SESSION["is_logged_in"] = true;
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['ug_degree'] = $user['ug_degree'];
                    $_SESSION['ac_year'] = $user['ac_year'];
                    header('Location: profile_form.php');

                   // include '../pages/home.php';
                }
                else{
                    $errors[] = 'Invalid username/password';
                }
            }
            else{
                $errors[] = 'Database query failed';
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include '../include/links.php'?>
</head>

<body class="page-login">
    <?php include '../include/header.php'?>
    
    <section class="title-section">
        <div class="container">
            <h1>Sign In</h1>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, corrupti! </p>-->
</div>
    </section>
    <section class="form-section-login">
        <div class="container">
          <div class="row">
              <div class="col-md-3">    
              </div>
              <div class="col-md-6"> 
                <form action="login.php" method="post" class="style-1">
                    
                    <i class="fa fa-user-circle-o" style="font-size:100px"></i>
                    <?php 
                        if(isset($errors) && !empty($errors)){
                            echo '<p class="error">Invalid Username/password</p>';
                        }
                    ?>
                    <!-- <?php  
                        if(isset($_GET['logout'])){
                            echo '<p class="info">successfully logged out</p>';
                        }
                    ?>-->
                    <label for="">Username</label>
                    <input type="text" name="email" id="" placeholder="Your Email">
                    
                    <label for="">Password</label>
                    <input type="password" name="u_password" id="" placeholder="Your Password">
                    <button name="submit" id="" class="btn btn-primary" type="submit">Sign In</button>
                   
                </form>
            </div>
          </div>  
        </div>
    </section>
    <?php include '../include/footer.php'?>
</body>
</html>
<?php mysqli_close($connection); ?>