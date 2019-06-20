$(function(){
	$.ui.autocomplete.prototype._renderItem = function (ul, item){
        item.label = item.label.replace(new RegExp('(?![^&;]+;)(?!<[^<>]*)('+ $.ui.autocomplete.escapeRegex(this.term)+')(?![^<>]*>)(?![^&;]+;)', 'gi'), '<strong style="color:#0174DF;">$1</strong>');
        return $('<li></li>')
                .data('item.autocomplete', item)
                .append('<a>'+item.label+'</a>')
                .appendTo(ul);
    };

	$('#new-sale').on('click', function(){
		$('#modal-sale').modal({
			show: true,
			backdrop: 'static'
		});	

		$('#modal-sale').on('shown.bs.modal', function (){
			$('[name=sale-number]').focus();
		});
	});

	$('#form-detail-sale').on('submit', function(){
		var id = $('[name=product-id]').val();
		var description = $('[name=product-description]').val(); 
		var unit = $('[name=product-unit]').val(); 
		var price = $('[name=product-price]').val();
		var amount = $('[name=product-amount]').val();
		var subtotal = $('[name=product-subtotal]').val();
		var html = '<tr><td><input type="text" class="hidden product-id" value="'+id+'"><input type="text" class="form-control input-sm product-description" value="'+description+'" readonly></td><td><input type="text" class="form-control input-sm product-unit" value="'+unit+'" readonly></td><td><input type="number" step="any" class="form-control input-sm product-price" value="'+price+'" readonly></td><td><input type="number" step="any" class="form-control input-sm product-amount" value="'+amount+'" readonly></td><td><input type="number" step="any" class="form-control input-sm product-subtotal" value="'+subtotal+'" readonly></td><td><button class="btn btn-default btn-sm" onClick="remove_detail(this);"><i class="glyphicon glyphicon-minus-sign"></i> Eliminar</button></td></tr>';
		$('#table-detail tbody').prepend(html);
		$('[name=product-id]').val(0);
		$('[name=product-description]').val('').focus(); 
		$('[name=product-unit]').val(''); 
		$('[name=product-price]').val('0.00');
		$('[name=product-amount]').val('1.00');
		$('[name=product-subtotal]').val('0.00');
		update_total();
		return false;
		/*
		<tr>
        	<td>
        		<input type="text" class="hidden" class="product-id" value="'+id+'">
        		<input type="text" class="form-control input-sm" class="product-description" value="'+description+'" readonly>
        	</td>
        	<td>
        		<input type="text" class="form-control input-sm" class="product-unit" value="'+unit+'" readonly>
        	</td>
        	<td>
        		<input type="text" class="form-control input-sm" class="product-price" value="'+price+'" readonly>
        	</td>
        	<td>
        		<input type="text" class="form-control input-sm" class="product-amount" value="'+amount+'" readonly>
        	</td>
        	<td>
        		<input type="text" class="form-control input-sm" class="product-subtotal" value="'+subtotal'" readonly>
        	</td>
        	<td>
        		<button class="btn btn-default btn-sm">
        			<i class="glyphicon glyphicon-minus-sign"></i> Eliminar
        		</button>
        	</td>
        </tr>
        */
	});

	$('[name=product-description]').autocomplete({
    	source: base_url+'ajax/autocomplete.php?action=product_description',
        select: function(event, ui){
            var id = ui.item.id;
			var unit = ui.item.unit; 
			var price = ui.item.price;
			$('[name=product-id]').val(id);
			$('[name=product-unit]').val(unit); 
			$('[name=product-price]').val(price);
			$('[name=product-amount]').val('1.00').select();
			calculate_detail();
		}
    });

    $('[name=entity-social-name]').autocomplete({
    	source: base_url+'ajax/autocomplete.php?action=entity_name',
        select: function(event, ui){
            var id = ui.item.id;
			var rfc = ui.item.rfc; 
			var address = ui.item.address;
			$('[name=entity-id]').val(id);
			$('[name=entity-rfc]').val(rfc); 
			$('[name=entity-address]').val(address);
		}
    });

    $('[name=entity-rfc]').autocomplete({
    	source: base_url+'ajax/autocomplete.php?action=entity_rfc',
        select: function(event, ui){
            var id = ui.item.id;
			var social_name = ui.item.social_name; 
			var address = ui.item.address;
			$('[name=entity-id]').val(id);
			$('[name=entity-social-name]').val(social_name); 
			$('[name=entity-address]').val(address);
		}
    });

});

function update_total(){
	var array = document.getElementsByClassName('product-subtotal');
	var total = 0;
	for(var i=0; i<array.length; i++){
		var value = parseFloat(array[i].value);
		total += value;
	}
	total = total.toFixed(2);
	$('[name=product-total]').val(total);
}

function remove_detail(e){
	e.parentNode.parentNode.remove();
	update_total();
}

function calculate_detail(){
	var price = parseFloat($('[name=product-price]').val());
	var amount = parseFloat($('[name=product-amount]').val());
	var result = price*amount;
	result = result.toFixed(2);
	$('[name=product-subtotal]').val(result);
}

function save_sale(){
	var question = confirm('¿Desea guardar esta venta?');
	if(question == true){
		var form = $('#sale-data').serialize();
		var product_id = new Array();
		$("input[class*='product-id']").each(function(){product_id.push($(this).val());});
		var product_description = new Array();
		$("input[class*='product-description']").each(function(){product_description.push($(this).val());});
		var product_unit = new Array();
		$("input[class*='product-unit']").each(function(){product_unit.push($(this).val());});
		var product_price = new Array();
		$("input[class*='product-price']").each(function(){product_price.push($(this).val());});
		var product_amount = new Array();
		$("input[class*='product-amount']").each(function(){product_amount.push($(this).val());});
		var data = 'action=save_sale&'+form+'&product_id='+product_id+'&product_description='+product_description+'&product_unit='+product_unit+'&product_price='+product_price+'&product_amount='+product_amount;
		$.ajax({
			type: 'POST',
			url: base_url+'ajax/sales.php',
			data: data,
			dataType: 'JSON',
			beforeSend: function(){
				$('#btn-save-sale').attr('disabled', 'disabled');
			},
			success: function(response){
				$('#btn-save-sale').removeAttr('disabled');
				var status = response.status; 
				var row = response.row;
				var id = response.id;
				if(status > 0){
					$('#table-sale tbody').prepend(row);
					$('#modal-sale').modal('hide');
					print_sale(id);
				}else{
					alert('Error al guardar la venta.');
					return false;
				}
			}
		});
	}else{
		return false;
	}
}

function delete_sale(id){
	var question = confirm('¿Desea eliminar esta venta?');
	if(question == true){
		$.ajax({
			type: 'POST',
			url: base_url+'ajax/sales.php',
			data: 'action=delete_sale&id='+id,
			success: function(response){
				if(response > 0){
					$('#reg-'+id).remove();
				}else{
					alert('Error al eliminar esta venta.');
				}
			}
		});
	}else{
		return false;
	}
}

function print_sale(id){
	window.open(base_url+'ajax/print.php?action=print_sale&id='+id, 'Impresion de venta', 'width=600, height=600');
}