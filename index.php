<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            $phrase = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis eos aperiam natus accusantium recusandae repudiandae nam soluta mollitia doloribus commodi aliquam sed blanditiis totam beatae eum, ratione aspernatur fugiat ea?';

            echo $phrase;
        ?>
    </h1>

    <h1>
        <?php
            $phraseLen = strlen($phrase);
            
            echo $phraseLen;
        ?>
    </h1>

    <h1>
        <?php
            $badword = $_GET["name"];

            $newPhrase = str_replace($badword, '***', $phrase);

            echo $newPhrase;
        ?>
    </h1>

    <h1>
        <?php
            $newPhraseLen = strlen($newPhrase);
            
            echo $newPhraseLen;
        ?>
    </h1>
</body>
</html>