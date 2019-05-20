<form>
    Name: <input type="text" name="name"/><br>
    Phone number: <input type="text" name="phone"/><br>
    Age: <input type="text" name="age"/><br>
    Address: <input type="text" name="address"/><br>
    <input type="submit">
</form>

<?php
if (isset($_GET['name']) && $_GET['phone'] &&
    $_GET['age'] && $_GET['address']) {

    $name = htmlspecialchars($_GET['name']);
    $phone = htmlspecialchars($_GET['phone']);
    $age = htmlspecialchars($_GET['age']);
    $address = htmlspecialchars($_GET['address']);
}
?>
<table border="2">
    <tr>
        <td style="background-color: orange">Name</td>
        <td><?= $name ?></td>
    </tr>
    <tr>
        <td style="background-color: orange">Phone number</td>
        <td><?= $phone ?></td>
    </tr>
    <tr>
        <td style="background-color: orange">Age</td>
        <td><?= $age ?></td>
    </tr>
    <tr>
        <td style="background-color: orange">Address</td>
        <td><?= $address ?></td>
    </tr>

</table>