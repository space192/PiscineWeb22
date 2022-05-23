<?php
include 'const.php';
echo('<div class="SousBoites">');
echo('<div id="CarrouselSpecialistes" class="carousel slide" data-bs-ride="carousel">');
echo('<div class="carousel-inner" style="background-color:white;">');
$first = false;
foreach($imgSpe as $spe)
{
    if($first === false)
    {
        echo('<div class="carousel-item active">');
        $first = true;
    }
    else
    {
        echo('<div class="carousel-item">');
    }
    echo('<div style="background-color :white;">');
    echo('<h2>'. $spe["nom"] .'</h2>');
    echo('<img src="'. $spe["img"] .'" class="d-block w-100" alt="Aïcha_Fémal">');
    echo('</div>');
    echo('</div>');
}
echo('<button class="carousel-control-prev" type="button" data-bs-target="#CarrouselSpecialistes" data-bs-slide="prev">');
echo('<span class="carousel-control-prev-icon" aria-hidden="true"></span>');
echo('<span class="visually-hidden">Previous</span></button>');
echo('<button class="carousel-control-next" type="button" data-bs-target="#CarrouselSpecialistes" data-bs-slide="next">');
echo('<span class="carousel-control-next-icon" aria-hidden="true"></span>');
echo('<span class="visually-hidden">Next</span></button>');
echo('</div></div></div></div>');
?>