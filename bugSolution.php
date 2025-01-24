```php
function processData(array $data): array {
  // Create a copy to avoid modifying the original array
  $newData = $data;
  // ... some code to process $newData ...
  return $newData;
}

$myData = [1, 2, 3, 4, 5];
$result = processData($myData);

// Now $myData remains unchanged, and $result contains the processed data
// ... verification code to confirm $myData and $result are as expected ...
```