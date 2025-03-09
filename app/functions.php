<?php

function ambilFile($file)
{
    include_once $file;
}

function cetak($isi)
{
    echo $isi;
}

function liatArray($array)
{
    var_dump($array);
}

function jalankanQuery($connect, $query)
{
    $query = mysqli_query($connect, $query);
    return $query;
}
function logout()
{
    session_destroy();
}

function ambilSatuBaris($tabel, $kolom, $data)
{
    $query = "SELECT * FROM $tabel WHERE $kolom LIKE '$data'";
    return $query;
}

function ambilSemua($tabel)
{
    $query = "SELECT * FROM $tabel";
}

function bukaLayout()
{
    return ob_start();
}
function tutupLayout()
{
    return ob_get_clean();
}
