<?php

// $pass="password";

// $enskripsi=password_hash($pass,PASSWORD_BCRYPT);
// echo $enskripsi.PHP_EOL;
// if (password_verify('password',$enskripsi)){
//     echo "you have access to this page";
// }else{
//     echo "you dont have access";
// }

if (empty($_POST['tes'])){
    echo "yes";
}else{
    echo "no";
}

echo date('M');