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
               
               <h3 id="tuhead"> DECOMBINATION</h3>
               <p id="tupar">
                   <strong>DECOMBINATION REACTIONS:C-->A+B</strong><br><br>
               
Heating ammonium carbonate -->ammonia+water+carbon dioxide <br><br>
                   Heating a metal carbonate-->metal+chloride <br><br>
                 Heating a metal chlorate-->metal+oxygen <br><br>
                   Heating a metal heavy metal oxide-->metal+oxygen <br><br>
                  Heating hydrogen peroxide-->water+oxygen <br><br>
                   electrolysis of water--> hydrogen+oxygen<br><br>
                   electrolysis of molten(melted) metal halide-->metal+halogen<br><br>
                   electrolysis of molten (melted) metal oxide--->metal +oxygen
                   
               
                   
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





