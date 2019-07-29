<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height: 250px;
        width: 300px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }

    .login input {
        padding: 5px;
        margin: 5px
    }

    button {
        padding: 5px;
        margin: 5px;
    }

    select {
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>Simple Calculator</h2>
        <input type="number" name="number1" size="30" placeholder="number1"/></br>
        <select name="opera">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">/</option>
        </select>
        </br>
        <input type="number" name="number2" size="30" placeholder="number2"/>
        </br>
        <input type="submit" value="Kết Quả"/>

    </div>
</form>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = $_REQUEST['number1'];
    $number2 = $_REQUEST['number2'];
    $opera = $_REQUEST['opera'];
    $result = 0;
    if ($opera == '+') {
        $result = $number1 + $number2;
        echo "<h1>Kết quả là: ".$result ."</h1></br>";
    }
    else if ($opera == '-'){
        $result = $number1 - $number2;
        echo "<h1>Kết quả là: ".$result ."</h1></br>";
    }
    else if ($opera == '*'){
        $result = $number1 * $number2;
        echo "<h1>Kết quả là: ".$result ."</h1></br>";
    }
    else if ($opera == '/'){
        $result = $number1 / $number2;
        echo "<h1>Kết quả là: ".$result ."</h1></br>";
    }
}
?>

