<?php $poklony = file_get_contents('poklony.txt'); 
if (isset($_GET['poklon'])) {
    file_put_contents('poklony.txt', ++$poklony);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Lower Persian Kingdom - Prince of Persia</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container text-center">
    <div class="header">
        <h3 class="text-muted">Centrum władania światem</h3>
    </div>

    <div class="jumbotron">
        <h1>Pokłaniacz</h1>
        <p class="lead">Niski pokłon dla Twojego Księcia</p>
        <p>Już <?php echo $poklony ?> osób oddało pokłon Twojemu Księciu, nie czekaj dłużej!</p>
        <p><a class="btn btn-lg btn-success" href="?poklon" role="button">Jebnij pokłon</a></p>
    </div>


    <div class="footer">
        <p>&copy; Lower Persia Kingdom 2014</p>
    </div>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
<?php

