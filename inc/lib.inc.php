<?php
function myError($no, $msg, $file, $line)
{
    if ($no == E_USER_ERROR) {
        echo "Так не должно быть...";
        $s = date("d-m-Y H:i:s") . " - $msg в  $file:$line";
        error_log("$s\n", 3, "error.log");
    }
}

function drawMenu($menu, $vertical = true)
{
    if (!is_array($menu))
        return false;
    $style = "";
    if (!$vertical) {
        $style = " style ='display:inline;margin-right:15px' ";
    }
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li$style>";
        echo "<a href='$item[href]'>$item[link]</a>";
        echo "</li>";
    }
    echo "</ul>";
    return true;
}