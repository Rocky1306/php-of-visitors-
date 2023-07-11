<?php
// File path to store the visitor count
$filePath = 'visitor_count.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Read the current count from the file
    $count = (int) file_get_contents($filePath);
} else {
    // File doesn't exist, create a new file and set count to 0
    file_put_contents($filePath, '0');
    $count = 0;
}

// Increment the count
$count++;

// Update the count in the file
file_put_contents($filePath, $count);

// Display the count
echo "Number of visitors: $count";
?>
