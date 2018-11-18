<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if(!isset($_SESSION['username'])){
header('Location:index1.php');
 exit();
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>selection Form</title>
        <link rel="stylesheet" type="text/css" href="css/homestyle.css">
    </head>
    <body>
        <header>
            <nav>
                
            <div class="main_wrapper">
                <footer>
                    <a href="index1.php"> HOME</a>
                    <br>
                    <br>
                    <a href="logout1.php"> LOGOUT</a></footer>
               
                <center><h2></h2></center> 
                
            </div>
            
            </nav>
            
        </header> 
        <div class="main_login">
            <center>
                
                <form class="select" action="" method="post">
                    <h4 id="head"> WELCOME <?php echo $_SESSION['username'];?></h4>
                  <br>
                 <br> 
                 TUTORIAL:
                 <button type="submit" name="submit">SELECT</button>
                 <br>
                 <br>
                 PRACTICE:
                 <button type="submit" name="submit1">SELECT</button>
                  <br>
                 <br>
                 TEST:
                 <button type="submit" name="submit2">SELECT</button>
                  <br>
                 <br>
                 PERIODIC TABLE:
                 <button type="submit" name="submit3">SELECT</button>
                    
                </form>                 
                    
                
        
            </center>
</div>
    </body>
</html>
<?php
if(isset($_POST['submit1'])){
    header('Location:practice.php');
}
if(isset($_POST['submit2'])){
header('Location:testSelType.php');}
if(isset($_POST['submit'])){
    header('Location:tutorial.php');
}
if(isset($_POST['submit3'])){
    header('Location:periodictablechart.php');
}

    









?>