<section class="portifolio">

<?php 
    $dir = "img/galery/";
    $listDir = scandir($dir);

    foreach($listDir as $curDir)
    {
        if(is_dir($curDir))
        {
            $name = basename(realpath(dirname($curDir)));

            echo 
            " 
            <div class='portifolio-card'>
                <a class='portifolio-card' href='portifolio_view.html'>
                    <img src='img/galery/feminino/dry_1.jpg' alt=''>
                    <h4>{$name}</h4>
                </a>
            </div>
            ";
        }
    }
?>

</section>

<!--<section class="portifolio">
    <div class="portifolio-card">
        <a class="portifolio-card" href="portifolio_view.html">
            <img src="img/galery/feminino/dry_1.jpg" alt="">
            <h4>ENSAIOS FEMININOS</h4>
        </a>
    </div>

    <div class="portifolio-card">
        <a class="portifolio-card" href="">
            <img src="img/galery/dry_1.jpg" alt="">
            <h4>PAISAGEM</h4>
        </a>
    </div>

    <div class="portifolio-card">
        <a class="portifolio-card" href="">
            <img src="img/galery/infantil/infantil_1.jpg" alt="">
            <h4>INFANTIL</h4>
        </a>
    </div>
</section>-->