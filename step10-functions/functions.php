<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function ofAge($age) {
  if ($age >= 21) 
    echo 'Go have some fun!';
  else
    echo 'Looks like you will have to wait until you are older to come check us out.';
}
