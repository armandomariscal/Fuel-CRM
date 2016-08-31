<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<table class="table table-bordered table-condesed table-striped bitacora">
			<caption>
				Bitácora del día <?= $bitacora_fechaMX ?>
			</caption>
			<tr>
				<td>
					ID:
				</td>
				<td>
					Nombre:
				</td>
				<td>
					Fecha:
				</td>
			</tr>
<?php
	
	$where_bitacora_dia = "fecha = '$bitacora_fechaUS''";
	$result_bitacora = mysql_query("");
	mysql_query ("SET NAMES 'utf8'");
	
	$i_bitacora = 0;
	
	while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
    
    		if ($i_bitacora > 0) {
    	  	
    	  	}
    	  	
    	  	$bitacoraResult_id = $row_bitacora['id'];
    	  	$bitacoraResult_nombre = $row_bitacora['nombre'];
    	  	$bitacoraResult_fecha = $row_bitacora['fecha'];

?>
	<tr>
		<td>
			<?= $bitacoraResult_id ?>
		</td>
		<td>
			<?= $bitacoraResult_nombre ?>
		</td>
		<td>
			<?= $bitacoraResult_fecha ?>
		</td>
	</tr>
    	  	
<?

	}
  
	$i++;

?>			
		</table>
	</div>
	<div class="col-md-4"></div>
</div>
