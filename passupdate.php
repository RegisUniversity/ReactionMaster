<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header>
            <nav>
                
            <div class="main_wrapper">
                <footer>
                    <a href="index1.php"> HOME</a></footer> 
                <center><h2> PASSWORD UPDATE</h2></center> 
                
            </div>
            
            </nav>
            
        </header> 
        <div class="main_login">
            <center>
                <form class="login-form" action="" method= "post">
        USERNAME:
      <input type="text" name="username" placeholder="username">
      <br>
      <br>
      <br>
      PASSWORD:
      <input type="password" name="password" placeholder="password">
      <br>
      <br>
      <br>
      <button type="submit" name="submit">UPDATE</button>
      
</form>
            </center>
</div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include 'db_con.php';
$user="";
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query1="select username from registration";
    $res= queryMysql($query1);
    while($row= mysqli_fetch_array($res,MYSQLI_ASSOC)){
     $user=$row['username'];
     
 }
 if(empty($_POST['username'])){
 echo '<script>alert("check username")</script>';     
 }

        $query="update registration set password='$password' where username='$username'";
        $res= queryMysql($query);
        if ($username==$user) {
            echo '<script>alert("password updated")</script>';   
        }
        else{
            echo '<script>alert("password update failed")</script>';
        }
    }

?>
