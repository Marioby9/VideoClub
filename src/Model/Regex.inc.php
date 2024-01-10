<?php 
/**
 * Expresiones regulares para las comprobaciones del identificador de cada tipo de producto
 */

    class Regex{

        public static function validateISAN($ISAN) {
            $pattern = '/^ISAN\\d{6}$/';
            return preg_match($pattern, $ISAN);
        }

        public static function validateISBN($ISBN) {
            $pattern = '/^ISBN\\d{9}$/';
            return preg_match($pattern, $ISBN);
        }

        public static function validateISWC($ISWC) {
            $pattern = '/^ISWC\\d{6}$/';
            return preg_match($pattern, $ISWC);
        }


    }

?>