<?php
    include_once "config.php";

?>
<div class="galery">
    <?php while($data = mysqli_fetch_assoc($images)):?>
        <a href="<?= "?id={$data['id']}"?>" class="galery__link"><img src="<?= "public/img/small/{$data['source']}"?>" alt="<?= $data['title']?>"></a>
    <?php endwhile;?>
</div>