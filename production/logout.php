<?php
session_start();
if(!isset($_SESSION['username'])) {
 ?><script language='javascript'> document.location='login.php'</script><?php
} else {
 session_destroy();
 ?> 
 <script language='javascript'> document.location='login.php'</script><?php
}
?> 