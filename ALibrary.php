//namespace 

class ALibrary
{

    var $error_prefix = 'ALibrary Error :- ';
    var $enable_exceptions = true;
    var $exception_code = 500;

    /**
     * Returns an array containing values which are higher than the given limit.
     *
     * @param Array The data array needs to be filtered
     * @param Integer The cut off limit
     * @param Boolean Return with greater than and equal ? (Optional parameter, default is false)
     * @param Array Options array such as sort, etc (Optional parameter, default is null)
     *
     * @return Array Array if no error, String/Array if any error depending on the enabled exceptions flag
     * @throw n/a
     */
    function _aboveLimit($score, $cut_off, $with_equal = false, $options = null)
    {
        if (is_array($score) && is_int($cut_off)) {
            if (!empty($score)) {
                $array = array();
                foreach ($score as $sc) {
                    if ($with_equal === true) {
                        if ($sc >= $cut_off) {
                            $array[] = $sc;
                        }
                    } else {
                        if ($sc > $cut_off) {
                            $array[] = $sc;
                        }
                    }
                }
                if (!is_null($options)) {
                    $sorted_array = array();
                    foreach ($this->_a_options($array, $options) as $a) {
                        $sorted_array[] = $a;
                    }
                    return $sorted_array;
                } else {
                    return $array;
                }
            } else {
                $this->_a_throwExceptionOrString('Oops! We received an empty array.');
            }
        } else if (!is_array($score)) {
            $this->_a_throwExceptionOrString('An array should be passed as the score');
        } else {
            $this->_a_throwExceptionOrString('An integer should be passed as limit.');
        }
    }

    /**
     * Returns an array containing values which are lower than the given limit.
     *
     * @param Array The data array needs to be filtered
     * @param Integer The cut off limit
     * @param Boolean Return with lower than and equal ? (Optional parameter, default is false)
     * @param Array Options array such as sort, etc (Optional parameter, default is null)
     *
     * @return Array Array if no error, String/Array if any error depending on the enabled exceptions flag
     * @throw n/a
     */
    function _belowLimit($score, $cut_off, $with_equal = false, $options = null)
    {
        if (is_array($score) && is_int($cut_off)) {
            if (!empty($score)) {
                $array = array();
                foreach ($score as $sc) {
                    if ($with_equal === true) {
                        if ($sc <= $cut_off) {
                            $array[] = $sc;
                        }
                    } else {
                        if ($sc < $cut_off) {
                            $array[] = $sc;
                        }
                    }
                }
                if (!is_null($options)) {
                    $sorted_array = array();
                    foreach ($this->_a_options($array, $options) as $a) {
                        $sorted_array[] = $a;
                    }
                    return $sorted_array;
                } else {
                    return $array;
                }
            } else {
                $this->_a_throwExceptionOrString('Oops! We received an empty array.');
            }
        } else if (!is_array($score)) {
            $this->_a_throwExceptionOrString('An array should be passed as the score.');
        } else {
            $this->_a_throwExceptionOrString('An integer should be passed as limit.');
        }
    }

    /**
     * Returns an array containing only unique values.
     *
     * @param Array The data array needs to be filtered
     * @param Array Options array such as sort, etc (Optional parameter, default is null)     
     *
     * @return Array Array if no error, String/Array if any error depending on the enabled exceptions flag
     * @throw n/a
     */
    function _unique($data_array, $options = null)
    {
        if (is_array($data_array)) {
            $array = array_unique($data_array);
            if (!is_null($options)) {
                $sorted_array = array();
                foreach ($this->_a_options($array, $options) as $a) {
                    $sorted_array[] = $a;
                }
                return $sorted_array;
            }
            return $array;
        } else {
            $this->_a_throwExceptionOrString('Oops! We detected a non - array.');
        }
    }
    
