<form>
    <textarea name="input"></textarea><br>
    <input type="submit" value="Color text">
</form>

<?php
if (isset($_GET['input'])) {
    $chars = htmlspecialchars($_GET['input']);
    $chars= str_replace(' ', '', $chars);
    $chars=str_split($chars);

    foreach ($chars as $char) {
        $check = ord($char);
        if ($check % 2 == 0)
            echo "<span style='color:red'>" . $char . " </span>";
        else
            echo "<span style='color:blue'>" . $char . " </span>";
    }
}