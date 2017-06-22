<?php

/**
 * Created by PhpStorm.
 * User: lisatokunaga
 * Date: 6/19/17
 * Time: 6:40 PM
 */
include "Mem.php";
include("DvdTitle.php");

function TestConstructor() {
    //arrange and act
    $t0 = new DvdTitle();

    $memP = new Mem(777);
    $memP->Create(888);
    print_r($memP);
    //asset
    if ($memP->Count() != 1){
        die("TestConstructor FAILED") .PHP_EOL;
    }
    echo("TestConstructor OKAY") . PHP_EOL;
}
 TestConstructor();
