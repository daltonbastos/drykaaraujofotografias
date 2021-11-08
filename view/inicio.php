        <section  class="carousel">
            <button class="prev" onclick="scrollGalery(-1)">&#10094;</button>

            <div id="carousel-galery">
                <?php 
                    $dir = "img/galery";
                    $images = glob($dir . "/*.jpg");

                    foreach($images as $image)
                    {
                        echo "<img onclick='showModal(this)' class='galery-img' src='{$image}' alt=''>";
                    }
                ?>
            </div>

            <button class="next" onclick="scrollGalery(1)">&#10095;</button>
        </section>

        <section>
            <!--+FOTOS-->
        </section>