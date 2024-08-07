<?php
session_start();
session_unset();//memory lai free gardinxa
session_destroy();
echo "Session destroyed";



?>