<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>
        <?php

$file='count.txt';
$count=strval(file_get_contents($file));
file_put_contents($file,(int)$count+1);
echo("you are visitor number:".$count);

?>
        </h1>
    </body>
</html>
