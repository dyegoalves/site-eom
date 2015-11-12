<?php
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 11/11/2015
 * Time: 12:33
 */

class base_config {

    public  function  converte_us_br($data , $qual_tipo_data){
    /* funcao Converte_us_br BR > US e US>BR
     * Recebe 2 paramentros de entrada a data e o tipo data
     * Se a data for br converte a data para US e retorna o data convertida
     * senao converte a data US para BR e retorna a data convertida.
     **/
        if($qual_tipo_data == "br"):
            /*Formato data BR > US */
            $data_us = date('Y-m-d H:i:s', strtotime($data));
            return $data_us;
       else:
           /*Formato data US > BR*/
           $data_br = date('d/m/Y H:i:s', strtotime($data));
           return $data_br;
       endif;
    }

} 