function foo(array $arr): void {
  foreach ($arr as $value) {
    if ($value === null) {
      // Handle null values appropriately
      continue; // or throw an exception, etc.
    }
    // Process non-null values
  }
}

//Example usage
$arr = [1, 2, null, 4, 5];
foo($arr);
//In this example null is skipped.  You could also throw an exception or use a different strategy depending on your needs.