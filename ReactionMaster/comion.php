<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.*/
 $row="";
$reactant1="";
$reactant2="";
$product="";
$hint="";
$equ="";
$error="";
//$count="";
$counter=0;
$correct="";
$check="false";
$error1="";
$reaction=$equ;

include 'db_con.php';
//query to dispaly the values from 2or more tables with join
 $query="select reactant1,reactant2,product1,hints,word_equations from
reactions join hints on reactions.rid=hints.rea_id 
where reactions.reac_type='Ion'
";
 $res= queryMysql($query);
 $data=array();
 while($row= mysqli_fetch_array($res,MYSQLI_ASSOC)){
     $data[]=$row;
     
 }
 /*foreach ($data as $val) {
     $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
     $equ=$val['word_equations'];
     echo $reactant1;
     echo $reactant2;
     echo $product;
     echo $hint;
 echo $equ;}*/
 //$count=rand(0,100);
 $count=1;
 
 

     if(!isset($_POST['submit'])){        // echo '<script>alert("PLEASE CLICK THE NEXT BUTTON !")</script>';
     //to display the values before botton click
      foreach ($data as $val) { 
     $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
     $equ=$val['word_equations'];
      }
      //echo "heii";
     
     }else{
        // array_rand($val,7);
        // $data[]=$row;
     //$count1=array();
    // $count=rand(0,100);
    // echo $count;
         $products=$_POST['product2'];
         $hidden=$_POST['hidden'];
         $count=$_POST['count'];
        /* if(!isset($_POST['submit1'])){
             $error1="CLICK CHECK TO VERIFY ANSWER";
         }*/
        
      
        //gives random values on button click 
        shuffle($data);
        foreach ($data as $val) {
     $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
     $equ=$val['word_equations']; 
     //$counter=$count++;
   /* echo $reactant1;
     echo $reactant2;
     echo $product;
     echo $hint;
 echo $equ;
     
    // $count=array();
     for($i=0;$i<=100;$i++){
      if($count1<=$i){
          break;
      // $counter++;  
      }
      echo $i;
//      $counter++;
     }
        }
        if($products==$hidden){
         //counting by increment the right answer   
         $counter= $count++;
        
         echo '<script>alert("GREAT ! '.$counter.' answers correct")</script>';
        }else{
           //$error= "The previous product is ".$hidden; 
            //putting php variable in javascript
            //$count=0;
            echo '<script>alert("THE PRODUCT IS '.$hidden.' ")</script>';
            //$error= "THE PRODUCT IS"."<br>".$hidden;
        }*/
       
     }}
     if(!isset($_POST['submit1'])){$error1="CLICK CHECK TO VERIFY ANSWER"; //echo "byee";
     }
     else{
        /* $check="true";
           foreach ($data as $val) {
         $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
           $equ=$val['word_equations']; }*/
     
      $products=$_POST['product2'];
     
     $hidden=$_POST['hidden'];
     $product=$hidden;
     $equ=$reaction;
     $reactant1=$_POST['reactant1'];
     $reactant2=$_POST['reactant2'];
     //$equ1=$_POST['word_equation'];
     $hint=$_POST['hint'];
     $equ=$_POST['equ'];
     
    
     //$reaction=$equ;
           //$count=$_POST['count'];
         
         if($products==$hidden){
         //counting by increment the right answer   
        // $counter= $count++;
        
        // echo '<script>alert("GREAT ! '.$counter.' answers correct")</script>';
         $correct="GREAT!ANSWERS CORRECT";
         
        }else{
           //$error= "The previous product is ".$hidden; 
            //putting php variable in javascript
            //$count=0;
           // echo '<script>alert("THE PRODUCT IS '.$hidden.' ")</script>';
            $error= "THE PRODUCT IS"."<br>".$hidden;
          
            
           }
           
         
     }
    

