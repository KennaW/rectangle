<?php
    class Rectangle
    {
        private $length;
        private $width;

        function __construct($length,$width)
        {
            $this->length = $length;
            $this->width = $width;
        }

        function isSquare()
        {
            if($this->length == $this->width)
            {
                return true;
            }

            else
            {
                return false;

            }

        }

        function getArea()
        {
            return $this->length * $this->width;

        }

        function setLength($new_length)
        {
            return $this->length = (float) $new_length;
        }

        function getLength()
        {
            return $this->length;
        }

        function setWidth($new_width)
        {
            return $this->width = (float) $new_width;
        }

        function getWidth()
        {
            return $this->width;
        }

    }
?>
