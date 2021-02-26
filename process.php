<?php
include('config.php');
session_start();

$protocol = $_SESSION['protocol'];
$principal = $_SESSION['principal'];
$co = $_SESSION['co'];

$A_comment_1 = $_SESSION['A_comment_1'];
$A_comment_2 = $_SESSION['A_comment_2'];
$A_comment_3 = $_SESSION['A_comment_3'];
$A_comment_4 = $_SESSION['A_comment_4'];
$A_choice_1 = $_SESSION['A_choice_1'];
$A_choice_2 = $_SESSION['A_choice_2'];
$A_choice_3 = $_SESSION['A_choice_3'];
$A_choice_4 = $_SESSION['A_choice_4'];

$B_comment_1 = $_SESSION['B_comment_1'];
$B_comment_2 = $_SESSION['B_comment_2'];
$B_comment_3 = $_SESSION['B_comment_3'];
$B_comment_4 = $_SESSION['B_comment_4'];
$B_choice_1 = $_SESSION['B_choice_1'];
$B_choice_2 = $_SESSION['B_choice_2'];
$B_choice_3 = $_SESSION['B_choice_3'];
$B_choice_4 = $_SESSION['B_choice_4'];

$C_comment_1 = $_SESSION['C_comment_1'];
$C_comment_2 = $_SESSION['C_comment_2'];
$C_comment_3 = $_SESSION['C_comment_3'];
$C_comment_4 = $_SESSION['C_comment_4'];
$C_comment_5 = $_SESSION['C_comment_5'];
$C_comment_6 = $_SESSION['C_comment_6'];
$C_comment_7 = $_SESSION['C_comment_7'];
$C_choice_1 = $_SESSION['C_choice_1'];
$C_choice_2 = $_SESSION['C_choice_2'];
$C_choice_3 = $_SESSION['C_choice_3'];
$C_choice_4 = $_SESSION['C_choice_4'];
$C_choice_5 = $_SESSION['C_choice_5'];
$C_choice_6 = $_SESSION['C_choice_6'];
$C_choice_7 = $_SESSION['C_choice_7'];

$D_comment_1 = $_SESSION['D_comment_1'];
$D_comment_2 = $_SESSION['D_comment_2'];
$D_comment_3 = $_SESSION['D_comment_3'];
$D_choice_1 = $_SESSION['D_choice_1'];
$D_choice_2 = $_SESSION['D_choice_2'];
$D_choice_3 = $_SESSION['D_choice_3'];

$E_comment_1 = $_SESSION['E_comment_1'];
$E_comment_2 = $_SESSION['E_comment_2'];
$E_comment_3 = $_SESSION['E_comment_3'];
$E_comment_4 = $_SESSION['E_comment_4'];
$E_comment_5 = $_SESSION['E_comment_5'];
$E_comment_6 = $_SESSION['E_comment_6'];
$E_comment_7 = $_SESSION['E_comment_7'];
$E_choice_1 = $_SESSION['E_choice_1'];
$E_choice_2 = $_SESSION['E_choice_2'];
$E_choice_3 = $_SESSION['E_choice_3'];
$E_choice_4 = $_SESSION['E_choice_4'];
$E_choice_5 = $_SESSION['E_choice_5'];
$E_choice_6 = $_SESSION['E_choice_6'];
$E_choice_7 = $_SESSION['E_choice_7'];

$F_comment_1 = $_SESSION['F_comment_1'];
$F_choice_1 = $_SESSION['F_choice_1'];

$RECOM_choice_1 = $_SESSION['RECOM_choice_1'];
?>

<?php
if(isset($_POST['submit'])){

  $result = mysqli_query($mysqli, "INSERT INTO first(protocol,principal,co) VALUES('$protocol', '$principal', '$co')");

  $result = mysqli_query($mysqli, "INSERT INTO A(A_comment_1, A_comment_2, A_comment_3, A_comment_4, A_choice_1, A_choice_2, A_choice_3, A_choice_4) VALUES('$A_comment_1', '$A_comment_2', '$A_comment_3', '$A_comment_4', '$A_choice_1', '$A_choice_2', '$A_choice_3', '$A_choice_4')");

  $result = mysqli_query($mysqli, "INSERT INTO B(B_comment_1, B_comment_2, B_comment_3, B_comment_4, B_choice_1, B_choice_2, B_choice_3, B_choice_4) VALUES('$B_comment_1', '$B_comment_2', '$B_comment_3', '$B_comment_4', '$B_choice_1', '$B_choice_2', '$B_choice_3', '$B_choice_4')");

  $result = mysqli_query($mysqli, "INSERT INTO C(C_comment_1, C_comment_2, C_comment_3, C_comment_4, C_comment_5, C_comment_6, C_comment_7, C_choice_1, C_choice_2, C_choice_3, C_choice_4, C_choice_5, C_choice_6, C_choice_7) VALUES('$C_comment_1', '$C_comment_2', '$C_comment_3', '$C_comment_4', '$C_comment_5', '$C_comment_6', '$C_comment_7', '$C_choice_1', '$C_choice_2', '$C_choice_3', '$C_choice_4', '$C_choice_5', '$C_choice_6', '$C_choice_7')");

  $result = mysqli_query($mysqli, "INSERT INTO D(D_comment_1, D_comment_2, D_comment_3, D_choice_1, D_choice_2, D_choice_3) VALUES('$D_comment_1', '$D_comment_2', '$D_comment_3', '$D_choice_1', '$D_choice_2', '$D_choice_3')");

  $result = mysqli_query($mysqli, "INSERT INTO E(E_comment_1, E_comment_2, E_comment_3, E_comment_4, E_comment_5, E_comment_6, E_comment_7, E_choice_1, E_choice_2, E_choice_3, E_choice_4, E_choice_5, E_choice_6, E_choice_7) VALUES('$E_comment_1', '$E_comment_2', '$E_comment_3', '$E_comment_4', '$E_comment_5', '$E_comment_6', '$E_comment_7', '$E_choice_1', '$E_choice_2', '$E_choice_3', '$E_choice_4', '$E_choice_5', '$E_choice_6', '$E_choice_7')");

  $result = mysqli_query($mysqli, "INSERT INTO F(F_comment_1, F_choice_1) VALUES('$F_comment_1', '$F_choice_1')");

  $result = mysqli_query($mysqli, "INSERT INTO recommendation(RECOM_choice_1) VALUES('$RECOM_choice_1')");

   if (mysqli_multi_query($mysqli,$result)){
      echo 'query executed';
  }
}
if(isset($_POST['view'])){
  header ("location: RESULT.php");
}

?>