<?php

/*=======================================*/
// Answer 1
echo "====== Answer 1: Sorting Array by Lower Length ======";
echo PHP_EOL;

$cities = [
    'Atlanta', 'Jerusalem', 'Rio de Janeiro', 'Chicago', 'Zagreb', 'Dhaka', 'Chittagong', 'Sylhet', 'Khulna'];

function sortingArrayByLowLength( $city1, $city2 ) {
    if ( $city1 == $city2 ) {
        return 0;
    } else {
        return strlen( $city1 ) > strlen( $city2 ) ? true : false;
    }

}

usort( $cities, "sortingArrayByLowLength" );
foreach ( $cities as $city ) {
    echo $city . "\n";
}

/*=======================================*/
// Answer 2
echo PHP_EOL;
echo "====== Answer 2: String Concatination ======";
echo PHP_EOL;

$string1 = "String 1 ENDs here.";
$string2 = "String 2 is concatinating here";

function stringConcatenation( $str1, $str2 ) {

    return $str1 . " " . $str2;
}

echo stringConcatenation( $string1, $string2 );

/*=======================================*/
// Answer 3
echo PHP_EOL;
echo PHP_EOL;
echo "====== Answer 3: Remove first & last element from an array ======";
echo PHP_EOL;

$fruits = ['Apple', 'Mango', 'Grape', 'Banana', 'Orange'];

function removeFirstAndLastElementFromArray( $arr ) {
    array_shift( $arr );
    array_pop( $arr );
    return $arr;
}
echo "The Real Array is: \n";
print_r( $fruits );
echo PHP_EOL;

echo "After removing first and last element, the Array is: \n";
print_r( removeFirstAndLastElementFromArray( $fruits ) );

/*=======================================*/
// Answer 4
echo PHP_EOL;
echo "====== Answer 4: Check if a string contains only letters and whitespace. ======";
echo PHP_EOL;

$name = 'Shafayat Hossain';
$email = 'shafayat.h.b@gmail.com';

function isContainsLettersAndWhitespace( $str ) {
    return preg_match( '/^[a-zA-Z\s]+$/', $str );
}

if ( isContainsLettersAndWhitespace( $name ) ) {
    echo "'$name' contains only letters and whitespace. \n\n";
} else {
    echo "'$name' contains non-letter or non-whitespace characters. \n\n";
}

if ( isContainsLettersAndWhitespace( $email ) ) {
    echo "'$email' contains only letters and whitespace. \n";
} else {
    echo "'$email' contains non-letter or non-whitespace characters. \n";
}

/*=======================================*/
// Answer 5
echo PHP_EOL;
echo "====== Answer 5: Find the second largest number in an array ======";
echo PHP_EOL;

$numbers = [2, 3, 34, 543, -554, 667, -3, 2, 1, -454, 7, -8, 3];

function findSecondLargestNumber( $n1, $n2 ) {
    if ( $n1 == $n2 ) {
        return 0;
    } else {
        return $n1 > $n2 ? true : false;
    }

}

usort( $numbers, "findSecondLargestNumber" );
// print_r( $numbers );
$secondLargest = $numbers[count( $numbers ) - 2];
echo "Second largest number is: {$secondLargest}";
