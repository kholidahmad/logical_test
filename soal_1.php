<?php

    $i=0;
    $aplikasi = array('gtAkademik','gtFinansi','gtPerizinan','eCampuz','eOviz');
    $p = count($aplikasi);

    while($i<=$p-1){
        echo $aplikasi[$i]."<br>";
        $i++;
    }

?>