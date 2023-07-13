<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $pageTitle ?></title>
</head>
<body>
    <header class=" w-screen h-28    bg-gray-400">
        <div class="container mx-auto flex justify-between items-center pt-4">
            <div>
                <a href="/php-site/index.php"><img src="img/branding-title.png" class="h-20 w-30" alt="logo"></a> 
            </div>
            <ul class="flex pl-10 space-x-6 font-3xl text-white font-semibold uppercase">
                <li><a href="catalog.php?path=books" class="hover:text-blue-300 hover:underline">books</a></li>
                <li><a href="catalog.php?path=movies" class="hover:text-blue-300 hover:underline">movies</a></li>
                <li><a href="catalog.php?path=music" class="hover:text-blue-300 hover:underline">music</a></li>
                <li><a href="catalog.php?path=podcast" class="hover:text-blue-300 hover:underline">podcast</a></li>
                <li><a href="/php-site/blog.php" class="hover:text-blue-300 hover:underline">blog</a></li>
                <li><a href="/php-site/suggest.php" class="hover:text-blue-300 hover:underline">suggest</a></li>
            </ul>
        </div>
    </header>
    <main class="bg-gray-200">
        
    
