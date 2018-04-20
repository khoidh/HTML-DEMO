<?php
/**
 * Created by PhpStorm.
 * User: khoidh
 * Date: 4/11/2018
 * Time: 5:50 PM
 */
$datestring = 'Year: Y Month: m Day: d - h:i a';
$time = time();
echo gmdate($datestring, $time);