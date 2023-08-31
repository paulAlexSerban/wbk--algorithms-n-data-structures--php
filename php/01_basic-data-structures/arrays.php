<?php
include '../utils/file_list.php';
generateFileList();

$list = [456, 232, 753, 159, 456, 852, 123, 321, 654, 456, 987, 789];
echo max($list);
echo "<br>";
echo min($list);
echo "<br>";
sort($list);
print_r($list);