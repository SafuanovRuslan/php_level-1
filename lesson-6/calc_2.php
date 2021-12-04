<?php
    if ( !empty($_POST) ) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $operation = $_POST['operation'];
    }

    switch ($operation) {
        case 'сложить':
            $result = $x + $y;
            break;
        case 'вычесть':
            $result = $x - $y;
            break;
        case 'перемножить':
            $result = $x * $y;
            break;
        case 'разделить':
            ($y == 0) ? $result = 'inf' : $result = $x / $y;
            break;
        default:
            $result = '';
    }
?>

<form action="" method="post">
    <input type="text" name="x" value="<?= $x?>" style="width:50px;height:50px;">
    <span>and</span>
    <input type="text" name="y" value="<?= $y?>" style="width:50px;height:50px;">
    <span>=</span>
    <input type="text" name="result" value="<?= $result?>" style="width:50px;height:50px;" disabled><br>
    <input type="submit" name="operation" value="сложить">
    <input type="submit" name="operation" value="вычесть">
    <input type="submit" name="operation" value="перемножить">
    <input type="submit" name="operation" value="разделить">
</form>