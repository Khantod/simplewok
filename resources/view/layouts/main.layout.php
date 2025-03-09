<?php
ambilFile('resources\view\components\navbar.view.php');
ambilFile('resources\view\components\footer.component.php');
function mainLayout($content)
{
    navbar();
    cetak($content);
}
