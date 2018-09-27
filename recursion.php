<?php

$json_string = 

'[
    {
        "Kingdom":"Animalia",
        "Class":[{
            "latin":"Mammalia",
            "Species":[{
                "latin":"Ursus arctos"
            }]
        }] 
    }
]';

$array = json_decode($json_string, true);

function build_list($array) {
    $list = '<ul>';
    foreach($array as $key => $value) {
        foreach($value as $key => $index) {
            if(is_array($index)) {
                $list .= build_list($index);
            } else {
                $list .= "<li>$index</li>";
            }
        }
    }

    $list .= '</ul>';
    return $list;
}

echo build_list($array);
?>