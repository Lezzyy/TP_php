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
if (isset($_POST['name']) AND isset($_POST['password'])) {

    if ($_POST['password']=='kangourou') {
      echo ' Welcome '. strip_tags($_POST['name']).'<br/>'.'Here the codes :';
  ?>
  <table>
      <tr>
        <th>NAME</th>
        <th>CODE</th>
      </tr>
      <tr>
        <th>hghg</th>
        <th>13556</th>
      </tr>
      <tr>
        <th>hjgjg</th>
        <th>987960</th>
      </tr>
      <tr>
        <th>kjhmioio</th>
        <th>080769865</th>
      </tr>
      <tr>
        <th>BHH</th>
        <th>65376</th>
      </tr>
  </table>
<?php
    } else {
        header('Location: formulaire.php');
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
