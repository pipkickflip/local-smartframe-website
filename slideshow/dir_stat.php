<?php
$stat = stat('images');
echo 'time: ' . $stat['mtime']; /* time of last modification (Unix timestamp) */
echo 'size: ' . $stat['size'];  /* size in bytes */
?>