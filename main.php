<?php

if (isset($_POST['values']) && isset($_POST['operation'])){
  $values = $_POST['values'];
  $x = (int) $values[0];
  $y = (int) $values[1];

  $operation = $_POST['operation'];

  switch ($operation){
    case 'sum':
      echo json_encode([ 'Result' => $x + $y, 'Status' => 'OK']);
      break;
    case 'subtraction':
      echo json_encode([ 'Result' => $x - $y, 'Status' => 'OK']);
      break;
    case 'division':
      if ($y == 0){
        echo json_encode([ 'Result' =>'', 'Status' => 'error']);
      }else{
        echo json_encode([ 'Result' => $x / $y, 'Status' => 'OK']);
      }
      break;
    case 'multiplication':
      echo json_encode([ 'Result' => $x * $y, 'Status' => 'OK']);
      break;
  }

}else{
  echo json_encode([ 'Result' =>'', 'Status' => 'error']);
}


