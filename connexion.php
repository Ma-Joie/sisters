<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<link rel="stylesheet" href="style.css">
    <span class="welcom">
        BIENVENU SUR SISTERS IN CODING <!--Salutation-->
     </span>
    <header height = "50px">
      <br>
      <!-- <a href="#"><img src="sisters_in_coding .jpg" alt="Logo"  class="logo" width ="40px"></a> -->
      <a href="#" title = "home" class ="link">Home</a>
      <a href="#" title = "Programs" class ="link">Programs</a>
      <a href="#" title = "Chat" class ="link">Chat</a>
      <a href="#" title = "contact-us" class ="link">Contact-us</a>
      <a href="#" title = "others" class ="link">Others</a>
      <a href="connexion.php" title = "login" class ="link">Login</a>
      <br><br>
    </header>
    <style>
        .error{
            color : red ;
        }
    </style>
<body>

<?php
$mail = $password="";
$mailError = $passWdError="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["mail"])){
        $mailError="Adress mail is missing";
    }
    else{
        $mail = test($_POST["mail"]);
    }
    if(empty($_POST["password"])){
        $passWdError="password is missing";
    }
    else {
        $password= test($_POST["password"]);
    }
}
?>

<?php
   function test($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
   }
?>
<div class="div1">
        <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
           
            <label >email</label><input type="email" name="mail" class = "input"  >
            <span class = "error">* <?php echo $mailError ;?></span>
            <br><br>
            <label >Mot de passe</label><input type="password" name="password" class = "input"></textarea>
            <span class = "error">* <?php echo $passWdError ;?></span><br><br>
            <input type="submit" value ="soumettre"><br><br>
            <label>Conserver ma session</label><input type="checkbox">
        
        </form><br>
       Pas encore inscrit? Alors <a href="validation.php"> inscrivez-vous</a><br><br><br><br>
   </div>

</body>
</html>