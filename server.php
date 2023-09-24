<?php
 
// mengincludekan file berisi class nusoap, ini printah untuk manggil nusoap nya
require_once 'lib/nusoap.php';


$server = new nusoap_server(); // Create the server instance, mmbuat webservice nya d server 



$server -> configureWSDL('server_wsdl','urn:server_wsdl'); // Initialize WSDL support, utk mmbuat wsdl 

// Register the method
$server->register('jumlahkan',                // method name
   array('x' => 'xsd:string','y' => 'xsd:string'), // input parameters
   array('return' => 'xsd:string')    // output parameters
    
);


$server->register('kurang',                // method name
   array('a' => 'xsd:string','b' => 'xsd:string'), // input parameters
   array('return' => 'xsd:string')    // output parameters
   
);

// detil isi method jumlahkan, fungsi yg d jalankan ktika webservice d panggil
function jumlahkan($x,$y) {
  $hasil=$x + $y;
  return $hasil;
} 


 
// detil isi method kurangi
function kurang($a, $b) {
   $minus=$a - $b;
   return $minus;
}


// memberikan response service 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA: '';
$server->service(file_get_contents("php://input"));
$hasil = json_decode($server);
echo $hasil;

exit();




//referensinya https://blog.rosihanari.net/implementasi-web-service-dengan-soap-menggunakan-nusoap-bag-1/
//https://www.codeproject.com/Articles/140189/PHP-NuSOAP-Tutorial
//https://www.tanahpengetahuan.com/2020/11/membuat-web-service-xml-wsdl-sederhana.html
//https://qastack.id/programming/2731297/file-get-contentsphp-input-or-http-raw-post-data-which-one-is-better-to