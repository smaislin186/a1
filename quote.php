<?php 


// global $quotes; 
// $quotes[0]= ["quote1"];
// $quotes[1]= ["quote2"];
// $quotes[2]= ["quote3"];

// function getQuote() {
//     $key = rand(0,2);
//     return $quotes[$key];
// }

//global $key;



function getQuote(int $key) {

    if($key = 2){
        $quotes = "quote1";
    }
    elseif($key = 3){
        $quotes = "quote2";
    }   
    else{
       $quotes = "quote3";
    }

    return $quotes;
}
?>