console.log(document);

var my_button = document.getElementById('the-button');
console.log(my_button);


var message_element = document.getElementById('message');
console.log(message_element);
console.log(typeof message_element);


console.log(message_element.innerHTML); // variable "message_element.innerHTML"

console.log(my_button.innerHTML);

message_element.innerHTML = '<em>Something happened!</em>';

function whatever() {
    console.log('blablabla');
}

function test() {
    message_element.innerHTML = '<em>fghj</em>';
}



var button_counter = 0;

function increase_counter() {
    button_counter = button_counter + 1;//button_counter by 1;
    button_counter++; //increase number by 1
    button_counter += 1; // increase number by the right operand
    
    // prepare the message
    var message = 'This button was clicked' + botton_counter + ' times';

    //find the button in the document
    var button = document.getElementById('counter_button');

    // update the text
    button.innerHTML=message;
    
    

}







