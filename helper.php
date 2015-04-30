<?php
$jenis = $_GET['jenis'];

//DEFINE THE ARRAY DATA
$array = array(
    'PISANG' => 'BUAH',
    'MANGGA' => 'BUAH',
    'APEL' => 'BUAH',
    'BAYAM' => 'SAYUR',
    'KANGKUNG' => 'SAYUR',
    'BUNCIS' => 'SAYUR');

//SET DEFAULT DROPDOWN
echo "<option value=''>- PILIH -</option>";

//GENERATE SELECTED DATA
while ($fruit_name = current($array)) {
    if ($fruit_name == $jenis) {
        echo "<option value = '".key($array)."'>".key($array)."</option>";
    }
    next($array);
}
?>
