<!-- 
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
    
    <?php
        // Definisco la variabile per il paragrafo
        $myParagraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, numquam adipisci placeat harum assumenda quae pariatur cum maxime velit nihil. Assumenda mollitia aut quas, quibusdam deleniti nostrum provident itaque accusantium.';
        // Definisco la variabile per la parola che verrà immessa dall'utente
        $userBadWord = $_GET['word'];
    ?>

    <!-- Stampo il paragrafo e la sua lunghezza -->

    <p> <?php echo $myParagraph; ?> </p>
    <p>Il paragrafo in alto è composto da <?php echo strlen($myParagraph); ?> caratteri.</p>

    <hr>

    <!-- Comunico all'utente le regole del 'gioco' -->
    <h1>Se vuoi che una parola venga censurata, inserisci nell'URL --> '?word=' + 'tuaParolaDaCensurare'</h1>

    <hr>
    
    <!-- Sostituisco la parola immessa dall'utente con '***' e stampo il paragrafo censurato-->
    <p> <?php echo str_replace( $userBadWord, '***',$myParagraph); ?> </p>
    <!-- Stampo la lunghezza del paragrafo censurato -->
    <p>Il paragrafo censurato è composto da <?php echo strlen(str_replace( $userBadWord, '***',$myParagraph)); ?> caratteri.</p>
    
</body>
</html>