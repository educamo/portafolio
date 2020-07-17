<?php 
$prueba = $_GET['dat']; 

require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
    require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos

    $sql = "SELECT
    cot.atencion,
    cot.numero_cotizacion,
    pro.nombre_producto,
    det.cantidad,
    det.precio_venta
    FROM cotizaciones_demo AS cot
    RIGHT JOIN detalle_cotizacion_demo AS det ON cot.id_cotizacion = det.numero_cotizacion
    join productos_demo as pro on det.id_producto = pro.id_producto
    where cot.id_cotizacion = '$prueba'";

    $result = mysqli_query($con, $sql);
    $total = 0;
    ?>


    <div>
    	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
    		<thead style="background-color: grey; color: white; font-style: bold;">
    			<tr>
    				<td>Producto</td>
    				<td>Cantidad</td>
    				<td>Precio Unitario $</td>
    				<td>Total $</td>
    			</tr>
    		</thead>    		
    		<tbody>
    			<?php
    			while ($bus_cotizaciones = mysqli_fetch_row($result)) {
    				?>
    				<tr>  

    					<td><?php echo $bus_cotizaciones[2] ?></td>
    					<td><?php echo $bus_cotizaciones[3] ?></td>
    					<td><?php echo $bus_cotizaciones[4] ?></td>
    					<td><?php echo $subtotal = $bus_cotizaciones[3]*$bus_cotizaciones[4] ?></td>  
    				</tr>
    				<?php 
    				$total = $total + $subtotal;
    			} 
    			?>
    			<tfoot style="background-color: #a7bbc2; color: #17282e; font-weight: bold;"> 
    				<td></td>
    				<td></td>   			
    				<td>Total $</td>
    				<td><?php echo $total ?></td>
    			</tfoot>
    		</tbody>
    	</table>
    </div>