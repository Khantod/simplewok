<?php
include_once 'layouts/main.layout.php';
$config = include_once 'config.php';
function homePage()
{
    bukaLayout();
?>
    <div class="main-page">
        <h1 class="header">A random thought... <br> that somehow became real.</h1>
        <img src="resources\assets\mikuuuu.jpg" alt="">
        <h1 class="sub-header"><span class="colored">Confused?</span> Yeah, me <span class="colored">too!</span> <br> But hey, follow me on Instagram!</h1>
        <a class="ig" href="https://www.instagram.com/khane.one/">My Instagram</a>
    </div>
<?php
    $content = tutupLayout();
    mainLayout($content);
}
