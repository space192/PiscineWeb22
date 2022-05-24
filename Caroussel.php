<?php
include 'const.php';
foreach($imgCarrousel as $elem)
{
    echo('<div class="Carrousel" >');
    echo('<img src="' . $elem["img"] . '">');
    echo('<div class="LegendeCaroussel">' . $elem["legend"] .'</div>');
    echo('</div>');
}
echo('<a class="Precedent" onclick="defilement(-1)">❮</a>');
echo('<a class="Suivant" onclick="defilement(1)">❯</a>');
echo('<div id="LesPoints">');
for($i = 1 ; $i <= sizeof($imgCarrousel); $i++)
{
    echo('<span class="Point" onclick="image(' . $i .')"></span>');
}
echo('</div>');
?>