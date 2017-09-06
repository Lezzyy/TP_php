<!doctype html>
<html class="no-js" lang="FR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

<head>
    <title>AUTHORIZED ACCESS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <div class="container secret">


<?php
if (isset($_POST['name']) and isset($_POST['password'])) {
    $_POST['name']=(string)$_POST['name'];

    if ($_POST['password']=='kangourou') {
        echo 'Authorised access'. '<br/>'.' Welcome '. strip_tags($_POST['name']).'<br/>'.'Here the codes :';
        include('code.php');
    } else {
        echo header('Location: formulaire.php');
    }
}

?>

<style>
            .secret
            {
                color:white;
                text-align: center;
            }
        </style>
  </div>
</body>
</html>
