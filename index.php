<!-- insert header from include/header.php -->
<?php 
    $pageTitle = "Personal Media Library";
    include("include/header.php");
    include("include/data.php");
    include("include/functions.php");

?>

<section class="h-auto  container mx-auto flex flex-col justify-start items-center pt-20">
    <h1 class="text-3xl font-extrathin text-gray-300 ">
        May we suggest something great:
    </h1>
    <Div class="container mx-auto flex flex-wrap justify-center items-center ">
        <?php
            foreach($catalog as $id => $item){
              
                echo get_item_html($id,$item);

            ;}

            ?>

    </Div>
</section>

<?php include("include/footer.php")?>
















