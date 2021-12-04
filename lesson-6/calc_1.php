<?php
    if ( !empty($_POST) ) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $operation = $_POST['operation'];
    }

    switch ($operation) {
        case 'sum':
            $result = $x + $y;
            break;
        case 'dif':
            $result = $x - $y;
            break;
        case 'mul':
            $result = $x * $y;
            break;
        case 'div':
            ($y == 0) ? $result = 'inf' : $result = $x / $y;
            break;
        default:
            $result = '';
    }
?>

<form action="" method="post">
    <input type="text" name="x" value="<?= $x?>" style="width:50px;height:50px;">
    <select name="operation" value="<? $operation?>" style="width:150px;height:50px;">
        <option value="sum" <?php if($operation=='sum') echo 'selected'?>>(+) Сложить</option>
        <option value="dif" <?php if($operation=='dif') echo 'selected'?>>(-) Вычесть</option>
        <option value="mul" <?php if($operation=='mul') echo 'selected'?>>(*) Перемножить</option>
        <option value="div" <?php if($operation=='div') echo 'selected'?>>(/) Разделить</option>
    </select>
    <input type="text" name="y" value="<?= $y?>" style="width:50px;height:50px;">
    <span>=</span>
    <input type="text" name="result" value="<?= $result?>" style="width:50px;height:50px;" disabled>
    <input type="submit" value="Вычислить">
</form>