<?php
	include_once('../config/config.php');
	include_once('../classes/sales.php');
	$sales = new Sales;
	if(isset($_POST['action'])){
		switch ($_POST['action']){
			case 'save_sale':
				$sale_date = trim($_POST['sale-date'].' '.date('H:i:s'));
				$sale_serie = trim($_POST['sale-serie']); 
				$sale_number = trim($_POST['sale-number']); 
				$entity_id = trim($_POST['entity-id']); 
				$entity_rfc = trim($_POST['entity-rfc']);
				$entity_social_name = trim($_POST['entity-social-name']); 
				$entity_address = trim($_POST['entity-address']);
				if($entity_id == 0 AND strlen($entity_social_name) > 0){
					$entity_id = $sales->save_entity($entity_rfc, $entity_social_name, $entity_address);
				}
				$sale_id = $sales->save_sale($sale_date, $sale_serie, $sale_number, $entity_id);
				if($sale_id > 0){
					$status = 1;
					$product_id = explode(',', $_POST['product_id']);
					$product_description = explode(',', $_POST['product_description']);
					$product_unit = explode(',', $_POST['product_unit']);
					$product_price = explode(',', $_POST['product_price']);
					$product_amount = explode(',', $_POST['product_amount']);
					$total = 0;
					for($i=0; $i<count($product_id); $i++){
						$d_id = $product_id[$i];
						$d_description = $product_description[$i];
						$d_unit = $product_unit[$i];
						$d_price = $product_price[$i]; 
						$d_amount = $product_amount[$i];
						if($d_id == 0){
							$d_id = $sales->save_product($d_description, $d_unit, $d_price);
						}
						$detail = $sales->save_detail($sale_id, $d_id, $d_price, $d_amount);
						if($detail > 0){
							$total += ($d_price*$d_amount);
						}
					}
					$sales->update_total($sale_id, $total);
					$row = $sales->build_row($sale_id);
				}else{
					$status = 0;
					$row = '';
				}
				$response = array('status' => $status,
								  'row' => $row,
								  'id' => $sale_id);
				exit(json_encode($response));
			break;
		
			case 'delete_sale':
				$id = trim($_POST['id']);
				$sql = $sales->delete_sale($id);
				echo $sql;
			break;
		}
	}
?>