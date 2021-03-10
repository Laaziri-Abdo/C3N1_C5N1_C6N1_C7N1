<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<div id="container">
             <form action="index.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="name" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" name='abdo' value='LOGIN' >
               
            </form>
        </div>

        <?php
 
if (isset( $_POST['abdo'])) {
    $name = $_POST["name"];
    $pass = $_POST["password"];

 $conn = new mysqli("localhost", "root","","logintest1");
 // Check connection
 if (!$conn) {
 die("Connection failed: " . connect_error($conn));
 }
//  else{
//      echo "Connected successfully";
//  }


 $query = "SELECT * FROM laaziri WHERE nom = '$name'";
 
  $result= mysqli_query($conn,$query);
  if (!$result) {
    die("Connection failed: ");// . connect_error( $result));
    }
    else{
        echo "Connected successfully";
    }
    while( $row = mysqli_fetch_assoc($result) ){
      $db_name=  $row['nom'];
      $db_pass =  $row['pass'];
    }
    if ($db_name == $name &&  $db_pass ==$pass) {
       header("location: home.php");
    }
    else if ($db_name !== $name &&  $db_pass !==$pass) {
        header("location: index.php");
     }else {
        header("location: index.php");
     }

}
            
    ?>


</body>
</html>
