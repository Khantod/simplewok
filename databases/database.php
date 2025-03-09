<?php

function database()
{
    $connect = mysqli_connect('localhost', 'root', '', 'blog_db');
    return $connect;
}
