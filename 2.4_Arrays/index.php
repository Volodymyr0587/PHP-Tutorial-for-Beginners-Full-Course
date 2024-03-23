<?php

//% Array
$guitars = ['Vela', 'Explorer', 'Strat'];

// if (isset($guitars[3])) {
//     echo $guitars[3];
// } else {
//     echo 'Guitar does not exist.';
// }

//% Associative array
$moreGuitars = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat',
];

if (isset($moreGuitars['prs'])) {
    echo $moreGuitars['prs'];
} else {
    echo 'Guitar does not exist.';
}