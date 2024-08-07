<?php
$pattern = "#^/product/productdetail/(\d+)$#";
$string1 = "/product/productdetail/(\d+)";
$string2 = "public/layout/images/upload";

// if (fnmatch($pattern, $string1)) {
//     echo "Chuỗi 1 khớp với mẫu.";
// } else {
//     echo "Chuỗi 1 không khớp với mẫu.";
// }
if (preg_match($pattern, $string1, $matches)) {
    echo "Chuỗi 1 khớp với mẫu.<br>";
    echo print_r($matches);
    echo "<br>".$matches[count($matches)-1];
} else {
    echo "Chuỗi 1 không khớp với mẫu.";
}


// if (fnmatch($pattern, $string2)) {
//     echo "Chuỗi 2 khớp với mẫu.";
// } else {
//     echo "Chuỗi 2 không khớp với mẫu.";
// }
