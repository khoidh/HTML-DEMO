<?php
/**
 * Created by PhpStorm.
 * User: khoidh
 * Date: 4/11/2018
 * Time: 2:11 PM
 */

//Kiểm tra người dung submit
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['gender']))
    {
        $gender=$_POST['gender'];
    }else{
        $gender=false;
    }
    echo "Giới tính đang chọn là".$gender;
}