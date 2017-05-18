<?php



function create_paragraph($contents, $class = "paragraph", $id = "") {
    return '<p class="'.$class.'"'.($id?' id="'.$id.'"':'').'>'.$contents.'</p>';
}

create_paragraph('text inside paragraph');

create_paragraph('text inside paragraph', 'p_class');

create_paragraph('text inside paragraph', 'paragraph_class', 'paragraph_id');

?>


<?php 

function convert_weight($weight, $unit='kg')
{
    
    if($unit=='kg'){ 
        return $weight * 2.20462262; 
    }
    elseif($unit=='lb')
    {
        return $weight / 2.20462262;
    }
    else
    {
        die();
    }


}
    // 1 kg = 2.20462262 lb
    echo convert_weight(1, 'kg');
    echo convert_weight(1, 'lb');
    echo convert_weight(1);
?>


<?php

function return_val($value) {
    if($value == 123) 
    {
        return $value / 1;
    }
    elseif($value != 123){
        die;
    }
}
    echo return_val(1);


?>

<?php

function bigger_value($first, $second) 
{
    if($first > $second)
    {
    return $first;
    } elseif ($first < $second);
    {
        return $second;
    }
    else
    {
        return null;
    }

    echo bigger_value;
}






?>








