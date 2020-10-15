<?php

    if(!function_exists('select_obesidad')){
        function select_obesidad($obs){
            $datos = array(
                1 => "Desnutricion",
                2 => "Normal",
                3 => "Obesidad Tipo 1",
                4 => "Obesidad Tipo 2",
                5 => "Obesidad Tipo 3",
                6 => "Obesidad Tipo 4"
            );
            $optios = array();
            $cont = "";
            foreach ($datos as $key => $d) {
                if($obs == $key){
                     $cont .= '<option value="'.$key.'" selected>'.$d.'</option>';
                }else{
                    $cont .= '<option value="'.$key.'">'.$d.'</option>';
                }
              
            }
            echo $cont;
        }
    }