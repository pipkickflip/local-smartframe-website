<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content=", width=device-width, user-scalable=no, maximum-scale=1, minimum-scale=1" />
        <title>Slideshow</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1, minimum-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
        <link rel="shortcut icon" href="icons/favicon.ico">
    </head>
    <script language="javascript">

var myVar=setInterval(function(){chekUpdate()},2*60*1000); // at 2 minutes intervals
var stat_old = "";
function chekUpdate()
{
    $("#stat").load("dir_stat.php",function(){
        var stat_new = $("#stat").html();
        if((stat_old != "") && (stat_old != stat_new)){
            refreshSlideShow();
        }
        stat_old = stat_new;
    });
}
function refreshSlideShow()
{
    location.reload();
}
    </script>
    <body>
        <div class="slideshow">
            <?php include 'import.php';?>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <script src="jquery_3.1.0_jquery.min.js"></script>
        <script src="script.js"></script>
        <div id="stat"></div>
    </body>
</html>