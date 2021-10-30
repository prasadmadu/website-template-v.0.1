<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include '../include/links.php'?>
</head>
<body class="home-page">
<?php include '../include/header.php'?>
    <section class="home-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="home-topic">The Easiest Way to Marketing for University Students</h1>
                </div>
            
            </div>
            <div class="row">
                <div class="col-md-12">
                  <!-- <div class="btn-h"><a href="#" class="myButton">Bye Post</a></div>
                  <div class="btn-h"><a href="#" class="myButton">Need Post</a></div>
                  <div class="btn-h"><a href="#" class="myButton">Publish Post</a></div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <i class="fa fa-shopping-cart" style="font-size:48px;color:#ffffff8c"></i><br>
                    <h6>Food Items</h6>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-desktop" style="font-size:48px;color:#ffffff8c"></i><br>
                    <h6>Devisers</h6>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-wrench" style="font-size:48px;color:#ffffff8c"></i><br>
                    <h6>Servisers</h6>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-book" style="font-size:48px;color:#ffffff8c"></i><br>
                    <h6>Books</h6>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4 btn-div">
              <a href="#" class="myButton">Buy Post</a>
              </div>
              <div class="col-md-4">
              <a href="#" class="myButton">Need Post</a>
              </div>
              <div class="col-md-4">
              <a href="#" class="myButton">Publish Post</a>
              </div>
            </div>
        </div>
    </section>
    
    <section class="home-contant">
        <div class="container">
            <div class="row">
                <div class="col-md-3 left-col">
                    <div class="wrapper">
                        <h3>Advertisement Type</h3>
                        <form>
                            <div class="radio">
                              <label><input type="radio" name="optradio" checked>Food Item</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio">Devisers</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" disabled>Servisers</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" disabled>Books</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" disabled>Others</label>
                            </div>
                          </form>
                    </div>
                    <div class="wrapper">
                        <h3>Date Posted</h3>
                        <form>
                            <div class="radio">
                              <label><input type="radio" name="optradio" checked>Last 24 hours</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio">Last 7 days</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" disabled>Last 30 days</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" disabled>All</label>
                            </div>
                          </form>
                    </div>
                    <div class="wrapper">
                        <h3>Category</h3>
                        <form>
                            <div class="radio">
                              <label><input type="radio" name="optradio" checked>Brand New</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio">Renter</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" disabled>Used Product</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" disabled>Donation</label>
                            </div>
                          </form>
                    </div>
                </div>
                <div class="col-md-9 right-col">
                    <h4>Active Advertisements</h4>
                    <div class="job-wrapper">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="../assets/images/home.jpg" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3>Title of Advertisement</h3>
                                <h5>Publisher</h5>

                            </div>
                            <div class="col-md-2">
                                <div class="button-container">
                                    <button type="button" onclick="myFunction()" class="btn btn-primary">View</button>
                                    <script>
                                      function myFunction(){
                                        window.location.href="single-buy.php";
                                      }
                                    </script>
                                    <label for=""><i>date</i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <?php include '../include/footer.php'?>
</body>
</html>