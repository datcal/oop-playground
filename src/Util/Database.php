<?php

namespace datcal\Util;

class Database{
    protected $_data = array();

    function __get($var){
        if (isset($this->_data[$var])) {
			return $this->_data[$var];
		}else{
            throw new \Exception("Database(" . get_class($this) . ")::" . $var . " is undefined (" . print_r($this->_data, true) . ")");
        }
    }

    function __set($var, $value){
        if (isset($this->{$var})) {
			$this->{$var} = $value;
		}
		else {
			$this->_data[$var] = $value;
		}
    }
}