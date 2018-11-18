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
               
                   Hydroxide(OH-) forms complexes with:Cu2+,Zn2+,Cd2+,Sn2+,Pb2+,Cr3+,Al3+<br>
                   Examples:A solution of copper(II) sulfate is treated with excess
                   concentrated hydroxide.<br>
                   Answer:Cu2++OH--->[Cu(OH)4]2-<br>
                   Examples:A precipitate of zinc hydroxide and excess concentrated sodium
                   hydroxide solution are mixed.<br>
                   Answer:Zn(OH)2+OH--->[Zn(OH)4]-<br>
                   Examples:Solid aluminum hydroxide and excess concentrated sodium
                   hydroxide are mixed<br>
                   Answer:Al2O3+OH--->[Al(OH)4]-
                   
               
                   
               </p>
               <a href="select.php"> skip</a>
           </div>
           
           <footer id="tufo">
               <a href="tucompI3.php">
                   <img src="backbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go back">
</a>
              <!-- <button type="submit" name="submit" id='tubut' data-toggle="tooltip" data-placement="left" title="click to go to next page" onclick="location.href='tutorialreac.php'"><img src="forwardbut.gif" alt=/> </button> <br><br>-->
                <a href="tucompI5.php">
                    <img src="forwardbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page"><br><br>
</a>
           <a href="select.php"> home</a> 
           
               
           </footer>

