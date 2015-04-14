<html>  
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url("application/assets/styles.css") ?>" />
        <title>
            Inquilinos - Mantenimiento
        </title>
    </head>
    
<div id="inquilinos"> 
    
<h1>Listado de Inquilinos</h1>
<div class="col-md-6">  
    <table class="table table-hover table-bordered table-striped">
        <thead>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Fecha Ingreso</th>
        </thead>
        <?php
            foreach($data as $inquilino)
            {
                echo '<tr><td>' . $inquilino->id . '</td>';
                echo '<td>' . $inquilino->first_name . '</td>';
                echo '<td>' . $inquilino->last_name . '</td>';
                echo '<td>' . anchor('inquilinos/edit/'. $inquilino->id, $inquilino->personal_id) . '</td>';
                echo '<td>' . $inquilino->tel . '</td>';
                echo '<td>' . $inquilino->cel . '</td>';
                echo '<td>' . $inquilino->created_date . '</td>';
                echo '</tr>';
            }

        ?>
    </table>
  </div> 
</div>
</html>