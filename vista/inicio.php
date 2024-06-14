<?php
session_start();
if (empty($_SESSION['nombre']) and empty($_SESSION['apellido'])) {
    header('location:login/login.php');
}

?>

<!-- primero se carga el topbar -->
<?php require('./layout/topbar.php'); ?>
<!-- luego se carga el sidebar -->
<?php require('./layout/sidebar.php'); ?>

<!-- inicio del contenido principal -->
<div class="page-content">

    <h4 class="text-center text-secondary">ASISTENCIA DE ESTUDIANTES</h4>

    <?php
    include "../modelo/conexion.php";
    $sql=$conexion->query("SELECT
	asistencia.*, 
	asistencia.id_asistencia, 
	asistencia.id_estudiante, 
	asistencia.entrada, 
	asistencia.salida, 
	estudiante.*, 
	estudiante.id_estudiante, 
	estudiante.nombre as 'nom_estudiante', 
	estudiante.apellido, 
	estudiante.cedula, 
	estudiante.escuela, 
	escuela.*, 
	escuela.id_escuela, 
	escuela.nombre as 'nom_escuela'
    FROM
	asistencia
	INNER JOIN estudiante ON asistencia.id_estudiante = estudiante.id_estudiante
	INNER JOIN escuela ON estudiante.escuela = escuela.id_escuela");
    ?>

    <table class="table table-bordered table-hover col-12" id="example">
        <thead>
            <tr>
            <th scope="col">ID</th>
                <th scope="col">ALUMNO</th>
                <th scope="col">IDENTIFICACION</th>
                <th scope="col">INSTITUCION</th>
                <th scope="col">INGRESO</th>
                <th scope="col">SALIDA</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($datos=$sql->fetch_object()){?>
                <tr>
                    <td><?= $datos->id_asistencia ?></td>
                    <td><?= $datos->nom_estudiante . " " . $datos->apellido ?></td>
                    <td><?= $datos->cedula ?></td>
                    <td><?= $datos->nom_escuela ?></td>
                    <td><?= $datos->entrada ?></td>
                    <td><?= $datos->salida ?></td>
                    <td><i class="fa-solid fa-trash"></i></td>

                </tr>

            <?php }
            
            ?>

            
        </tbody>
    </table>

</div>

<!-- fin del contenido principal -->


<!-- por ultimo se carga el footer -->
<?php require('./layout/footer.php'); ?>