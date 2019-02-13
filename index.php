<?php

if (isset($_GET['values']) && isset($_GET['operation'])){
  $values = json_decode($_GET['values']);
  $x = (int) $values[0];
  $y = (int) $values[1];

  $operation = $_GET['operation'];
}else{
  return json_encode([ 'Result' =>'', 'Status' => 'error']);
}

switch ($operation){
  case 'sum':
    return json_encode([ 'Result' => $x + $y, 'Status' => 'OK']);
    break;
  case 'subtraction':
    return json_encode([ 'Result' => $x - $y, 'Status' => 'OK']);
    break;
  case 'division':
    if ($y === 0){
      return json_encode([ 'Result' =>'', 'Status' => 'error']);
    }
    return json_encode([ 'Result' => $x / $y, 'Status' => 'OK']);
    break;
  case 'multiplication':
    return json_encode([ 'Result' => $x * $y, 'Status' => 'OK']);
    break;
}
