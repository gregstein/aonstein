<?php
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
$key=base64_decode($_GET['captcha']);

            $alpha1 = array( "A", "a", "B", "b", "Z", "z" );
            $alpha2 = array( "C", "c", "D", "d", "E", "e" );
            $alpha3 = array( "F", "f", "Y", "G", "H", "h" );
            $alpha4 = array( "i", "I", "J", "j", "k", "K" );
            $alpha5 = array( "l", "L", "S", "M", "U", "N" );
            $alpha6 = array( "o", "O", "p", "P", "q", "Q" );
            $alpha7 = array( "r", "R", "s", "m", "t", "T" );
            $alpha8 = array( "u", "n", "v", "V", "w", "W" );
            $alpha9 = array( "x", "X", "g", "y", "0", "1" );
            $alpha10 = array( "2", "5" );
            $alpha11 = array( "3", "7" );
            $alpha12 = array( "9", "4" );
            $alpha13 = array( "6", "8" );
            $alpha14 = array( "-", "_" );
            //8 char $key
            for ($i = "0"; $i < 19; $i++)
            {
                if (in_array($key[$i],$alpha1) == true)
                    $serial .= "T";
                if (in_array($key[$i],$alpha2) == true)
                    $serial .= "4";
                if (in_array($key[$i],$alpha3) == true)
                    $serial .= "F";
                if (in_array($key[$i],$alpha4) == true)
                    $serial .= "7";
                if (in_array($key[$i],$alpha5) == true)
                    $serial .= "U";
                if (in_array($key[$i],$alpha6) == true)
                    $serial .= "3";
                if (in_array($key[$i],$alpha7) == true)
                    $serial .= "B";
                if (in_array($key[$i],$alpha8) == true)
                    $serial .= "9";
                if (in_array($key[$i],$alpha9) == true)
                    $serial .= "C";
                if (in_array($key[$i],$alpha10) == true)
                    $serial .= "Y";
                if (in_array($key[$i],$alpha11) == true)
                    $serial .= "X";
                if (in_array($key[$i],$alpha12) == true)
                    $serial .= "R";
                if (in_array($key[$i],$alpha13) == true)
                    $serial .= "S";
                if (in_array($key[$i],$alpha14) == true)
                    $serial .= "-";
            }
            //echo $serial;
          
   
?>
<html>
<head>
<?php
echo "<title>AgeOfNotes OpenKey - AoE2Tools Cloud Verification</title>\n"; 
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n"; 
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/default.css\" />\n"; 
echo "<meta http-equiv=\"cleartype\" content=\"on\" />\n"; 
echo "<meta name=\"MobileOptimized\" content=\"width\" />\n"; 
echo "<meta name=viewport content=\"width=device-width, initial-scale=1\">\n";
echo "<meta name=\"HandheldFriendly\" content=\"true\" />\n";
?>
<script type="text/javascript" src="jquery-1.4.1.js"></script>
<style type="text/css">
#proceed {
  display: none;
}
.xx{
    font-family: "Fredoka One script=all rev=2", "Adobe Blank";
    font-weight: 14;
    font-style: normal;
    font-size: 5px;
}

@font-face {
  font-family: 'Fredoka One script=all rev=2';
  font-style: normal;
  font-weight: 200;
  src:   url(https://fonts.gstatic.com/l/font?kit=k3kUo8kEI-tA1RRcTZGmTmHEG9St0C3d1om8Mz6slqBKRtvjzUJ6xAJaGHLTbv9tHVEq-h1ylCtXSeDBENILlzkfzUJOiM594gqLtnzccnJfhpQc-ZP_ud1_NbotCXKqzPs_SH7xk6cjQyW2echUD_r7vTfZ5gJBot49AddTHjLYLXysgiMDRZKV&skey=fac42792a60c2aba&v=v5) format('woff2');
}

canvas{
    border: 1px black solid;
}
#textCanvas{
    display: block;
}
</style>
<script type="text/javascript">


    $(window).load(function(){
      
var i = 4;
var time = $("#time")
var timer = setInterval(function() {
  time.html(i);
  if (i == 0) {
    $("#proceed").show();
    $("#value1").show();
    document.getElementById("counter").innerHTML = "<b>Activation Ready!</b>";
    var input = document.getElementById("myText");
    input.focus();
    input.select();
    clearInterval(timer);
  }

  i--;
}, 1000);

    });
</script>


