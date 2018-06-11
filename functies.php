<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 04/06/2018
 * Time: 09:50
 */
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Opdrachten</title>
</head>
<body>
<ul>
    <?php
    $dieren = array ("aap", "beer", "konijn", "vis");
    $sporten = array("handbal", "korfbal", "hockey", "schaatsen");
    shuffle($sporten);
    echo "<li> Er zijn ".count($sporten)." sporten en dieren in de array</li>";

    geefArrayWeerAlsLijst($sporten);
    geefArrayWeerAlsLijst($dieren);

    function geefArrayWeerAlsLijst($arr){
        foreach($arr as $arr_element){
            echo "<li>".$arr_element."</li>";
        }
    }
    ?>
</ul>
</body>
</html>
