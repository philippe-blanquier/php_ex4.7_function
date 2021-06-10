<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 4.7 fonction</title>
    </head>
    <body >
        <p>
            <?php
            function functionAgeGenre( $age, $genre)
            {
                // compare string ingnoring the case 
                if (strcasecmp($genre, 'homme') == 0)
                {
                    if ($age >= 18)
                    {
                        $msg='Vous êtes un homme et vous êtes majeur';
                    }
                    else
                    {
                        $msg='Vous êtes un homme et vous êtes mineur';
                    }
                }
                else
                {
                    if ($age >= 18)
                    {
                        $msg='Vous êtes une femme et vous êtes majeure';
                    }
                    else
                    {
                        $msg='Vous êtes une femme et vous êtes mineure';
                    }
                }
                return $msg;
            }
            echo functionAgeGenre( 21, "HoMme");
            ?>
       </p>
    </body>
</html>