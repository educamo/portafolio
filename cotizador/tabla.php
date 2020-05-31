<?php
    /*-------------------------
    Autor: Eduardo Carrasco
    Web: eduardocarrasco.photography
    Mail: eduardocarrascofotografia@gmail.com
    ---------------------------*/

    /* Connect To Database*/
    require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
    require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos

    $sql = "SELECT id_cotizacion, 
    numero_cotizacion, 
    atencion, 
    email,
    fecha_cotizacion,
    activo 
    FROM cotizaciones_demo";

    $result = mysqli_query($con, $sql);
   // $cotizaciones = mysqli_fetch_array($sql_cotizacion);
    
    ?>
    <div>
        <table class="table table-hover table-condensed table-bordered" id="iddatatable">
            <thead style="background-color: grey; color: white; font-style: bold;">
                <tr>
                    <td>Nro Cotizacion</td>
                    <td>Cliente</td>
                    <td>Correo</td>
                    <td>fecha de la cotizacion</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($cotizaciones = mysqli_fetch_row($result)) {
                 ?>
                 <tr style="<?php if ($cotizaciones[5]==0) echo 'color: red;'  ?>">  
                                   
                    <td><?php echo $cotizaciones[1] ?></td>
                    <td><?php echo $cotizaciones[2] ?></td>
                    <td><?php echo $cotizaciones[3] ?></td>
                    <td><?php echo $cotizaciones[4] ?></td>  
                             
                    <td style="text-align: center;">
                        <span class="btn btn-success btn-sm" data-toggle="modal" data-target="#mostrarCotizacion" onclick="mostrar('<?php echo $cotizaciones[0] ?>')"><span class="fas fa-search"></span></span>
                        <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editarModal" onclick="frmactualizar('<?php echo $cotizaciones[0] ?>')">
                            <span class="far fa-edit"></span>
                        </span>
                        <span class="btn btn-danger btn-sm" onclick="eliminardatos('<?php echo $cotizaciones[0] ?>')">
                            <span class="far fa-trash-alt"></span>
                        </span>
                    </td>
                </tr>
                <?php 
            } 
            ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#iddatatable').DataTable();
    } );
</script>

<?php 
//mysqli_free_result($sql_cotizacion);

//mysqli_close($con);
?>