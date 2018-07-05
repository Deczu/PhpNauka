<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 05.07.18
 * Time: 08:14
 */
class Request
{
    public static function uri(){
        return (trim($_SERVER['REQUEST_URI'],'/'));
    }
}