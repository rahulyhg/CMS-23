<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 28.10.2018
 * Time: 12:19
 */

namespace App\Http\Form;

class Form{
    function __construct()
    {

    }

    public static function createInput($type,$name,$hint,$class,$value=null,$placeholder=null){
        return array('type'=>$type,'name'=>$name,'hint'=>$hint,'class'=>$class,'value'=>$value,'placeholder'=>$placeholder);
    }
    public static function createLabel($name,$hint,$class){
        return array('type'=>'label','name'=>$name,'hint'=>$hint,'class'=>$class);
    }
}