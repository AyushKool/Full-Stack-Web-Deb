<html>
<head>
    <title>Assignment 3</title>
</head>

<body>
    <h2>Addition (Q2)</h2>
    <form method="POST" action="q2.php">
        <table>
            <tr>
                <td colspan="1">Number 1: <input type="number" name="n1" required></td>
                <td colspan="1">Number 2: <input type="number" name="n2" required></td>
                <td colspan="1"><input type="submit" value="Add" name="Add"></td>
            </tr>
        </table>

    </form>
    <?php
    if (isset($_POST["Add"]) && !empty($_POST["n1"]) && !empty($_POST["n2"])) {
        $sum = $_POST["n1"] + $_POST["n2"];
        echo  "Sum = $sum";
    }
    ?>
</body>

</html>