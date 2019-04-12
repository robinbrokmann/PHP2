<html>
<body>
<?php
$getal1 = "";
$getal2 = "";
$manier = "";
$uitkomst = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('IncludeA.php');
    $getal1 = (int)$_POST["getal1"];
    $getal2 = (int)$_POST["getal2"];
    $manier = $_POST["taskOption"];
    $uitkomst = berekenGetal($getal1, $getal2, $manier);
}
?>
<form method="post">
    getal 1: <input type="text" name="getal1" value="<?php echo $getal1 ?>">
    <select name="taskOption">
        <option value="plus">+</option>
        <option value="min">-</option>
        <option value="vermenigvuldigen">x</option>
        <option value="delen">:</option>
    </select>
    getal 2: <input type="text" name="getal2" value="<?php echo $getal2 ?>">
    <input type="submit" value="=">
    <?php echo $uitkomst; ?>
</form>
</body>

</html>


