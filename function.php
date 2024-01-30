<?php
    // Milestone 2
    // Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale

    function generate_password($password_length){
        $password = '';
        $characters = 'abcdefghijklmnopqrstuvwxyz'.strtoupper('abcdefghijklmnopqrstuvwxyz').'0123456789!£$%&/()=?[]@#{}';

        $characters_length = strlen($characters);

        while(strlen($password) < $password_length){
            $index = rand(0, $characters_length - 1);

            $char = $characters[$index];

            $password = $password.$char;
        }

        return $password;
    }
?>