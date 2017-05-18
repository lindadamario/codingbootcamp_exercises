<?php
 $movie_name = "Arrival";
 $ratings = [
     "user642" => 69, 
     "user214" =>95, 
     "user013" => 82
];

$user_names = [
    "user642" => "Bob",
    "user214" => "Stuart",
    "user013" => "Kevin"
];


foreach($ratings as $user_id => $rating) { // now $rating has been defined
    
        echo get_username($user_name). " gave the movie a "      . $rating .   "";
    
}

/*
    get a username by the user's id
    looks for the username in the gloabl variable $user_names
    does not handle the case of username existing
    @param string $string- username of the user
*/


function get_function($user_id) {
    
    global $user_names; // include the variable $user_names  from the global scope into this function's scope'

    return $user_names[$user_id]; // returns an item from the array $user_names with the given key
} // logically this function can be read as ""



function print_rating($rating) { //so far it doesn't do anything. Meaining "for each movie the user gave this rating..."
    echo $rating . "%";
}

$user_name = "user214";




?>