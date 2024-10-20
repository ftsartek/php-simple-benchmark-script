<?php

$filename = 'benchmark_results.txt';  // Replace with your actual filename

// Read the file
$content = file_get_contents($filename);

// Split the content into lines
$lines = explode("\n", $content);

// Remove the header line
array_shift($lines);

// Process each line
foreach ($lines as $line) {
    // Skip empty lines and the TOTAL line
    if (empty(trim($line)) || strpos($line, 'TOTAL:') === 0 || strpos($line, 'END:') === 0) {
        continue;
    }

    // Split the line by comma
    $parts = explode(',', $line);

    // Extract the OP/SEC value (index 1 after splitting by comma)
    $op_sec = isset($parts[1]) ? trim($parts[1]) : '';

    // Output only the OP/SEC value
    if ($op_sec !== '') {
        echo "$op_sec\n";
    }
}
