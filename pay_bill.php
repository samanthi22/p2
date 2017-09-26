<?php

require('helpers.php');
require('Form.php');

use DWA\Form;

$form = new Form($_GET);

// begin form validation
if($form->isSubmitted()) {
	$how_many_people = $form->get('people', '');
	$how_much_tab = $form->get('tab', '');
	$tip = $form->get('tip_amount', '');
	$round = $form->isChosen('round_up');

	#Validate
	$errors = $form->validate([
		 'people' => 'required',
		 'tab' => 'required',
		 'people' => 'numeric',
		 'tab' => 'numeric'
	]);

	# If no errors then proceed
	if(empty($errors)) {
		$amount_with_tip = $how_much_tab * (($tip/100)+1.0);

		if(isset($_GET['round_up'])) {
			$each_pay = $amount_with_tip / $how_many_people;
			$each_pay = round($each_pay);
			} else {
			$each_pay = $amount_with_tip / $how_many_people;
		}

		$double_amount = $each_pay * 2;
	}

}

