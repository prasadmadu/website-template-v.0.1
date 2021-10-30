<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include '../include/links.php'?>
</head>
<body class="page-dashborad">     
<section class="sec-left">
    <div class="row">
        <div class="col-md-3 ">
            <div class="left-dashborad">
                <div class="">
                    <div class="dash-logo">
                        <img src="../assets/images/logo.png" alt="">
                    </div>
                    <div class="dash-list">
                        <ul>
                            <li><a href="../pages/admin_post.php">Pending Post</a></li>
                            <li><a href="../pages/report_post.php">Report post</a></li>
                            <li><a href="../pages/all_post.php">All Post</a></li>
                            <li><a href="../pages/all_customers.php">Customers</a></li>
                            <li><a href="">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
        <div class="col-md-9 right-dashborad">
            <h2>Dashborad</h2>
            <div class="row notice-value">
                <div class="col-md-6 dash-block">
                    <div class="n-post">
                    </div>
                </div>
                <div class="col-md-6 dash-block">
                    <div class="n-post">
                    </div>
                </div>
            </div>
            <div class="row notice-value">
                <div class="col-md-6 dash-block">
                <div class="n-post">
                    </div>
                </div>
                <div class="col-md-6 dash-block">
                    <div class="n-post">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
</body>
</html>