<?php 
//AQUI HAREMOS LAS COMPROBACIONES CON PREGMATCH O CON VALIDACIONES DE DATOS/SANEAMIENTO

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