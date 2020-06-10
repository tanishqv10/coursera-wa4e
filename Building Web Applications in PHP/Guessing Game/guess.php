<htm>
    <head>
        <title>Tanishq Varshney</title>
    </head>
    <body>
        <h1>Welcome to my Guessing game</h1>
        <p>
            <?php
                if ( ! isset($_GET['guess']) ) { 
                    echo("Missing guess parameter");
                } 
                else if ( strlen($_GET['guess']) < 1 ) {
                    echo("Your guess is too short");
                }
                else if ( $_GET['guess'] < 69 ) {
                    echo("Your guess is too low");
                }
                else if ( $_GET['guess'] > 69 ) {
                    echo("Your guess is too high");
                }
                else if( ! is_numeric($_GET['guess']) ) {
                    echo("Your guess is not a number");
                }
                else {
                    echo("Congratulations - You are right");
                }
            ?>
        </p>    
    </body>
</htm>











