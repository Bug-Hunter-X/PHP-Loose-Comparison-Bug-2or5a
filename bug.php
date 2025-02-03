function foo($a, $b) {
  if ($a === $b) {
    return true;
  } else {
    return false;
  }
}

//This function will return true even when the input is not strictly equal. For example, foo(0, '0') will return true. This is because PHP's loose comparison operator (==) does not perform strict type checking. 