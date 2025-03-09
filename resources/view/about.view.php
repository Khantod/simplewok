<?php
ambilFile('resources\view\layouts\main.layout.php');
function aboutPage()
{
    bukaLayout();
?>
    <h1 align="center">nothing here!</h1>
<?php
    $content = tutupLayout();
    mainLayout($content);
}
