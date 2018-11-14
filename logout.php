<?php
 
if(isset($_POST['submit']))
{
    session_start();
    session_destroy();
    header('Location:index.php?Your_Chat_is_an_end');
    exit();

}
else
{
	echo "hello";
}
?>