<?php

include_once './DAOconection/Conection.php';

/*configuration*/
$cn    = new Conection();
$sql   = "SELECT * FROM  login ";
$datos = mysqli_query($cn->coneccion(), $sql);

//loop trought data base
if($datos){
    $lstLogin = array();
    while($rs = mysqli_fetch_array($datos)) {        
        $objLogin = new stdClass();
        $objLogin->usuario = $rs["usuario"];
        $objLogin->pass    = $rs["pass"];
        $lstLogin[] = $objLogin;
     }
    echo json_encode($lstLogin);
}else {
     echo 'hubo un error';
}