    /**
     * Returns an array containing only even values.
     *
     * @param Array The data array needs to be filtered
     * @param Array Pick the even values based on key ? (Optional parameter, default is false)
     * @param Array Options array such as sort, etc (Optional parameter, default is null)      
     *
     * @return Array Array if no error, String/Array if any error depending on the enabled exceptions flag
     * @throw n/a
     */
    function _even($data_array, $key = false, $options = null)
    {
        if (is_array($data_array)) {
            $array = array();
            foreach ($data_array as $k => $val) {
                if ($key === false) {
                    if ($val % 2 == 0) {
                        $array[] = $val;
                    }
                }else if($key === true){
                    if ($k % 2 == 0) {
                        $array[] = $val;
                    }
                }
            }
            if (!is_null($options)) {
                $sorted_array = array();
                foreach ($this->_a_options($array, $options) as $a) {
                    $sorted_array[] = $a;
                }
                return $sorted_array;
            }
            return $array;
        } else {
            $this->_a_throwExceptionOrString('Oops! We detected a non - array.');
        }
    }
    
    
    /**
     * Returns an array containing only odd values.
     *
     * @param Array The data array needs to be filtered
     * @param Array Pick the odd values based on key ? (Optional parameter, default is false)
     * @param Array Options array such as sort, etc (Optional parameter, default is null)      
     *
     * @return Array Array if no error, String/Array if any error depending on the enabled exceptions flag
     * @throw n/a
     */
    function _odd($data_array, $key = false, $options = null)
    {
        if (is_array($data_array)) {
            $array = array();
            foreach ($data_array as $k => $val) {
                if ($key === false) {
                    if ($val % 2 != 0) {
                        $array[] = $val;
                    }
                }else if($key === true){
                    if ($k % 2 != 0) {
                        $array[] = $val;
                    }
                }
            }
            if (!is_null($options)) {
                $sorted_array = array();
                foreach ($this->_a_options($array, $options) as $a) {
                    $sorted_array[] = $a;
                }
                return $sorted_array;
            }
            return $array;
        } else {
            $this->_a_throwExceptionOrString('Oops! We detected a non - array.');
        }
    }
    
    /**
     * Returns the average of an array containing values.
     *
     * @param Array The value array     
     * @param Array Options array such as sort, etc (Optional parameter, default is null)      
     *
     * @return Array Array if no error, String/Array if any error depending on the enabled exceptions flag
     * @throw n/a
     */
    public function _average($data_array, $options = null)
    {
        if (is_array($data_array)) {
            $total = 0;
            $number_of_elements = count($data_array);            
            foreach ($data_array as $val) {
                if(is_numeric($val)){
                    $total = $total + $val;
                }else{
                    $this->_a_throwExceptionOrString('Oops! Cannot find the average of a non numeric array. '
                            . 'Please check your data array if it contains non numeric values.'); 
                }
            }            
            $average = $total/$number_of_elements;
            if(!is_null($options)){
               $average = $this->_a_math_options($average, $options);
            }
            return $average;
        }else{
           $this->_a_throwExceptionOrString('Oops! We detected a non - array.'); 
        }
    }
    
    public function _max_repetitions(){}
    public function _min_repetitions(){}
    public function _total(){}    
    
    /**
     * Returns a number or array containing area value of the given square or rectangle.
     *
     * @param Numeric width (or height)
     * @param Numeric height (or width)
     * @param Array Options array such as sort, etc (Optional parameter, default is null)      
     *
     * @return Numeric Numeric/Array if no error, String/Array if any error depending on the enabled exceptions flag.
     * @throw n/a
     */
    function _area_of_square_rectangle($x,$y, $options = null)
    {
        if(is_numeric($x) && is_numeric($y)){
            $area = $x*$y;
            if(!is_null($options)){
               $area = $this->_a_math_options($area, $options);
            }
            return $area;        
        }else{
            $this->_a_throwExceptionOrString('Either value of x, y or both values are non numeric');
        }
    }
    
    /**
     * Returns a number or array containing area value of the given circle.
     *
     * @param Numeric radius      
     * @param Array Options array such as sort, etc (Optional parameter, default is null)      
     *
     * @return Numeric Numeric/Array if no error, String/Array if any error depending on the enabled exceptions flag.
     * @throw n/a
     */
    function _area_of_circle($radius, $options = null)
    {
        if(is_numeric($radius)){
            $pi = 22/7;
            $area = $pi * ($radius*$radius);
            if(!is_null($options)){
               $area = $this->_a_math_options($area, $options);
            }
            return $area;
        }else{
            $this->_a_throwExceptionOrString('Radius needs to be a numeric value');
        }
    }
    
    
    
