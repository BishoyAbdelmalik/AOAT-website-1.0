<?php
function update($db, $new_info){
    require 'mysql.php';
    $query='DELETE FROM `'.$db.'` WHERE id='.$new_info[id].';';
    mysqli_query($connection,$query);
    $query='INSERT INTO `'.$db.'` (';
    $keys = array_keys($new_info);
    $last = end($keys);
    foreach ($new_info as $key => $value){
        if($key==$last){$query.='`'.$key.'`';}
        else{$query.='`'.$key.'`, ';}
    }
    $query.=") ";
    $query.='VALUES (';
    foreach ($new_info as $key => $value){
        if($key==$last){$query.="'".$value."'";}
        else{$query.="'".$value."', ";}
    }
    $query.=');';
    mysqli_query($connection,$query); 
    mysqli_close($connection); 

}
function insert($db, $info){
    require 'mysql.php';
    $query='INSERT INTO `'.$db.'` (';
    $keys = array_keys($info);
    $last = end($keys);
    foreach ($info as $key => $value){
        if($key==$last){$query.='`'.$key.'`';}
        else{$query.='`'.$key.'`, ';}
    }
    $query.=") ";
    $query.='VALUES (';
    foreach ($info as $key => $value){
        if($key==$last){$query.="'".$value."'";}
        else{$query.="'".$value."', ";}
    }
    $query.=');';
    mysqli_query($connection,$query); 
    mysqli_close($connection); 

}
function delete_row($db, $id){
    require 'mysql.php';
    $query='DELETE FROM `'.$db.'` WHERE `id` = '.$id.';';
    mysqli_query($connection,$query); 
    mysqli_close($connection); 

}
?>
