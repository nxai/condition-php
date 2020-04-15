<?php

$status = 2;
if($status ==1){
    echo 'ລໍຖ້າການຊຳລະເງິນ';
}elseif($status == 2){
    echo 'ລໍຖ້າການກວດສອບການຊຳລະເງິນ';
}elseif($status == 3){
    echo 'ລໍຖ້າການແຈ້ງເລກ EMS';
}elseif($status== 4){
    echo 'ກວດສອບເລກ EMS';
}else {
    echo 'ຍົກເລິກ order';
}

?>