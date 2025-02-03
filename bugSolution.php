function foo($a, $b) {
  if ($a === $b) {
    return true;
  } else {
    return false;
  }
}

//This function uses strict comparison (===), which ensures that both the value and type are compared. This prevents the unexpected behavior observed in the original function.