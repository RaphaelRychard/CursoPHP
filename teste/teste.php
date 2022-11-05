<?php

    
    function somar () {
        $p = func_get_args();
        $tot = func_num_args();

        for ($c=0 ; $c <= $tot; $c++) {
            
            echo $p[$c]. " ";
            $somado += $p[$c] ;   
        }
        echo $somado;

        somar (2, 3, 4, 5);

        somar (2, 3, 4, 5);

        somar (2, 3, 4, 5);

    }
        

    
?>