</head>
<body id="maze">
<?php
echo "<div id=\"container\">\n"; 
echo "<div id=\"header\">\n"; 
echo "<a href=\"http://ageofnotes.com/openkey\" ><h1 style=\"color:black;\">AoE2Tools Cloud Verification</h1></a>\n"; 
echo "</div>\n"; 
echo "<div id=\"content\">\n"; 
echo "<p><a href=\"http://ageofnotes.com/openkey\">AgeOfNotes OpenKey</a> is a free verification key generator tool for AoE2Tools. It generates unique activation key per each user to filter out spam and prevent bandwidth abuse - This tool plays the role of captcha.\n"; 
echo "\n"; 
echo "</p>\n";
echo "<br>";

echo "<h2>Where's My Key?</h1>\n"; 

echo "<p>A \"Generate Key\" button will be available in 10 seconds to retrieve your free activation key. Paste the key into the validation field within AoE2Tools then you are good to go.</p>";
echo "<br>";
echo "<div class=\"ads\">";
echo "IMAGE";
echo "</div>";
echo "<br>";
echo "<p>The generated key should only verify whether or not the user is bot.</p>\n";

echo "\n"; 
echo "<div class=\"ads\">ADS</div>";
?>

<?php

echo "<br><div align=\"center\" style=\"text-align:center\">";
print "<p id=\"counter\">Please Wait <span id=\"time\">1</span> before you can proceed</p>\n";
print "<button id=\"proceed\" onclick=\"myFunction()\">Generate Key</button>\n";
print "<div id=\"hiddenfieldsDiv\" style=\"Display:none;\"><input type=\"text\" id=\"myText\" value=\"\" onclick=\"this.focus();this.select()\" readonly>&nbsp;&nbsp;&nbsp;<img src=\"copythis.png\">";
echo "<canvas class=\"xx\" id='textCanvas' height=30 width=233>$serial</canvas>";
echo "<br><a download=\"AoE2Tools-Key.txt\"
href=\"data:text/plain;base64,";
?>
<?php echo base64_encode($serial); ?>">
<?php
echo "<img id='image'></a>&nbsp;&nbsp;&nbsp;<img src=\"txtdownload.png\"></div>";
?>

<script type="text/javascript">

    window.onload=function(){
      
var tCtx = document.getElementById('textCanvas').getContext('2d'),
    imageElem = document.getElementById('image');
var xkey = "<?php echo $serial; ?>";


document.getElementById('maze').addEventListener('mousemove', function (){
    // Set it before getting the size
    tCtx.font = '250 20px "Fredoka One script=all rev=2", "Adobe Blank"';
    // this will reset all our context's properties
    tCtx.canvas.width = tCtx.measureText(xkey).width;
    // so we need to set it again
    tCtx.font = '250 20px "Fredoka One script=all rev=2", "Adobe Blank"';
    // set the color only now
    tCtx.fillStyle = '#A0A';
    tCtx.fillText(xkey, 0, 30);
    imageElem.src = tCtx.canvas.toDataURL();
}, false);

    }

</script>
</div>
<?php
echo "<br><div class=\"ads\">ADS</div><br>";
echo "<div align=center>Your Free Activation Key is Generated by Ageofnotes.com/Openkey</div>\n";
echo "<br>";
echo "<b>Warning:</b> Use of this service for spam or other illegal activity is <b> STRICTLY PROHIBITED</b>!\n"; 
echo "<div id=\"bookmarklets\">\n"; 
echo "\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "<div align=center id=\"footer\">\n"; 
echo "<br>\n"; 
echo "<a onclick=\"window.open('','docu','toolbar=0,location=0,directories=0,status=yes,menubar=0,scrollbars=yes,resizable=yes,width=365,height=350,titlebar=yes')\" target=\"docu\" href=\"http://ageofnotes.com/openkey/disclaimer.html\">Disclaimer</a> | \n"; 
echo "<a onclick=\"window.open('','docu','toolbar=0,location=0,directories=0,status=yes,menubar=0,scrollbars=yes,resizable=yes,width=365,height=350,titlebar=yes')\" target=\"docu\" href=\"http://ageofnotes.com/openkey/privacy.html\">Privacy</a> | \n"; 
echo "<a onclick=\"window.open('','docu','toolbar=0,location=0,directories=0,status=yes,menubar=0,scrollbars=yes,resizable=yes,width=365,height=350,titlebar=yes')\" target=\"docu\" href=\"http://ageofnotes.com/openkey/contact.html\">Contact</a> |\n"; 
echo "\n"; 
echo "<p align=center>&copy; 2012 AgeofNotes OpenKey\n"; 
echo "</div>\n"; 
echo "</div>\n"; 

?>

</body>
  <script type="text/javascript">
function myFunction() {
  document.getElementById("myText").value = "<?php echo $serial; ?>";
  document.getElementById('hiddenfieldsDiv').style.display= 'block' ;
document.getElementById('textCanvas').style.display= 'none' ;
}


  </script>
</html>