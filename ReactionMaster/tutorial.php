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
               
               <h3 id="tuhead"> TUTORIAL OVERVIEW</h3>
               <p id="tupar">
                   The tutorial portion of this program is intented to introduce the chemistry students
                   to various reactions and reation types that are encountered in AP chemistry.There are nine 
                   reaction types that are introduced in the tutorial section.Some of the reaction types have subset
                   and categories that fall under a broader reaction types.<br><br>
                   
                   The overall sequence of the tutorial is to show the student a general reaction definition
                   followed by examples of AP chemistry reaction as they appear on the exam.Following the reaction 
                   examples are answers consistent with expected response on the AP exam. In some instance further 
                   are presented that pertains the reactions in hand.It is through the tutorial that the student obtain 
                   background knowledge necessary to proceed into further sections of the program such as practice and test
                   tools.<br><br>
                   
                   Because of the entire premise of this utility is to instruct the students in classification of reactions
                   and recognition of reaction types, the student may find it beneficial to continually revisit particular section
                   of the tutorial for further review, enhancement and refinement of their reaction knowledge.
                   
                   
                   
               </p>
              <!-- <button type="submit" onclick="speak()"> speak</button>-->
           </div>
           
           <footer id="tufo">
              <!-- <button type="submit" name="submit" id='tubut' data-toggle="tooltip" data-placement="left" title="click to go to next page" onclick="location.href='tutorialreac.php'"><img src="forwardbut.gif" alt=/> </button> <br><br>-->
                <a href="tutorialreac.php">
                    <img src="forwardbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page"><br><br>
</a>
           <a href="select.php"> home</a> 
           
               
           </footer>



