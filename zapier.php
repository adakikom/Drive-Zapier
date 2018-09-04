<?php
$fitxategia = 'log_zapier.txt';



echo "ZAPIER TEST";
echo "<br /><br />";
echo "EMAIL: ".$_REQUEST['EMAIL'];
echo "<br /><br />";
echo "IZENA: ".$_REQUEST['IZENA'];

file_put_contents($fitxategia, "EMAIL: ".$_REQUEST['EMAIL']." - IZENA: ".$_REQUEST['IZENA']."\n\n", FILE_APPEND | LOCK_EX);

?>