<?php
session_start();
include("configuracion.php");
include("usuarios.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $myusername = $_POST['username'];
   $mypassword = $_POST['password']; 

   if (isset($users[$myusername]) && $users[$myusername] == $mypassword){
      $_SESSION['login_user'] = $myusername;
      header("location: index.php");
   }else {
      $error = "Ingrese los datos correctamente";
   }
}
?>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="styles.css">
   </head>
   <body>
   
      <div class="container">
         <form action = "" method = "post">
            <label for="uname"><b>User</b></label>
            <input type="text" placeholder="Ingrese su Usuario" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Ingrese su Contraseña" name="password" required>

            <button type="submit">Login</button>
         </form>
         <div style="font: size 14px;px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
      </div>
   </body>
</html>
