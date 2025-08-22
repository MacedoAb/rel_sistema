<?php 
session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['nivel']);
$_SESSION['msg'] = "Deslogado com sucesso";
echo '<script>window.location="../"</script>';
?>