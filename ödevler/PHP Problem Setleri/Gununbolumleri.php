<?php 

$time=date("H");
if(06<$time && $time<=10){
    $message="Günaydin";
    echo "$message";
}

elseif(10<$time && $time<=17){
    $message="İyi Gunler";
    echo "$message";
}

elseif(17<$time && $time<=20){
    $message="İyi Aksamlar";
    echo "$message";
}

elseif(20<$time && $time<=00){
    $message="İyi Geceler";
    echo "$message";
}

elseif(00<$time && $time<=06){
    $message="Esenlikler Dilerim";
    echo "$message";
}
else {
    echo "Yanlış saat dilimi girdiniz!!!";
}
?>