    /**
     * Returns a number or array containing area value of the given triangle.
     *
     * @param Numeric height
     * @param Numeric length of base      
     * @param Array Options array such as sort, etc (Optional parameter, default is null)      
     *
     * @return Numeric Numeric/Array if no error, String/Array if any error depending on the enabled exceptions flag.
     * @throw n/a
     */
    function _area_of_triangle($params, $options = null)
    {
        if(is_array($params)){
            if(key_exists('height', $params) && key_exists('base', $params)){
                $area = ($params['height'] * $params['base']) / 2;
                if(!is_null($options)){
                    $area = $this->_a_math_options($area, $options);
                }
                return $area;
            }else if(key_exists('area', $params) && key_exists('base', $params)){
                $height = (2 * $params['area']) / $params['base'];
                if(!is_null($options)){
                    $height = $this->_a_math_options($height, $options);
                }
                return $height;
            }else{
                $this->_a_throwExceptionOrString('Sorry, we expect height and base to calculate the area. Or area and base'
                        . ' to calculate the height. Or area and height to calculate the base. But we didn\'t find array'
                        . ' keys for those combinations.');
            }   
        }else{
            $this->_a_throwExceptionOrString('You need to send parameters in an attay formate. Eg:- ');
        }
    }
    

    /* ------------------------------INTERNAL FUNCTIONS WHICH ARE INVISIBLE TO OUTSIDE--------------------------- */

    private function _a_order($array, $order)
    {
        switch ($order) {
            case 'a':
            case 'asc': sort($array);
                return $array;
                break;
            case 'd':
            case 'desc': rsort($array);
                return $array;
                break;
            default:
                $this->_a_throwExceptionOrString('Sorry, you can only put a, asc, d or desc '
                        . 'as array ordering flags.');
        }
    }

    private function _a_options($array, $options)
    {
        if (is_array($array) && is_array($options)) {
            $formatted_array = $array;

            if (array_key_exists('order', $options)) {
                $formatted_array = $this->_a_order($formatted_array, $options['order']);
            }
            if (array_key_exists('start', $options)) {
                $index = 0;
                if (is_array($options['start'])) {
                    if (array_key_exists('index', $options['start'])) {
                        if ($options['start']['index'] == true) {
                            $index = $options['start']['start_value'];
                        } else {
                            if ($options['start']['start_value'] - 1 >= 0) {
                                $index = $options['start']['start_value'] - 1;
                            } else {
                                $this->_a_throwExceptionOrString('Sorry, you have set start '
                                        . 'value index to false.');
                            }
                        }
                    }
                } else {
                    $index = $options['start'];
                }
                $formatted_array = array_slice($formatted_array, $index);
            }
            if (array_key_exists('limit', $options)) {
                $formatted_array = array_slice($formatted_array, 0, $options['limit']);
            }

            return $formatted_array;
        } else {
            $this->_a_throwExceptionOrString('Sorry, either data or options or both not in array format.');
        }
    }

    private function _a_throwExceptionOrString($message)
    {
        if ($this->enable_exceptions === true) {
            throw new \Exception($this->error_prefix . $message, $this->exception_code);
        } else {
            return $message;
        }
    }
    
    private function _a_math_options($value, $options)
    {
        if(is_array($options)){
            $new_value = $value;
            if (array_key_exists('decimals', $options)) {
                $new_value = number_format($new_value, $options['decimals']);
            }            
            if (array_key_exists('array', $options)) {
                if(!empty($options['array'])){
                    $array[$options['array']] = $new_value;
                    return $array;
                }else{
                    $array[] = $new_value;
                    return $array;
                }
            }
            return $new_value;
        }else{
           $this->_a_throwExceptionOrString('Sorry, options needs to be in array format.'); 
        }        
        
    }

}
