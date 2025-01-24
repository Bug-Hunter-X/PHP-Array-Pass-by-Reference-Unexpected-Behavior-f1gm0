```php
function processData(array $data): array {
  // ... some code to process $data ...
  return $data;
}

$myData = [1, 2, 3, 4, 5];
$result = processData($myData);

// Unexpected behavior: $result is modified even though processData doesn't modify it directly
// ... more code that demonstrates unexpected changes to $myData or $result ...
```