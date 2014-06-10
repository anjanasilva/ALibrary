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

## Example
```
include('./ALibrary.php');

$ALibrary = new ALibrary();
$area = $ALibrary->_area_of_triangle(array('height' => 3.78, 'base' => '3.78'), array('decimals' => 2));
```
Stay in touch for more examples and API doc.

Thanks.

