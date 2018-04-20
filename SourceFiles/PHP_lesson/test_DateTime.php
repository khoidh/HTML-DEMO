<?php
/**
 * Created by PhpStorm.
 * User: khoidh
 * Date: 4/18/2018
 * Time: 10:48 AM
 */

//$today = date("F j, Y, g:i a");
$today = date("Y-m-d H:m:s");
echo $today;
echo "<br>";
$today_fomat = date_format(date_create_from_format('Y-m-d H:m:s', $today), 'j F Y - g:i a');
echo $today_fomat;