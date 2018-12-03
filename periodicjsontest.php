<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'db_con.php';
$data=array();
$atomicno="";
$atomicwe="";
$type="";
$symbol="";
if(isset($_GET['submit'])){
$element=$_GET['inputperi'];
$ele= strtolower($element);
//$data=array();
$query="select * from elements where name='$ele'";
$result= queryMysql($query);
while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
   $data[]=$row;
}
}

$jsondata= json_encode($data);
//echo $jsondata;
$phparray= json_decode($jsondata,true);
//print_r($phparray);
/*foreach ($phparray as $value) {
 
}*/


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <!--<link rel="stylesheet" type="text/css" href="style.css">-->
        <style></style>
        <script type="text/javascript" src="javascript.js"></script>
    </head>
    <body>
        
        
        <!--<h2 style="text-align:center">PERIODIC TABLE</h2>-->
        <a href="periodictablechart.php" style="float: right;">
                   <img src="backbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go back">
</a>
        
               <!-- <a href="tutorialreac.php">
                    <img src="forwardbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page">
                </a>--> <br><br>
               <a href="select.php" style="float: right;"> home</a> 
        <div id="periodic" style=" ">
            <img src="jsonperiodic.gif">
            
        <form id="periodicform" style="float: left;">
        
        <div id="jsonperi">
            
            <input type="text" name="inputperi" placeholder="element name">
            <button type="submit" name="submit" id="buttonsub"> element details</button>
            <h4>ELEMENT DETAILS</h4>
            <p style="font-family: cursive;">
                
               <?php foreach ($phparray as $value) {
 echo"ELEMENT NAME:";echo"<br>";
 echo $value["name"] ;echo"<br>";
 echo"ELEMENT SYMBOL:";echo"<br>";
 echo$value['symbol'];echo"<br>";
 echo"ELEMENT ATOMIC WEIGHT:";echo"<br>";
 echo$value['atomic_weight'];echo"<br>";
 echo"ELEMENT NUMBER:";echo"<br>";
 echo $value['atomic_number'];echo"<br>";
 echo"ELEMENT TYPE:";echo"<br>";
echo $value['element_type'];echo"<br>";
$atomicno=$value['atomic_number'];
$atomicwe=$value['atomic_weight'];
$symbol=$value['symbol'];
$type=$value['element_type'];
}?>
            </p><br>
        </div>
                        <p class="etypes">
                     <label for="opt-in" id="label"> NON-METAL:</label>
                     <input type="checkbox" id="non-metal" name="non-metal" onclick="shownonmetal();"><br>
                     <textarea  ROWS=12 id='nonmetalre1' style="display: none" >Hydrogen;
Carbon
Nitrogen
Oxygen
Flourine
Silicon
Phosphorus
Sulphur
Chlorine
Selenium
Bromine
Iodine
                </textarea><br><br>
                     <label for="opt-in" id="label"> METAL:</label>
                     <input type="checkbox" id="metal" name="metal" onclick="showmetal();"><br><br>
                     <textarea ROWS=12 id='nonmetalre2' style="display: none">Lithium
Beryllium
Sodium
Magnesium
Aluminium
Potassium
Calcium
Iron
Copper
Zinc
Silver
Tungsten
Platinum
Gold
Mercury
Lead
Scandium
Titanium
Vandanium
Chromium
Magnese
Cobalt
Nickel
Gallium
Rubidium
Strontium
Yttrium
Zirconium
Niobium
Molybdenum
Technetium
Ruthenium
Rhodium
Palladium
Cadmium
Indium
Tin
Cesium
Barium
Lanthanum
Hafnium
Tantalum
Rhenium
Osmium
Iridium
Thallium
Bismuth
Francium
Radium
Actinium
Rutherfordium
Dubnium
Seaborgium
Bohrium
Hassium
Meitnreium
Darmstadtium
Roentgenium
Copernicium
Nihonium
Flerovium
Moscovium
Livermorium 
                </textarea><br><br>
                     <label for="opt-in" id="label"> METALLOID:</label>
                     <input type="checkbox" id="metalloid" name="metalloid" onclick="showmetalloid();"><br><br>
                     <textarea ROWS=8 id='nonmetalre3' style="display: none">Boron
Germanium
Arsenic
Antimony
Tellurium
Polonium
Astatine
Tennessine
                </textarea><br><br>
                     <label for="opt-in" id="label"> NOBEL GAS:</label>
                     <input type="checkbox" id="nobel-gas" name="nobel-gas" onclick="shownobelgas();"><br><br>
                     <textarea ROWS=8 id='nonmetalre4' style="display: none">Helium
Neon
argon
Krypton
Xenon
Radon
Oganesson
                </textarea><br><br>
                     
                 </p>
                 
               </div>
        
        </form>
        
    </body>
</html>