<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserved server vars</title>
</head>
<body>
    <div class="wrapper">
    <?php 
        echo '<table cellpadding="10">' ; 
        foreach($_SERVER as $paramName => $varServer) {
            if (isset($_SERVER[$paramName])) { 
                ob_start();
                var_dump($varServer);
                $varDump = ob_get_clean();
                echo '<tr><td>'.$paramName.'</td><td>'.$varDump.'</td></tr>' ; 
            } 
            else { 
                echo '<tr><td>'.$paramName.'</td><td>-</td></tr>' ; 
            } 
        } 
        echo '</table>';
    ?>
    </div>
</body>
</html>