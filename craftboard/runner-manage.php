<?php
switch ($_GET["runner_action"]) {
  case "update":
    shell_exec('docker pull '.$_GET["runner_name"]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    break;
  case "inspect":
    include 'common.php';
    echo '<div class="bg-light h-100 p-4">';
    echo "<title>".$_GET["runner_name"]." info</title>";
    $output = nl2br(shell_exec('docker image inspect '.$_GET["runner_name"]));
    echo "<p style=\"font-family:Heebo\">".$output."</p></div>";
    break;
}
?>
