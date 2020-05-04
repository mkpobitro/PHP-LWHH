<?php 

function displayOptions($options, $selectedValues){
    foreach($options as $option){
        $selected = "";
        if(in_array($option, $selectedValues)){
            $selected = 'selected';
        }
        printf("<option value='%s' %s>%s</option>",strtolower($option), $selected, ucwords($option));
    }
}