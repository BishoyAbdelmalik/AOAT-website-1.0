<?php
function update($db, $new_info, $id){
    require 'mysql.php';
    $query='DELETE FROM `'.$db.'` WHERE id='.$id.';';
    mysqli_query($connection,$query);
    $query='INSERT INTO `'.$db.'` (`id`, ';
    foreach ($new_info as $key => $value){
        $query.='`'.$key.'`, ';
    }
    $query.=") "
    $query.='VALUES ('19', ';
    foreach ($new_info as $key => $value){
        $query.="'".$value."', ";        
    }
    $query.=');';
    mysqli_query($connection,$query);    
}
?>
