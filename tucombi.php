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
               
               <h3 id="tuhead"> COMBINATION</h3>
               <p id="tupar">
                   <strong>COMBINATION REACTIONS:A+B-->C</strong><br><br>
               
                   metal+non-metal-->binary ionic compound <br><br>
                   non-metal+non-metal-->binary covalent compound <br><br>
                   basic metal oxide+acidic non-metal oxide-->salt <br><br>
                   metal hydroxide+carbon-dioxide-->metal hydrogen carbonate <br><br>
                   metal hydroxide+sulfur dioxide-->metal hydrogen sulfite <br><br>
                   strong Bronsted acid OR weak molecular acid+ weak molecular Bronsted base-->salt<br><br>
                   molecular Lewis acid+molecular Lewis Base-->compound
                   
               
                   
               </p>
               
           </div>
           
           <footer id="tufo">
               <a href="tutorialreac.php"> skip</a>
               
               <a href="tutorialreac.php" style="float: centre">
                   <img src="backbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go back">
</a>
              <!-- <button type="submit" name="submit" id='tubut' data-toggle="tooltip" data-placement="left" title="click to go to next page" onclick="location.href='tutorialreac.php'"><img src="forwardbut.gif" alt=/> </button> <br><br>-->
                <!--<a href="tucombi1.php">
                    <img src="forwardbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page"><br><br>
</a>-->
           <a href="select.php"> home</a> 
           
               
           </footer>




