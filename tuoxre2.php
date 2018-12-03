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
               
               <h3 id="tuhead"> OXIDATION-REDUCTION </h3>
               <p id="tupar">
            <strong>common oxidizing agent:</strong> <strong>Reduction product formed:</strong><br>
 
               MnO4 in acidic solution<br>Mn2+
               
               MnO4 in neutral&basic solution<br>MnO2
               MnO2 in acidic solution<br>Mn2+
               Cr2O72- in acidic solution<br>r3+
               HNO3 dilute<br>NO
               HNO3 concentrated<br>NO2
               H2SO4 hot concentrated<br>SO2
               O2<br>H2O
               H2O2<br>H2O
               metalic-ions<br>metalous ions
               free halogens <br><strong>Reduction product formed:</strong><br>
               Mn2+<br>
               MnO2<br>
               Mn2+<br>
               Cr3+<br>
               NO<br>
               NO2<br>
               SO2<br>
               H2O<br>
               H2O<br>
               metal-ous ions<br>
               halide ions
               
                   
               
                   
               </p>
               <a href="tutorialreac.php"> skip</a>
           </div>
           
           <footer id="tufo">
               <a href="tuoxre1.php">
                   <img src="backbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go back">
</a>
              <!-- <button type="submit" name="submit" id='tubut' data-toggle="tooltip" data-placement="left" title="click to go to next page" onclick="location.href='tutorialreac.php'"><img src="forwardbut.gif" alt=/> </button> <br><br>-->
                <a href="tuoxre3.php">
                    <img src="forwardbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page"><br><br>
</a>
           <a href="select.php"> home</a> 
           
               
           </footer>
