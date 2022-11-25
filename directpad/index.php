<?php

$data = "";
foreach ($_POST as $key => $value) {
    $data = $data.htmlspecialchars($key)."=".htmlspecialchars($value)."&";
}
header("Location: signin.php?".$data);
?>