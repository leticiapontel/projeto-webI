<?php

    class Util{
        public function validaEmail($email){
                return filter_var($email, FILTER_VALIDATE_EMAIL);
        }

        public function testarExpressaoRegular($expressao, $atributo){
            return preg_match($expressao, $atributo);
        }
    }

?>