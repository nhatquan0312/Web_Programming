<?php
    $file_store_name = "stores.csv";
    $file_store_open = fopen($file_store_name, "r");            
    while (($row_store = fgetcsv($file_store_open)) !== FALSE) {
        $stores[] = array($row_store[0], trim($row_store[1]));
        $store_category_id[] = trim($row_store[2]);
    }
    $file_category_name = "categories.csv";
    $file = fopen($file_category_name, 'r');
    while (($row_category = fgetcsv($file)) !== FALSE) {
    $category_name[] = trim($row_category[1]);
    }
    $chosen_category = array_search($_POST['categories'], $category_name);
    $count_category = 0;
    $category = [];
    foreach ($store_category_id as $id) {
        if ($id == $chosen_category) {
            $category[] = $stores[$count_category];
        }
        $count_category++;
    }
?>