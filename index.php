<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="styles/index.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>My little CV</title>
    </head>
 
    <body>
        <?php 
            /*if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                $url = "https://";   
            else  
                $url = "http://";   
                // Append the host(domain name, ip) to the URL.   
                $url.= $_SERVER['HTTP_HOST'];   
        
                // Append the requested resource location to the URL   
                $url.= $_SERVER['REQUEST_URI'];

        $page = explode("/", $url);*/

        


        include("views/header.php"); 
        include("views/profil_header.php");

        
        ?>

        <div>
            
        </div>
    
    <?php include("views/footer.php");  ?>
    
    </body>
</html>