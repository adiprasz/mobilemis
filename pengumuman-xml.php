<?php

$url = "http://localhost/webservice/index.php/api/controllers_pengumuman/pengumuman.xml";
// mengirim GET request ke sistem A dan membaca respon XML dari sistem A
$pengumuman_pens = simplexml_load_file($url);
//print_r($pengumuman_pens->pengumuman);
//$absensi=$pengumuman_penspeng->count();
//echo $absensi;
foreach($pengumuman_pens->pengumuman->item as $p) {
   echo"<div style='border: 1px solid #000000; padding: 5px;'>";
    echo "<h4 align='center'>" . $p->JUDUL."</h4>";
    echo "<h5>Penulis: " . $p->NAMA."</h5>";   
    echo "<h5>" . $p->URAIAN."</h5>";
    echo "</div>";
    echo "<br>";
    
}


?>
