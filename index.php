<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here

        function myTest(){
            static $x=0;
            echo $x ;
            $x++;
        }
        myTest();
        echo "<br>";
        myTest();
        echo "<br>";
        myTest();
        ?>
    </body>
</html>
