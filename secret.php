<head>
    <title>Form with password</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
if (isset($_POST['name']) and isset($_POST['password'])) {
 $_POST['name']=(string)$_POST['name'];

 if ($_POST['password']=='kangourou') {
     echo 'Authorised access'. '<br/>'.' Welcome '. strip_tags($_POST['name']);
 }
 else {
 echo header('Location: formulaire.php');
}
}

?>

</body>
</html>
