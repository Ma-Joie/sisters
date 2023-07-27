<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValadationForm</title>
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
      <a href="#" title = "login" class ="link">Login</a>
      
      <br><br>
    </header>
    <style>
        .error{
            color : red ;
        }
    </style>
</head>
<body>
  <!-- tests de validation du formulaire -->
<?php
    // les variables qui cotiendront les données
    $name = $firstName = $mail = $password = ""; 
    // Les variables d erreur
      $nameError = $firstNameError = $mailError = $passWdError= ""; 
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameError = "please fill the name";
        } else {
                $name = test($_POST["name"]);
          }
          if (empty($_POST["firstName"])){
             $firstNameError = "Please fill de first name";
          } else {
            $firstName = test ($_POST["firstName"]);
          }
          if (empty($_POST["mail"])){
            $mailError = "email is missing";
          }else {
            $mail = test($_POST["mail"]);
          }
          if(empty($_POST["password"])){
            $passWdError = "Password is missing";
          }
          else{
            $password = test($_POST["password"]);
          }
          
       }

       function test($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data ;
       }
     ?>
     <!-- <div class = "div2">
     <?php
     echo "<h2>Votre saisie :</h2>";
     echo "Nom : ".$name."<br>";
     echo "Prenom : ".$firstName."<br>" ;
     echo "Adress electronique : ".$mail."<br>" ;
     echo "Mot de passe : ".$password."<br>" ;
     ?>
     </div> -->
     <!-- formulaire -->
   <div class="div1">
        <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <label >Nom</label> <input type="text" name= "name" class = "input" >        
            <span class = "error">* <?php echo $nameError ;?></span>
            <br><br>
            <label >Prenom</label><input type="text" name = "firstName" class = "input" >
            <span class = "error">* <?php echo $firstNameError ;?></span>
            <br><br>
            <label >email</label><input type="email" name="mail" class = "input" >
            <span class = "error">* <?php echo $mailError ;?></span>
            <br><br>
            <label >Mot de passe</label><input type="password" name="password" class = "input"></textarea>
            <span class = "error">* <?php echo $passWdError ;?></span><br><br>
            <input type="submit" value ="soumettre"><br><br>
            <label>Conserver ma session</label><input type="checkbox">
        
        </form><br>
       Déja incrit? Alors <a href="connexion.php"> connectez-vous</a>
   </div>
    
</body>
</html>