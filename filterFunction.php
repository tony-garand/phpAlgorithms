<?php
// filter function for $_array
function filter_by_value($array, $index, $value){
    foreach(array_keys($array) as $key){
        $temp[$key] = $array[$key][$index];
        if ($temp[$key] == $value){
            $newarray[$key] = $array[$key];
        }
    }
  return $newarray;
}
//returns filtered arrays with $key == $value
$filtered = filter_by_value($_array, '$key', '$value');
