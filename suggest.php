<?php 
 $pageTitle = "Suggest a media item";

include("include/header.php");
include("include/functions.php");
include("include/data.php");


?>

<section class="h-screen  container mx-auto flex flex-col justify-center items-center pt-20">
    <h1 class="text-4xl font-extrathin text-gray-300 ">
        Find something great!!
    </h1>

    <Div class="container mx-auto flex flex-wrap justify-center items-center ">
        <?php

            $random = array_rand($catalog,4);
            foreach($random as $id){
            
                echo get_item_html($id,$catalog[$id]);

            ;}

        ?>

    </Div>

</section>

<?php include("include/footer.php")?>