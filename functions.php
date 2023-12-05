
<?php

function format_num($num){
    $num = ceil($num);

    if ($num >= 1000){
        $num = number_format($num, 0, '', ' ');
    }
    return $num ." " ."₽";

};

?>