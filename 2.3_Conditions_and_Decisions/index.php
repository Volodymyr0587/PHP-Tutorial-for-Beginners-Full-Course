<?php

$first_name = 'John';
$last_name = 'Smith';

if ($first_name == 'john' || $last_name == 'smith') {
    echo 'The first condition is true';
} else if ($first_name != 'John' && $last_name == 'Smith') {
    echo 'The second condition is true';
} else {
    echo 'The conditions are false';
}