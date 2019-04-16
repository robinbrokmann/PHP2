<html>
<body>
<?php
$invoer = "";
$type = "";
$output = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('IncludeB.php');

    $invoer = $_POST["invoer"];
    $type = $_POST["taskOption"];

    if(empty($invoer)){
        $output = "voor een waarde in";
    } else {}
}

?>

<form method="post">
    invoer: <input type="text" name="invoer" value= "<?php echo $invoer ?>">
    <select name="taskOption">
        <option value="alfabetisch">is deze variabele alleen alfabetisch ?</option>
        <option value="numeriek">is deze variabele aleen nummeriek ?</option>
        <option value="postcodecheck">nederlandse postcodecheck</option>
        <option value="mobielnummer">nederland mobiele nummer check</option>
        <option value="manvrouw">is deze variabele alleen "man" of "vrouw"?</option>
        <option value="mail">is deze variabele een geldig mail adres?</option>
        <option value="adres">is deze variabele een adres? </option>
    </select>
    <input type="submit">
    <?php echo $output?>
</form>
</body>

</html>