?>
<html>
    
    
    
    
    
    <head>
        <meta charset="UTF-8">
        <title>combination</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="javascript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>

   function start(){
                var r = document.getElementById("propra");
            if("webkitSpeechRecognition" in window){
                var speechRecognizer = new webkitSpeechRecognition();
                speechRecognizer.continuous = true;
                speechRecognizer.interimResults = true;
                speechRecognizer.lang = "en-US";
                speechRecognizer.start();
                
                var finalTranscripts = "";
                speechRecognizer.onresult = function(event){
                    var interimTranscripts = "";
                    for(var i=event.resultIndex; i<event.results.length; i++){
                        var transcript = event.results[i][0].transcript;
                        transcript.replace("\n", "<br>");
                        if(event.results[i].isFinal){
                            finalTranscripts += transcript;
                        }
                        else{
                            interimTranscripts += transcript;
                        }
                        r.innerHTML = finalTranscripts + '<span style="color: #999;">' + interimTranscripts + '</span>';
                    }
                };
                speechRecognizer.onerror = function(event){
                };
            }
            else{
                r.innerHTML = "Your browser does not support that.";
            }
            }
</script>
       
    </head>
    <body>
        
        <header>
            <nav>
               <!-- <div class="practice">
                     <a href="index.php"> HOME</a>
                     <br>
                 <a href="logout.php"> Logout</a>
                 <h2>   COMBINATION </h2>
                 
               </div>-->
            </nav>
        </header>
    
       
        <div id="practice2">
            <form id="comid2" action="" method="post">
                 <h2 id="header"> COMPLEX ION</h2> <br>
                 
                 <font id='hint' data-toggle="tooltip" data-placement="left" title=" click checkbox for hint">?</font>
          <input type="checkbox" id="hint1" name="hint" onclick="showhint();">
   
          
          <font id="com" color="red" style="display:none" > <?php 
         echo $hint;
         ?></font><br><br>
         <font id="word" color="blue" > <?php 
         echo $equ;
          ?></font>
      <br>
      <br>
       
     <font id="word2" color="blue" > <?php 
         echo $reactant1;
          ?></font>&nbsp+
      
      
       <font id="word3" color="blue" > <?php 
         echo $reactant2;
          ?></font>&nbsp -->
          <input type="text"   name="product2" id="propra"   placeholder="product">
          <!--<img src="microphone.gif" onclick="startdictation();" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page">--><br><br>
          <font id="correct"> <?php echo $correct?></font>
          <font id="error2"><?php   echo $error?></font><br><br>
          <label id="label">The Product:</label> 
          <input id="proch" type="checkbox" name="proch" onclick="showpro();" style="color: red">
          <font id="chep" color="red" style="display:none "> <?php echo $product; ?></font>
          <input type="hidden" name="hidden" value="<?php echo $product ?>">
          
          <input type="hidden" name="count" value="<?php echo $count?>">
          <input type="hidden" name="reactant1" value="<?php echo $reactant1?>">
          <input type="hidden" name="reactant2" value="<?php echo $reactant2?>">
          <input type="hidden" name="hint" value="<?php echo $hint?>">
          <input type="hidden" name="equ" value="<?php echo $equ?>">
          <audio src=""  class="speech" hidden> </audio>
          
     
      <br>
      <br>
      <?php// echo $error1?>
      <!--<a href="" class="mic" style=""> <img src="microphone.gif" /></a>-->
      <!--<button type="submit" onclick="start()" name="mic" id='buttonimg1' data-toggle="tooltip" data-placement="left" title="click to go to next reaction"><img src="microphone.gif" /></button>-->
      <button type="submit" name="submit" id='buttonimg' data-toggle="tooltip" data-placement="left" title="click to go to next reaction"><img src="playbutton.gif" alt=/></button> 
      
      <?php //echo $error1?>
      <button type="submit" name="submit1" id="butmou" data-toggle="tooltip" data-placement="right" title="click to check answers" onclick="onclick();"> <img src="check.gif" alt=/></button>
      <br><br>
      <?php echo $error1?>
      <script>
          $(function(){
              $('a.mic').on('click',function(e){
                  e.preventDefault;
                  var text=$('input[name="product2"]').value();
                  text= encodeURIComponents(text);
                  console.log(text);
                  var url="http://translate.google.com/translate_tts?ie=utf-8&tl=en&q="+ text+"";
                  $('audio').attr('src',url).get(0).play();
                  
    } );
              
    } );
        
      </script>
      <!--<button type="submit" name="submit1">SUBMIT</button>-->
      
      <font id="mouseover" style="display: none"> click to go to next reaction</font>
                
            </form>
        </div>
        
    </body>
</html>
