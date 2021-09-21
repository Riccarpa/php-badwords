<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con 
tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BardWords</title>
</head>
<body>

    <?php 
        $hello_world = "Hello world";
        $length = strlen($hello_world);
        
    ?>

    <div class="hello-php">
        <h1>
            <?php echo "$hello_world";?>
        </h1>
        <p>
            <?php echo "La stringa è lunga: $length <hr>";?>
        </p>
    </div>

    <div class="bad-word">
        <h4>Scegli la parola da censurare nella stringa "Hello world":</h4>
        <form method="GET" style="margin-bottom:20px">
            <input type="text" name='badWord' value='world'>
            <span>premi invio per censurare</span>
        </form>

        <?php 
        
        $bad_word = $_GET['badWord'];

        if($bad_word){
            $hello_world = "Hello world";
            echo str_replace($bad_word, '***', $hello_world);
        }
        ?>

    </div>


    
</body>
</html>