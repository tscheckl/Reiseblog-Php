<!DOCTYPE HTML>
<html>
<head>
    <title>The Vangaroos - Startseite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="style.css"/>  
    
    <!-- Google Analytics Tracking Code -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69065565-1', 'auto');
    ga('send', 'pageview');

    </script>    
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Add jQuery and jQuery mobile-->
    <script src="jquery.js"></script>
    <script src="jquerymobile.js"></script>
    
    <!--Add Lightbox, Lightbox was created by Lokesh Dhakar and can be downloaded at http://lokeshdhakar.com/projects/lightbox2 and used with the MIT license -->
    <link rel="stylesheet" href="/lightbox/dist/css/lightbox.css" type="text/css" media="screen" />
    
    
    <!-- Font Import -->
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

    
    <!-- Add slideshow script -->
    <script src="slideshow.js"></script>
    
</head>

<body>
    <header>
        <a href="index.html">
            <h1>The Vangaroos</h1>
            <h3>- Unser Australien Reiseblog -</h3>
        </a>
    </header>
    
    <div id="slideshow-background">
    
        <div id="slideshow-content">
            <img src="prevslide.png" id="prevslide" />
        
            <div id="slider">
                <ul class="slides"> 
                    <li class="slide"><a href="galerie/Bilder/IMG_0090.JPG" data-lightbox="image01" ><img src="galerie/Bilder/IMG_0090.JPG" /></a></li> 
                    <li class="slide"><a href="galerie/Bilder/IMG_0029.png" data-lightbox="image02" ><img src="galerie/Bilder/IMG_0029.png" /></a></li>
                    <li class="slide"><a href="galerie/Bilder/IMG_0128.JPG" data-lightbox="image03" ><img src="galerie/Bilder/IMG_0128.JPG" /></a></li>
                    <li class="slide"><a href="galerie/Bilder/IMG_0129.JPG" data-lightbox="image04" ><img src="galerie/Bilder/IMG_0129.JPG" /></a></li>
                    <li class="slide"><a href="galerie/Bilder/IMG_0108.JPG" data-lightbox="image05" ><img src="galerie/Bilder/IMG_0108.JPG" /></a></li>  
                </ul>
            </div>
        
            <img src="nextslide.png" id="nextslide"/>  
        </div>
    </div>  
    
    <div id="switcher"> 
        <ul>
            <li id="blog"><a href="blog/blog.php">Blog</a></li>
            <li id="galerie"><a href="galerie/galerie.html">Galerie</a></li>
        </ul>
    </div>
    
    <div id="main">
    
       <?php
    mysql_connect("localhost", "web594", "ljVCqJQF");
    mysql_select_db("usr_web594_1");

    $query = mysql_query("SELECT * FROM blog LIMIT 2" );  

    while($row = mysql_fetch_assoc($query)) {
        $artikelId = $row['id'];
        $headline = $row['headline'];
        $text = nl2br($row['text']);
        $author = $row['author'];
        $createdate = $row['createdate'];  

        echo "

        <article>
            <h3>{$headline}</h3> <br/>
            <p> {$text} </p> 
            <p> {$author} </p>
            <p> {$createdate} </p>
        </article>

        ";    
      }  
?>
    
    </div>
    
    <div id="footer">
        <ul>
            <li><a href="impressum/impressum.html">Impressum</a></li>
        </ul>
    </div>

    <script type="text/javascript" src="/lightbox/dist/js/lightbox.js"></script>
</body>
</html>