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
//include 'db_con.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tutorial</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="javascript.js"></script>
        <script>
        
function speak(){
    var audio = new Audio();
audio.src ='http://translate.google.com/translate_tts?ie=utf-8&tl=en&q=Hello%20World';
audio.play();
}
        </script>
       
    </head>
    <body>
        
        <header>
            <nav>
                <div class="main_wrapper">
                   <!-- <a href="select.php"> HOME</a>-->
                     <br>
                     <a href="logout1.php"> Logout</a> 
                 <!--<a href="select.php"> home</a>-->
                 <h2>   TUTORIAL </h2>
                 
               </div>
            </nav>
        </header>
          
        <div>
       <center>
           
           <div>
               
               <h3 id="tuhead"> COMPLEX ION </h3>
               <p id="tupar">
                   <strong>COMPLEX ION REACTIONS:</strong><br><br>
               
               Complex ion reactions can be thought of as either combination or decomposition'
               They are combination reactions when a metal ion is treated with excess ligand(ammonia,cyanide,hydroxide or thiocyanate).
               Example: copper(II)chloride solution is treated with excess ammonia.<br>
               Cu2++NH3--->[Cu(NH3)4]2+<br>
               They are decomposition when a complex ion is treated with acid.Because all
               ligands are bases,complexes are destroyed by the addition of acid.<br>
               Examples:Hydrochloric acid is added to a tetraamine copper(II) sulfate solution<br>
               [Cu(NH3)4]2++H+-->Cu2++NH3
               
                   
               </p>
               <a href="tutorialreac.php"> skip</a>
           </div>
           
           <footer id="tufo">
               <a href="tutorialreac.php">
                   <img src="backbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go back">
</a>
              <!-- <button type="submit" name="submit" id='tubut' data-toggle="tooltip" data-placement="left" title="click to go to next page" onclick="location.href='tutorialreac.php'"><img src="forwardbut.gif" alt=/> </button> <br><br>-->
                <a href="tucompI3.php">
                    <img src="forwardbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page"><br><br>
</a>
           <a href="select.php"> home</a> 
           
               
           </footer>
