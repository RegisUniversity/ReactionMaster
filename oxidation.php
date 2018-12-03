<?php
$reactant1="";
$reactant2="";
$product1="";
$product2="";
$hint="";
$equ="";
$error1="";
$correct="";
$error="";

include 'db_con.php';
//query to dispaly the values from 2or more tables with join
 $query="select reactant1,reactant2,product1,product2,hints,word_equations from
reactions join hints on reactions.rid=hints.rea_id 
where reactions.reac_type='Redox'
";
 $res= queryMysql($query);
 $data=array();
 while($row= mysqli_fetch_array($res,MYSQLI_ASSOC)){
     $data[]=$row;
     
 }
 if(!isset($_POST['submit'])){        // echo '<script>alert("PLEASE CLICK THE NEXT BUTTON !")</script>';
     //to display the values before botton click
      foreach ($data as $val) { 
     $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product1=$val['product1'];
     $product2=$val['product2'];
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
         /*$products=$_POST['product2'];
         $hidden=$_POST['hidden'];
         $count=$_POST['count'];*/
        /* if(!isset($_POST['submit1'])){
             $error1="CLICK CHECK TO VERIFY ANSWER";
         }*/
        
      
        //gives random values on button click 
        shuffle($data);
        foreach ($data as $val) {
     $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product1=$val['product1'];
     $product2=$val['product2'];
     $hint=$val['hints'];
     $equ=$val['word_equations']; 
    
       
     }}
     if(!isset($_POST['submit1'])){$error1="CLICK HERE TO VERIFY ANSWER";
         
     }else{
      $decopro=$_POST['decpro'];   
      $decopro1=$_POST['decopro2']; 
      $hidden=$_POST['hidden'];
      $hidden1=$_POST['hidden1'];
      $product1=$hidden;
      $product2=$hidden1;
      $hint=$_POST['hint'];
      $reactant1=$_POST['reactant1'];
      $reactant2=$_POST['reactant2'];
      $equ=$_POST['equ'];
      if($decopro==$hidden&&$decopro1==$hidden1){
        $correct="GREAT!ANSWERS CORRECT";  
      }else{
           $error= "THE PRODUCT IS"."<br>".$hidden."<br>".$hidden1;
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
$(document).ready(function(){
    $("#butmou").click(function(){
        $("word").hide();
        $("label").hide();
        $("proch").hide();
    });
    
});
    
   /* document.getElementById('bulmou').onclick=function(){
        document.getElementById('word1').style.visibility='hidden';
        return false;
    }*/
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
    
       
        <div id="decompprac">
            <form id="comid2" action="" method="post">
                 <h2 id="dechead">OXIDATION/REDUCTION</h2> <br>
                 
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
         ?></font>+<font id="word2" color="blue" > <?php 
         echo $reactant2;
         ?></font>&nbsp;--->
         <input type="text" name="decpro" id="decoinput"   placeholder="product1">&nbsp;+
         <input type="text" name="decopro2" id="decoinput1"   placeholder="product2"><br><br>
         <font id="correct"> <?php echo $correct?></font>
          <font id="error2"><?php   echo $error?></font><br><br>
         <label id="label">The Product:</label> 
          <input id="proch" type="checkbox" name="proch" onclick="showpro();" style="color: red">
          <font id="chep" color="red" style="display:none "> <?php echo $product1;echo "<br>";echo $product2; ?></font>
          <input type="hidden" name="hidden" value="<?php echo $product1 ?>">
          <input type="hidden" name="hidden1" value="<?php echo $product2 ?>">
          <input type="hidden" name="reactant1" value="<?php echo $reactant1?>">
          <input type="hidden" name="reactant2" value="<?php echo $reactant2?>">
          <input type="hidden" name="hint" value="<?php echo $hint?>">
          <input type="hidden" name="equ" value="<?php echo $equ?>">
          
          
          
          
          
          <br><br>
         <button type="submit" name="submit" id='buttonimg' data-toggle="tooltip" data-placement="left" title="click to go to next reaction"><img src="playbutton.gif" alt=/></button> 
         <button type="submit" name="submit1" id="butmou" data-toggle="tooltip" data-placement="right" title="click to check answers" onclick="onclick();"> <img src="check.gif" alt=/></button>
<?php echo $error1?>