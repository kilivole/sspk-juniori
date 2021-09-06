<?php
session_start();
$_SESSION['login']="";

session_unset();
$_SESSION['action1']="Odhlášení proběhlo úspěšně.";
?>
<script language="javascript">
document.location="../index.php";
</script>
