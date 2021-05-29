<?php
    function read_all_products() {
        $file_name = "products.csv";
        $fp = fopen($file_name, 'r');
        $first = fgetcsv($fp);
        $products = [];
        while ($row = fgetcsv($fp)) {
            $i = 0;
            $product = [];
            foreach ($first as $col_name) {
                $product[$col_name] = $row[$i];
                $i++;
            }
            $products[] = $products;
        }
        return $products;
    }
    function()
?>