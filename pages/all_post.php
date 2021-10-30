
<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <?php include '../include/links.php'?>
</head>
<body class="all-report-pending-costomer-dashpage">
     <div class="container">
        <div class="view-area">
            <h2>All Post Details</h2>
            <table class="tb-style">  
                <tr>
                    <th> Post_id </th> 
                    <th> Title </th> 
                    <th> Description </th> 
                    <th> Price </th>
                    <th> Img </th>
                </tr>
                <?php echo $user_list; ?>
            </table>
        </div>
    </div>
</body>
</html>
<?php mysqli_close($connection); // Close connection ?>

