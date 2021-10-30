<?php  require_once('../php/connection.php');?>

<?php 
   
    if(isset($_POST['submit'])){
        $title_ad = $_POST['title_ad'];
        $description = $_POST['description'];
        $currency_field = $_POST['currency_field'];

        $query = "insert into post(title, discription, price) 
                            values('$title_ad', '$description', '$currency_field')";

        $result = mysqli_query($connection, $query);
            if($result){
                echo 'success';
            }    
            else{
                echo 'no';
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../include/links.php' ?>
    <title>Document</title>

</head>
<body class="page-buy-sell-need-commom page-sell">
<?php include '../include/header.php'?>
    <section class="title-advertisment">
        <div class="container">
            <div class="row img-div style-1">
                <div class="col-md-6">
                    <h2>Create Advertiesment</h2>
                    <form action="sell.php" method="post">
                    <label for="">Add Image</label>
                        <div class="row">
                            <div class="col-md-10">
                                <input type="file" id="" name="img" multiple>
                            </div>
                            <div class="col-md-2 add">
                                <div class="btn-ok btn-add">
                                    <button type="button" class="btn btn-primary gra-button">Add</button>
                                </div>
                            </div>
                        </div>
                        <label for="">Title of advertisment</label>
                        <input type="text" id="title_ad" name="title_ad" pattern="[A-Za-z][0-9]{50}" title="name only latter" placeholder="">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="10" ></textarea>
                        <label for="">Price</label>
                        <!-- <input type="text" id="price" name="price" pattern="[0-9]{6}" title="name only latter" placeholder=""> -->
                        <input class="pri-int" type="text" name="currency_field" id="currency_field" pattern="^\Rs\d{1,3}(,\d{3})*(\.\d+)?Rs" value="" data-type="currency" placeholder="Rs 00.00">
                        
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <label for="">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Main Catogery</a>
                                    </label>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form action="sell.php" method="post">
                                            <input list="main-catogery" name="main-catogery" placeholder="">
                                            <select name="main-catogery" id="main-catogery">
                                                <option value="sales">sales</option>
                                                <option value="Need">Need</option>
                                            </select>

                                            <div class="btn-ok">
                                                <button type="button" class="btn btn-primary gra-button">Ok</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <label for=""><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Advertisement Type</a>
                                    </label>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form action="selll.php" method="post">
                                            <input list="Advertisement-type" name="Advertisement-type" placeholder="">
                                            <select name="Advertisement-type" id="Advertisement-type">
                                                <option value="Food-Item">Food Item</option>
                                                <option value="Devisers">Devisers</option>
                                                <option value="Servisers">Servisers</option>
                                                <option value="Books">Books</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <div class="btn-ok">
                                                <button type="button" class="btn btn-primary gra-button">Ok</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <label for=""><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Sales Type</a>
                                    </label>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form action="sell.php" method="post">
                                        <input list="sales-type" name="sales-type" placeholder="">
                                            <select name="sales-type" id="sales-type">
                                                <option value="Brand-New">Brand New</option>
                                                <option value="Rent">Rent</option>
                                                <option value="Use-Product">Use Product</option>
                                                <option value="Donation">Donation</option>
                                            </select>
                                            <div class="btn-ok">
                                                <button type="button" class="btn btn-primary gra-button">Ok</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               
                            </div>
                            <div class="col-md-6">
                                <div class="pub-btn" >
                            <!-- <a href="#"  class="badge badge-primary gra-button">Publish Post</a> -->
                                <button type="button" name = "submit" class="btn btn-primary gra-button">Publish Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-md-6 btn-view">
                  <div class="style-1 art-ad">
                        <button type="button" class="btn btn-primary gra-button">View Advertisement</button>
                        <article>
                            //view query
                        </article> 
                  </div> 
                </div> -->
        </div>
        <div class="btn-online">
                <!-- <a name="" id="" class="btn btn-primary gra-button" href="#" role="button">Online payment</a> -->
            <h5>Pay money for advertisement before publish Advertisements</h5>
            <div id="paypal-button"></div>
            <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        </div>        
    </section>
        <script src="../assets/js/paypal.js"></script>
    <?php include '../include/footer.php'?> 
</body>
</html>