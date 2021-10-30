
<?php
        session_start();

        require_once('../php/connection.php'); // Using database connection file here

        $user_list = '';
        $query="SELECT * FROM post WHERE is_accepted=0";
        $records = mysqli_query($connection,$query);
        
		
		while($rows=mysqli_fetch_assoc($records)) 
		{ 
		
        while($rows = $records->fetch_assoc()){
                            $imageURL = '../uploaded_images/'.$rows["img"];
        $user_list .= "<tr>"; 
        $user_list .= "<td>{$rows['post_id']}</td>"; 
		$user_list .= "<td>{$rows['title']}</td>"; 
		$user_list .= "<td>{$rows['description']}</td>"; 
		$user_list .= "<td>{$rows['price']}</td>";
        $user_list .= "<td> <img src=\"$imageURL \" alt=\"\" height = \"200\" width=\"200\"/></td>"; 
        $user_list .= "<td> <a href =  \"../include/accept_post.php?post_id={$rows['post_id']}\"onclick=\"return confirm('Are u sure?');\"> Accept</a></td>";
		$user_list .= "</tr>"; 
        
            }
        
        
            }
        
        ?>

<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <?php include '../include/links.php'?>
</head>
<body class="all-report-pending-costomer-dashpage">
     <div class="container">
        <div class="view-area">
            <h2>Pending Post Details</h2>
            <table class="tb-style">  
                <tr>
                    <th> Post_id </th> 
                    <th> Title </th> 
                    <th> Description </th> 
                    <th> Price </th>
                    <th> Img </th> 
                    <th> Is Accept</th>
                </tr>
                <?php echo $user_list; ?>
            </table>
        </div>
    </div>
</body>
</html>
<?php mysqli_close($connection); // Close connection ?>






