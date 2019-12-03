
<html>
  <head>
    <title></title>
    <link href="./resources/css/reset.css" type="text/css" rel="stylesheet"/>
    <link href="./resources/css/style.css" type="text/css" rel="stylesheet"/>
    <?PHP

    $username = $_POST['username'];

    if ($username == "letmein") {

      print ("Welcome back, friend!");

    }
    else {

      print ("You're not a member of this site");

    }

    ?>
  </head>
  <body>
    <FORM NAME ="form1" METHOD ="POST" ACTION = "index.php">

      <INPUT TYPE = "TEXT" VALUE ="username" Name ="username">
      <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">

    </FORM>
  </body>
</html>
