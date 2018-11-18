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
                   <strong>OXIDATION-REDUCTION OVERVIEW:</strong><br><br>
               
              Most reactions encounter in AP chemistry and general chemistry can be
              classified as oxidation-reduction reactions,or"redox".An oxidation- reaction's
              involves the exchange of electrons between two chemical species.Oneid
              species loses electron while another gains electron.This process is a common mechanism by which
              chemical species in our surroundings change.<br><br>
              Of the rections discussed in the tutorial, most can be considered"redox".
              combination,decomposition ,single replacement,water reaction and combustion all involves
              the exchange of electrons. There are other"redox" reactions that occur that have not yet been 
              These reactions typically involve an oxidizing agent and a reducing agent.In order
              to fully master "redox" reactions it is crucial that the chemistry student become familiar with the common oxidizing agent and reducing agent and memorize the products of
              
            either the oxidation or reduction for each agent. Lastly,redox reaction occurs in acidic or base media.
            This means that in the word equation,key phrases such as "Acidified iron(II)chloride solution is 
            treated with will be crucial to  identifying redox reactions.Bexause these reactions occur in acidic or basic
            environment,water will always be one of the products it is also advised that student review their oxidation number rules,and practice half-reactions so
            that they may master redox reactions.
              
                   
               
                   
               </p>
               <a href="select.php"> skip</a>
           </div>
           
           <footer id="tufo">
               <a href="tuoxre.php">
                   <img src="backbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go back">
</a>
              <!-- <button type="submit" name="submit" id='tubut' data-toggle="tooltip" data-placement="left" title="click to go to next page" onclick="location.href='tutorialreac.php'"><img src="forwardbut.gif" alt=/> </button> <br><br>-->
                <a href="tuoxre2.php">
                    <img src="forwardbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page"><br><br>
</a>
           <a href="select.php"> home</a> 
           
               
           </footer>

