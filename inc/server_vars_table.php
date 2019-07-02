<?php 
    echo '<table class="table table-hover">'; 
    echo '<thead>';
    echo '<tr><th scope="col">#</th><th scope="col">Name</th><th scope="col">Value</th></tr>';
    echo '</thead>';

    $i = 0;
    foreach($_SERVER as $paramName => $varServer) {
        $i++;
        if (isset($_SERVER[$paramName])) { 
            ob_start();
            var_dump($varServer);
            $varDump = ob_get_clean();
            echo '<tr><th scope="row">'.$i.'</th><td>'.$paramName.'</td><td>'.$varDump.'</td></tr>'; 
        } 
        else { 
            echo '<tr><th scope="row">'.$i.'</th><td>'.$paramName.'</td><td>-</td></tr>'; 
        } 
    } 
    echo '</table>';
