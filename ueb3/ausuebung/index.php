<form action="index.php" method="post">
    <input name="ueb1" type="submit" value=" Exercise  1 ">
</form>
<?php if (isset($_POST['ueb1'])) {
    // Do required actions here
    header('Location:' . 'ueb1/index.html');
    exit;
}
?>
