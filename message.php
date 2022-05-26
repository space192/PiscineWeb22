<?php
$text = $_POST['text'];

$text_message = "<div class='msgln'><span class='chat-time'>".date("g:i A")."</span> <b class='username'>".$_POST['username']."</b> ".stripslashes(htmlspecialchars($text))."<br></div>";
$myfile = fopen($_POST["filename"], "a");
fwrite($myfile, $text_message);
fclose($myfile);
?>