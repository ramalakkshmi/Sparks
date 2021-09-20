<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>THE SPARKS BANK🏦 </title>
    <style type="text/css">
        body{
            background: #2E4053 ;
            border:2px solid white;
        }
        button{
            position: relative;
            display: inline-block;
            padding: 12px 36px;
            margin: 10px 0;
            text-decoration: none;
            font-size: 18px;
            letter-spacing: 2.5px;
            border-radius: 8px;
            background-image: linear-gradient(305deg, orange 6%, #ECD662 70%);
            height : 65%;
            width: 65%;
        }
        h1 {
        font-family: sans-serif;
        background: coral;
         }
    </style>
</head>
<body>
    <?php
  include 'navbar.php';
  ?>
  <br>
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro">
            <div >
                   <center><h1>SPARKS BANK</h1></center>
            </div>
        </div>
        <!-- Activity section -->
        <br>
        <br>
        <br>
        <div class="row activity text-center">
            <div class="col-md act">
                <br><br>
                <a href="users.php"><button ><img src="data:image/png;base64,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" class="img-fluid" style="width: 70%; height: 70%"><br><b>Users</b></button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <a href="transfermoney.php"><button><img src="https://static.thenounproject.com/png/407799-200.png" class="img-fluid" style="width: 70%; height: 70%"><br><b>Transfer Money</b></button></a>
            </div>
            <div class="col-md act">        
                <br><br>
                <a href="transactionhistory.php"><button ><img src="https://www.seekpng.com/png/detail/301-3019347_purchase-history-icon-transaction-history-icon-png.png" class="img-fluid" style="width: 70%; height: 70%;"><br><b>Transaction History</b></button></a>
            </div>
        </div>
    </div>
    <br>
    <br> 
    <br>
    <br>     
    <footer class="text-center mt-5 py-2">
        <p>CREATED by <b>RAMALAKKSHMI S</b> &copy 2021.</p>
        <p><b>THE SPARKS FOUNDATION</b></p>
        <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>