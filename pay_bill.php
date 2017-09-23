<?php

require('helpers.php');

$how_many_people = $_GET['people'];
$how_much_tab = $_GET['tab'];
$tip = $_GET['tip_amount'];
$round = $_GET['round_up'];

// Everyone owes _ and if you are paying for your girlfriend you owe _.

$amount_with_tip = $how_much_tab * (($tip/100)+1.0);

if(isset($_GET['round_up'])) {
$each_pay = $amount_with_tip / $how_many_people;
$each_pay = round($each_pay);
} else {
$each_pay = $amount_with_tip / $how_many_people;
}

$double_amount = $each_pay * 2;

//display

