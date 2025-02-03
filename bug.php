function foo(array $arr): void {
  foreach ($arr as $value) {
    if ($value === null) {
      // Handle null values appropriately
      continue; // or throw an exception, etc.
    }
    // Process non-null values
  }
}