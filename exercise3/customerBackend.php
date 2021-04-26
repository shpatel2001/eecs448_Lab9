<?php
echo "<link href='style.css' rel='stylesheet' type='text/css'/>";
echo "<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>";
echo "<link href='https://fonts.googleapis.com/css?family=Quicksand&display=swap' rel='stylesheet'>";


echo "<h1> Shayen's Candy Emporium</h1>";

$Galaxy = $_POST["galaxy"];
$Mini = $_POST["mini"];
$Twix = $_POST["twix"];
$Shipping = $_POST["shipping"];
$User = $_POST["user"];
$Pass = $_POST["pass"];

$Galaxy_Total = 0;
$Mini_Total = 0;
$Twix_Total = 0;
$Total_Cost = 0;

$Galaxy_Total = $Galaxy*1.50;
$Mini_Total = $Mini*3.75;
$Twix_Total = $Twix*1.59;
$Total_Cost = $Galaxy_Total+$Mini_Total+$Twix_Total+$Shipping;

if($Shipping == 0)
{
  $Shipping_Type = "Free 7 Day";
}
else if($Shipping == 50)
{
  $Shipping_Type = "Overnight";
}
else
{
  $Shipping_Type = "3 Day";
}



echo "<p class='welcome'>Thank You For Shopping With Us!</p>";
echo "<p class='info'> Username: " . $User . "</p>";
echo "<p class='info'> Password: " . $Pass . "</p>";



echo "<table class='receipt'>";

echo "<col width='200'>";
echo "<col width='200'>";
echo "<col width='200'>";
echo "<col width='200'>";

echo "<tr class='receipt'>";
echo "<th class='receipt text'></td>";
echo "<th class='receipt text'>Quantity</td>";
echo "<th class='receipt text'>Cost Per Item</td>";
echo "<th class='receipt text'>Sub Total</td></tr>";


echo "<tr class='receipt'>";
echo "<td class='receipt text'>Galaxy</td>";
echo "<td class='receipt number'>" . $Galaxy . "</td>";
echo "<td class='receipt number'>$1.50</td>";
echo "<td class='receipt number'>$" . $Galaxy_Total . "</td></tr>";


echo "<tr class='receipt'>";
echo "<td class='receipt text'>Mini M&M's</td>";
echo "<td class='receipt number'>" . $Mini . "</td>";
echo "<td class='receipt number'>$3.75</td>";
echo "<td class='receipt number'>$" . $Mini_Total . "</td></tr>";


echo "<tr class='receipt'>";
echo "<td class='receipt text'>Twix</td>";
echo "<td class='receipt number'>" . $Twix . "</td>";
echo "<td class='receipt number'>$1.59</td>";
echo "<td class='receipt number'>$" . $Twix_Total . "</td></tr>";


echo "<tr class='receipt'>";
echo "<td class='receipt text'>Shipping</td>";
echo "<td colspan=2 class='receipt text'>" . $Shipping_Type . "</td>";
echo "<td class='receipt number'>$" . $Shipping . "</td></tr>";

/
echo "<tr class='receipt'>";
echo "<td colspan=3 class='receipt text'>Total Cost</td>";
echo "<td class='receipt total'>$" . $Total_Cost . "</td></tr></table>";
 ?>
