
<?php
//$url = "https://itphutran.com";
$url = "http://localhost/tinhvanmis/upload/user/23.jpg";

//$url = "http://www.domain.com/demo.jpg";

//  ========================== Cách 1 =========================
$headers = @get_headers($url);
if(strpos($headers[0],'404') === false)
{
    echo "URL Exists";
}
else
{
    echo "URL Not Exists";
}


//  ========================== Cách 1 =========================
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_NOBODY, true);
$result = curl_exec($curl);
if ($result !== false)
{
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($statusCode == 404)
    {
        echo "URL Not Exists";
  }
    else
    {
        echo "URL Exists";
    }
}
else
{
    echo "URL not Exists";
}
