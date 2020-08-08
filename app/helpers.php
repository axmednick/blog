<?php
/**
 * Created by PhpStorm.
 * User: 99455
 * Date: 4/23/2020
 * Time: 2:12 AM
 */

function microtimeFileName($file){

    $microtime=microtime();
    $microtime=str_replace(' ','',$microtime);
    $microtime=str_replace('.','',$microtime);
    $microtime=$microtime.'.'.$file->getClientOriginalExtension();
    return $microtime;
}