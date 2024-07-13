<?php

function general_player_data_block($userdata){

    $block = '<ul class="list-group">';

    foreach($userdata as $key => $value){
        $block .= '<li class="list-group-item d-flex justify-content-between align-items-center">'
                    .$key.
                    '<span class="badge text-bg-primary rounded-pill">'
                        .$value.
                    '</span>
                  </li>';
    }

    $block .= '</ul>';
    
    return $block;    
}

?>