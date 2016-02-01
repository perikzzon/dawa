<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViewHelper
 * Syfte att ta emot och håll det data som ska visa in html sidan
 *
 * @author pei
 */
class ViewHelper {
    //put your code here
    private $carData;
    function __construct() {
        $this->carData=array();
    }
    /**
     * Tilldelar det data som ska visa i html sidan
     * @param type $key namnet på variabeln som används i html sidan för att visa data
     * @param type $value värdet på data som visa i html sidan med hjälp av key
     */
    public function assign($key,$value){
        //Sätter till arrayen, ett key och tilldelar den ett värde
        $this->carData[$key]=$value;
    }
    public function display($htmlPage){
        //importerar en symbol tabell som innehåller alla variabler
        //variabler och key värde blir då tillgängliga
        extract($this->carData);
        //inkluderar html sidan
        include_once($htmlPage);
    }
}
