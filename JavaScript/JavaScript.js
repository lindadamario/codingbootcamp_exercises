console.log('This is the first file talking');

var value = "null";
var type = "null";

/*
this is a comment that can contain multiple lines
*/
value = '123'; //assign value '123' int variable value
console.log('123'); //it is going to print '123'
type = typeof value; //finds out that value is a string and assigns 'string' into type
console.log('type'); //it is going to print 'string' because it is equal to the command typeof


// this is a one line comment

value = 123;
console.log(value);

value = '123 Times Square';
console.log(value); 
type = typeof value;
console.log(type);

value = 12.3;
console.log(value); 
type = typeof value;
console.log(type);

value = 'true';
console.log(value); 
type = typeof value;
console.log(type);

value = [1, 2, 3];
console.log(value); 
type = typeof value;
console.log(type);

value = { foo: 'bar' };
console.log(value); 
type = typeof value;
console.log(type);

value = document;
console.log(document); 
type = typeof value;
console.log(type);


function say_hello() { //declare the function
    console.log('Hello hello hello!');
}

say_hello(); //call the function

function say_hello_to(whom) {
    console.log('hello, ' + whom);  //prints the result of putting together hello + the argument (whom)
}

say_hello_to('universe');

function print_type(value) {
    console.log('The type of ' + value + ' ' + type);
}
print_type('bye');

function extra_challenge(value) {
    console.log('Did you know that' + value );
}
extra_challenge(value);

print_type(value);

var type = get_type('123');
console.log(type);

function print_type() {
    value = 123;
    console.log(value); 
    type = typeof value;
    console.log(type);
}


print_type(123);
print_type('123 Times Square');
print_type(12.3);
print_type('true');
print_type([1, 2, 3]);
print_type({ foo: 'bar' });
print_type(document);

/*
every value can be cast into a a boolean value; all the numbers except 0 is always true

var foo;
foo = Boolean(1); // foo == true
foo = Boolean(0); // foo == false
foo = Boolean('Not empty string'); // foo == true
foo = Boolean(''); // foo == false
foo = Boolean(null); // foo == false

foo = Boolean('false'); // foo == true
foo = Boolean(false); // foo == false

*/

