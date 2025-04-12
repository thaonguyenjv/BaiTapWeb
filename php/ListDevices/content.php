<?php
    require_once "data.php";
    //lấy nhóm sp từ url
    $cag = $_GET['gr'];
    //nếu không có nhóm sp thì chuyển hướng về nhóm đầu tiên
    if(!$cag || !array_key_exists($cag, $data)){
        $keys = array_keys($data);
        header("Location: .?gr=".($keys[0]));
    }
    $group = $data[$cag];
    foreach($group as $brand => $products){
        echo "<div class='nav_bar'>{$brand}</div>";
        echo "<div style='pading-bottom: 15px;'>";
        foreach ($products as $prod){
            echo "<div class='prd_item'>";
            echo $prod;
            echo "</div>";
        }
        echo "<br style='clear:both;'>";
        echo "</div>";
    }
?>