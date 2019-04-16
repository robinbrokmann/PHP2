<html>
<body>
<form method="post">
    getal 1: <input type="text" name="getal1" value= "<?php $getal ?>">
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
</form>
</body>

</html>