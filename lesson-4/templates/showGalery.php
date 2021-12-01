<?php
$path = $_SERVER["DOCUMENT_ROOT"]."/public/img/large";
$files = scandir($path);
?>

<div class="galery">
<?php
if ( count($files) > 2 ) {
    for ($i = 2; $i < count($files); $i++ ):
?>
        <a href="<?= "public/img/large/$files[$i]"?>" class="galery__link"><img src="<?= "public/img/large/$files[$i]"?>"></a>
<?php
    endfor;
}
?>
</div>