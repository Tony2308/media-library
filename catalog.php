<?php 
    $pageTitle = "Full catalogue";
    $section = null;
    include("include/data.php");
    include("include/header.php");
    include("include/functions.php");

    if(isset( $_GET['path'] )){
        if($_GET['path'] == "books"){
            $pageTitle = "books";
            $section = "books";
            }elseif($_GET['path'] == "music"){
                $pageTitle = "music";
                $section = "music";
            }elseif($_GET['path'] == "movies"){
                $pageTitle = "movies";
                $section = "movies";
        }
    }
?>

<section class="h-auto  container mx-auto flex flex-col justify-start items-center pt-20">
    <h1 class="text-4xl font-extrathin text-gray-300 uppercase  ">
        <?php echo $pageTitle;?>
    </h1>
    <Div class="container mx-auto flex flex-wrap justify-center items-center ">
        <?php

           $categories = array_category($catalog,$section);
            foreach($category as $id){
            
                echo get_item_html($id,$catalog[$id]);

            ;}

            ?>

    </Div>
</section>

<?php include("include/footer.php")?>