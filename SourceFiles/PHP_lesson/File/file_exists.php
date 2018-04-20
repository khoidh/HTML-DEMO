
<?php
//$url = "https://itphutran.com";
$url = "http://localhost/tinhvanmis/upload/user/23.jpg";

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Không dung để kiểm tra đường dẫn URL
if (file_exists($url) === true) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
?>