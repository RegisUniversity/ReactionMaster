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
                   <strong>COMPLEX ION REACTIONS OVERVIEW:</strong><br><br>
               
               Complex Ion -a complex ion is an ion in which there is a central metallic atom
               that has one to many ligands attached.Collectively the molecules is (+ or-) <br><br>
                   Ligand-A ligand is a molecular species, typically a polyatomic ion,that'
                   fastens itself to a central metal to form a complex ion.The most common ligards are:<br><br>
                   
                   Ammonia(NH3) <br><br>
                   Hydroxide(OH-) <br><br>
                  Cyanide (CN-)<br><br>
                   Thiocyanate(SCN-)<br><br>
                   Metal Ions: the most common metal ions that form complexes are:<br><br>
                   Ag+,Cu2+,Zn2+,Co2+,Ni2+,Cd2+,Sn2,Pb2+,Cr3+,Al3+,Fe3+,Co3+.
                   
               
                   
               </p>
               <a href="select.php"> skip</a>
           </div>
           
           <footer id="tufo">
               <a href="tucompI.php">
                   <img src="backbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go back">
</a>
              <!-- <button type="submit" name="submit" id='tubut' data-toggle="tooltip" data-placement="left" title="click to go to next page" onclick="location.href='tutorialreac.php'"><img src="forwardbut.gif" alt=/> </button> <br><br>-->
                <a href="tucompI2.php">
                    <img src="forwardbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page"><br><br>
</a>
           <a href="select.php"> home</a> 
           
               
           </footer>





