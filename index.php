<?php
    // Milestone 1
    // Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.

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

    if(isset($_GET['password-length']) && $_GET['password-length'] != ''){
        $password_length = $_GET['password-length'];

        $password = generate_password($password_length);
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
           <div class="col-12">
                <h2>

                    <?php echo $password ?>
                </h2>

                <!-- Milestone 1
                Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. -->
                <form action="./index.php" method="GET" class="my-5">
                    <div class="row">
                        <div class="col-12">

                            
                            <input type="number" name="password-length" placeholder="Password length" class="form-control">
                        </div>
                        <div class="col-12 my-3">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
           </div>
        </div>
    </div>
</body>
</html>