<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Variable
 *
 * @author pei
 */
include_once './ViewHelper.php';
class Controller {
    //put your code here
    public function execute(){        
        
        $viewhelper=new ViewHelper();
        $test="H";
        $hej="då";
        $viewhelper->assign('marke', 'Volvo');
        $viewhelper->assign('modell', 'XC90');
        $viewhelper->assign('pris',235000);
        $viewhelper->assign('rabatteratPris',235000*0.9);
        $viewhelper->assign('datum',date("Y-h-d"));
        
        
        $viewhelper->assign('bild','http://www.largus.fr/images/images/Volvo-XC-90-2014_1.jpg');
         
        $viewhelper->display('./Variables.html');
        
         
    }
    
}
$cont=new Controller();
$cont->execute();
