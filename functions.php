<?php

function read_all_products() {
  $file_name = 'products.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $products = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $product = [];
    foreach ($first as $col_name) {
      $product[$col_name] =  $row[$i];
      $i++;
    }
    $products[] = $product;
  }
  return $products;
}

/*function get_product($product_id) {
  $products = read_all_products();
  foreach ($products as $p) {
    if ($p['id'] == $product_id) {
      return $p;
    }
  }
  return false;
}*/
function sort_by_group($objects, $sort_group,$increasing = true) {
  if (empty($objects)) {
      return false;
  }

  //Get group values from $objects
  $sort_values = [];
  foreach ($objects as $col) {
      if (isset($col[$sort_group])) {
          $sort_values[] = $col[$sort_group];
      } else {
          return false;
      }
  }

  return array_multisort($sort_values,$increasing ? SORT_ASC : SORT_DESC,SORT_NATURAL,$objects) ? $objects : false;
}


function read_all_stores() {
  $file_name = 'stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  return $stores;
}


function created_time_cmp($p1, $p2) {
  // Convert date/time string to Unix timestamp
  return - (strtotime($p1['created_time']) - strtotime($p2['created_time']));
}


function created_time_cmp_for_new_stores($s1, $s2) {
  // Convert date/time string to Unix timestamp
  return - (strtotime($s1['created_time']) - strtotime($s2['created_time']));
}