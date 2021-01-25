<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    echo "The data is sent by POST";
}

else {
    echo "The data is sent by GET";
}
?>