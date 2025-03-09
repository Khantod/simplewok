<?php
function navbar()
{
    $base_url = '/simplefastwork';
?>
    <nav>
        <a class="brand" href="<?= $base_url ?>">simplewok</a>
        <ul>
            <li><a href="<?= $base_url ?>/about">About</a></li>
            <li><a href="<?= $base_url ?>/contact">Contact</a></li>
            <li><a class="docs" href="<?= $base_url ?>/docs">Docs</a></li>
        </ul>
    </nav>
<?php
}
