<?php
ambilFile('databases\database.php');
ambilFile('resources\view\test.view.php');
function test($kolom, $data)
{
    $datas = ambilSatuBaris('users', $kolom, $data);
    $hasil = jalankanQuery(database(), $datas);

    testPage($hasil);
}
