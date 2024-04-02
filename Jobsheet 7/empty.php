<?php
    $myArray = array();
    if(empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong <br>";
    }
    else {
        echo "Array terdefinisi dan tidak kosong. <br>";
    }

    if (empty($nonExistentVar)) {
        echo "Variabel tidak terdifinisi atau kosong";
    }
    else {
        echo "Variabel terdifinisi dan tidak kosong";
    }
?>