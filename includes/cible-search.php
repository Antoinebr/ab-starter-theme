<?php
if (isset($_POST['header-search'])){

  $search = htmlspecialchars($_POST['header-search']);

  header('location: ../../../../?s='.$search.'');
}
?>
