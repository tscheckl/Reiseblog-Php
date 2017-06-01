<!DOCTYPE HTML>
<html>
<head>
    <title>The Vangaroos - Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="blogstyle.css"/>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Add jQuery and jQuery mobile-->
    <script src="../jquery.js"></script>

    <!-- Add Fancybox (Click pictures to enlarge) -->
    <link rel="stylesheet" href="../jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="../jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Font Import -->
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>


    <!-- Fancybox script -->
    <script>
         $(document).ready(function() {
            $("#single_1").fancybox({

                openEffect  : 'fade',
                closeEffect : 'fade',

                helpers : {
                   title : {
                      type : 'over'
                   }
                }
            });
        });
    </script>
    
    <script src="loadmore.js"></script>
    
    <script>
       
        $(document).ready(function(){
             //Untermenü auf- / zuklappen
            $("#nav ul li a").click(function(){
                $(this).next().slideToggle();
            });
        });
    </script>

</head>

<body>

    <?php
        mysql_connect("localhost", "web594", "ljVCqJQF");
        mysql_select_db("usr_web594_1");
    ?>

    <header>
        <a href="../index.php">
            <h1>The Vangaroos</h1>
            <h3>- Blog -</h3>
        </a>
    </header>
    
    <div id="nav">
        <ul>
            <li>
                <p><a href="Monate/oktober.php">Oktober</a></p> <a href="Monate/oktober.php">></a>
            </li>
            
            <li>
                <p><a href="#">November</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">Dezember</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">Januar</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">Februar</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">M&auml;rz</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">April</a></p> <a href="#">></a>
            </li>
            
        </ul>
    </div>
    
    <div id="main">
        <div id="articles">
           <?php

    $query = mysql_query("SELECT * FROM blog LIMIT 20" );  

    while($row = mysql_fetch_assoc($query)) {
        $artikelId = $row['id'];
        $headline = $row['headline'];
        $text = nl2br($row['text']);
        $author = $row['author'];
        $createdate = $row['createdate'];  

        $comcheck = mysql_query("SELECT * FROM comment WHERE blogId ='{$artikelId}' ");

        $nrcomments = mysql_num_rows($comcheck);

        echo "

        <article>
            <h3>{$headline}</h3> <br/>
            <p> {$text} </p> 
            <p> {$author} </p>
            <p> {$createdate} </p> <br/>
            <a href='artikel.php?id={$artikelId}'>Zur Artikelseite</a> | <a href='artikel.php?id={$artikelId}'> Kommentare ({$nrcomments})</a>
        </article>";    
      }  
?>
        </div>
        
        <!--<div id="loadmore"><p>Load more...</p></div> -->
    </div>
    
    <div id="footer">
        <ul>
            <li><a href="../impressum/impressum.html">Impressum</a></li>
        </ul>
    </div>
</body>
</html>