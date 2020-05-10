<?php require_once('conexion.php');?>
<?php
 $query_DatosSearch = sprintf("SELECT * FROM type_event WHERE type LIKE '%search%' ",
                                GetSQLValueString($_POST['search'], "text")); 
 $DatosSearch = mysqli_query($con, $query_DatosSearch) or die(mysqli_error($con));
 $row_DatosSearch = mysqli_fetch_assoc($DatosSearch);
 $totalRows_DatosSearch = mysqli_num_rows($DatosSearch);
?>
<?php 
// if (!isset($_POST['search'])) exit('No se recibio el valor');

// require_once 'conexion.php';

// function search()
// {
//     $mysqli = getConnexion();
//     $search = $mysqli->real_escape_string($_POST['search']);
//     $query = "SELECT id_type FROM type_event WHERE type LIKE '%search%' ";
//     $res = $mysqli->query($query);
//     while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
//         echo $row['id_type'];
//     }
// }

// search();
?>