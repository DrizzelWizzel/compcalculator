<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="calcstyle.css">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <title>Compensation Calculator</title>

   <?php

   if($_POST == true){
     $rifles = $_POST["rifles"];

     $attachment1 = $_POST["attachment1"];
     $attachment2 = $_POST["attachment2"];
     $attachment3 = $_POST["attachment3"];
     $attachment4 = $_POST["attachment4"];
     $attachment5 = $_POST["attachment5"];
     $attachment6 = $_POST["attachment6"];
     $attachment7 = $_POST["attachment7"];
     $attachment8 = $_POST["attachment8"];
     $attachment9 = $_POST["attachment9"];
     $attachment10 = $_POST["attachment10"];
     $attachment11 = $_POST["attachment11"];
     $attachment12 = $_POST["attachment12"];

     $totalAttachments = $attachment1 + $attachment2 + $attachment3 + $attachment4 + $attachment5 + $attachment6 + $attachment7 + $attachment8 + $attachment9 + $attachment10 + $attachment11 + $attachment12;

     $pistol = $_POST["pistol"];
     $uniform = $_POST["uniform"];
     $vest = $_POST["vest"];
     $hat = $_POST['hat'];
     $glasses = $_POST["glasses"];
     $backpack = $_POST["backpack"];
     $misc = $_POST["misc"];
     $sale = $_POST["sale"];

     if($sale == "yes") {
       $rifles = $rifles/2;
       $totalAttachments = $totalAttachments/2;
       $pistol = $pistol/2;
     }

     $total = $rifles + $totalAttachments + $uniform + $vest +$pistol + $backpack + $hat + $glasses +$misc;
   }
   ?>

 </head>

 <body>
  <center>
   <div class="container">
    <h2>Died and need a to fill in a compensation request? Use this!</h2>
    <div class="items">
      <form method="POST" action="#">

        <p><b>Rifles</b></p>
        <select name="rifles">
          <option value="0">None</option>
          <option value="40000">SDAR</option>
          <option value="50000">TRG-20</option>
          <option value="60000">TRG-21</option>
          <option value="80000">Vermin SMG</option>
          <option value="100000">MK20</option>
          <option value="150000">MX 6.5</option>
          <option value="250000">MX 6.5 (black)</option>
          <option value="160000">MXC 6.5</option>
          <option value="260000">MXC (Black)</option>
          <option value="170000">MX SW</option>
          <option value="270000">MX SW (Black)</option>
          <option value="210000">MXM</option>
          <option value="310000">MXM (Black)</option>
          <option value="130000">Katiba</option>
          <option value="137000">Katiba Carbine</option>
          <option value="160000">Rahim</option>
          <option value="160000">MK14</option>
          <option value="230000">MK18 ABR</option>
          <option value="460000">MK-1</option>
        </select>

        <p><b>Attachments</b></p>
        <input type="checkbox" name="attachment1" id="attachment1" value="50000">.45 silencer<br>
        <input type="checkbox" name="attachment2" id="attachment2" value="100000">5.56mm silencer<br>
        <input type="checkbox" name="attachment3" id="attachment3" value="150000">6.5mm silencer<br>
        <input type="checkbox" name="attachment4" id="attachment4" value="155000">9mm silencer<br>
        <input type="checkbox" name="attachment5" id="attachment5" value="160000">7.62mm silencer<br>
        <input type="checkbox" name="attachment6" id="attachment6" value="5000">ACO/ACO SMG/MK17 HOLO<br>
        <input type="checkbox" name="attachment7" id="attachment7" value="7000">RCO/ARCO<br>
        <input type="checkbox" name="attachment8" id="attachment8" value="10000">MRCO<br>
        <input type="checkbox" name="attachment9" id="attachment9" value="40000">DMS<br>
        <input type="checkbox" name="attachment10" id="attachment10" value="2000">Flashlight<br>
        <input type="checkbox" name="attachment11" id="attachment11" value="5000">IR laser pointer<br>
        <input type="checkbox" name="attachment12" id="attachment12" value="15000">BIPOD<br>

        <p><b>Pistol</b></p>
        <select name="pistol">
          <option value="0">None</option>
          <option value="35000">4-Five .45 ACP</option>
          <option value="30000">Zubr .45 ACP</option>
          <option value="28000">ACP-C2 .45 ACP</option>
          <option value="25000">Rook-40 9mm</option>
        </select>

        <p><b>Uniform</b></p>
        <select name="uniform">
          <option value="0">None</option>
          <option value="200000">Full Ghillie Suit</option>
          <option value="150000">Ghillie Suit</option>
          <option value="15348">Guerilla Leader</option>
          <option value="11500">Combat Fatigues</option>
          <option value="10000">Combat Fatigues AAF</option>
          <option value="7500">Worn Combat Fatigues</option>
          <option value="5000">Standard Guerilla outfits</option>
          <option value="5000">Helipilot Coveralls</option>
          <option value="5000">Pilot Coveralls AAF</option>
          <option value="20000">News outfit</option>
          <option value="2500">Mechanic Coveralls</option>
          <option value="1500">Hunters Look</option>
          <option value="1200">Outback Ranger</option>
          <option value="1100">Surfer</option>
          <option value="1000">Niko</option>
          <option value="1000">Protagonist</option>
          <option value="1000">Resistance Leader</option>
          <option value="1000">Helipilot coveralls variant</option>
          <option value="1000">Pilot coveralls variant</option>
          <option value="735">Brownjacket & Pants</option>
          <option value="650">Greenstriped Shirt & Pants</option>
          <option value="250">Poloshirt</option>
          <option value="250">Ragged clothes (Blueshirt)</option>
          <option value="250">Custom RPUK clothing</option>
          <option value="100">Poor</option>
        </select>

        <p><b>Vest</b></p>
        <select name="vest">
          <option value="0">None</option>
          <option value="12500">Tactical Vest Khaki</option>
          <option value="7500">LBV Harness</option>
          <option value="7500">ELBV Harness Variant</option>
          <option value="7500">Slash Bandolier (Not including Coyote)</option>
          <option value="7500">CRTG Platecarrier Rig</option>
          <option value="4500">Slash Bandolier Coyote (light brown)</option>
          <option value="20000">News Vest</option>
        </select>

        <p><b>Hats</b></p>
        <select name="hat">
          <option value="0">None</option>
          <option value="2500">Protector Helmet</option>
          <option value="1200">Military Urban</option>
          <option value="850">Shemag</option>
          <option value="850">Boonie Hat</option>
          <option value="850">Combat Helmet Camo</option>
          <option value="850">Rangemaster Cap</option>
          <option value="850">Helicrew Helmet NATO</option>
          <option value="850">Military Cap RUSSIA</option>
          <option value="850">Military Cap HEX</option>
          <option value="850">Crewhelmet NATO</option>
          <option value="650">Bandana</option>
          <option value="500">Beanie</option>
        </select>

        <p><b>Glasses</b></p>
        <select name="glasses">
          <option value="0">None</option>
          <option value="75000">Balaclava</option>
          <option value="75000">Shemag (Glasses)</option>
          <option value="55">Combat Goggles</option>
        </select>


        <p><b>Backpacks</b></p>
        <select name="backpacks">
          <option value="0">None</option>
          <option value="5000">CarryAll backpack</option>
          <option value="4500">Kitbag</option>
          <option value="4500">Bergen</option>
          <option value="3500">Tactical Pack (dark green)</option>
          <option value="3000">Field Pack</option>
        </select>

        <br><p><b>Misc</b></p>
        <input type="number" name="misc">

        <br><br><p><b>50% sale?</p><b>
          <input type="radio" value="yes" name="sale">Yes</input>
          <input type="radio" value="no" name="sale" checked="checked">No</input>

        <br><br>
        <p>You lost: <b> &pound<?php echo $total; ?> </b> </p>
        <br>
        <input type="submit" value="Calculate!">
      </div>
     </div>
    </center>
   </body>
  </html>
