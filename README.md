# ALibrary
ALbirary is a PHP Library which contains collection of predefined functions.


## Functions
* _aboveLimit() - Return values in an array which are greater than the given limit.
* _belowLimit() - Return values in an array which are lower than the given limit.
* _unique() - Returns an array containing only unique values.
* _even() - Returns an array containing only even values.
* _odd() - Returns an array containing only odd values.
* _average() - Returns the average of an value array.
* _area_of_square_rectangle() - Returns the area value of a given square or rectangle.
* _area_of_circle() - Returns the area value of a given circle
* _area_of_triangle() - Returns the area value of a given triangle. This function can be used to derive height and base values by giving respective values such as area/base, area/height


## Usage
Using ALibrary is really really easy. You just need to include the ALibrary.php in your application/file and instantiate an object of the library class. After that you can you start using the ALibrary
functions straight away.

## Examples
Find values which are greater than 30 in the following array. (Including 30)
```
include('ALibrary.php');

$ALibrary = new ALibrary();
$array = array(100, 20, 60, 30, 70, 80, 50, 10, 40, 90);
$cut_off = 30;
$ALibrary = new ALibrary();
$a = $ALibrary->_aboveLimit($array, $cut_off, true);
print_r($a);
//returns Array ( [0] => 100 [1] => 60 [2] => 30 [3] => 70 [4] => 80 [5] => 50 [6] => 40 [7] => 90 ) 

//If you need to return the value excluding cut off value.
$a = $ALibrary->_aboveLimit($array, $cut_off, false);
//returns Array ( [0] => 100 [1] => 60 [2] => 70 [3] => 80 [4] => 50 [5] => 40 [6] => 90 )

//If you need to sort the array in ascending order ('a' or 'asc' both accepted)
$a = $ALibrary->_aboveLimit($array, $cut_off, true, array('order' => 'a'));
//returns Array ( [0] => 30 [1] => 40 [2] => 50 [3] => 60 [4] => 70 [5] => 80 [6] => 90 [7] => 100 )

//If you need to sort the array in descending order ('d' or 'desc' both accepted)
$a = $ALibrary->_aboveLimit($array, $cut_off, true, array('order' => 'd'));
//returns Array ( [0] => 100 [1] => 90 [2] => 80 [3] => 70 [4] => 60 [5] => 50 [6] => 40 [7] => 30 )
```



Find area of a triangle when height is 3.78 and base is 2.75. Also you need to return the value with 2 decimals.
```
include('ALibrary.php');

$ALibrary = new ALibrary();
$area = $ALibrary->_area_of_triangle(array('height' => '3.73', 'base' => '2.77'), array('decimals' => 2));
//returns 5.17 

//If you need to return the value with 1 decimal.
$area = $ALibrary->_area_of_triangle(array('height' => '3.73', 'base' => '2.77'), array('decimals' => 1));
//returns 5.2 
```



Stay in touch for more examples and API doc.

Thanks.

