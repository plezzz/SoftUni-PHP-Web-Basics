<form method="get">
    <textarea rows="10" name="text"></textarea><br>
    <input type="submit" value="Extract">
</form>

<?php
if (isset($_GET["text"])) {
    $string = $_GET["text"];
    $pattern = '/(?<capital>\b([A-Z]+)\b)/m';
    preg_match_all($pattern, $string, $matches, PREG_SET_ORDER, 0);

    $capital = [];
    foreach ($matches as $value) {
        $capital[] = $value["capital"];
    }
    echo implode(", ", $capital);
}