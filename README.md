# PHP Array Pass-by-Reference Unexpected Behavior

This repository demonstrates a subtle bug in PHP related to how arrays are passed to functions.  The issue is that while it *appears* that arrays are passed by value,  they're actually passed by reference. This can lead to unexpected modifications of the original array when using functions.

The `bug.php` file contains the buggy code.  The `bugSolution.php` file provides a solution.

This example highlights the need to understand PHP's pass-by-reference behavior to avoid this type of error.