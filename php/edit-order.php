<?php require('common.php');
if($_POST && !empty($_POST['order_no']) && !empty($_POST['quantity']) && !empty($_POST['shipment_date'])){
	$result = $db->edit_order(
		strip_tags($_POST['idx']),
		strip_tags($_POST['style_no']),
		strip_tags($_POST['order_no']),
		strip_tags($_POST['quantity']),
		strip_tags($_POST['shipment_date']),
		strip_tags($_POST['status']),
		strip_tags($_POST['remarks']));
		//strip_tags($_POST['buyer_id']),
}?>