<?php
$host="127.0.0.1";
$user="user1";
$password="yes";
$database="shopping";
$connect = mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
    die("cannot connect to database fieled :" .mysqli_connect_error());
}
?>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/home.css">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>Document</title>
</head>
<body>
    <!-- include navbar -->
    <?php require 'include/navbar1.php'; ?>

    <div class="container">
        <!-- include header -->
        <?php require 'include/header.php'; ?>

        <section>

        </section>
    </div>

    <!-- include footer -->
    <?php require 'include/footer.php'; ?>
    <script src="js/header.js"></script>
</body>
</html>