<html>
<body>

<?php

echo "<h1>Hello World</h1><br>";
echo "Name: Kumud <br>";
echo "Branch: AI <br>";

$name = "<i>Kumud Sharma</i>";
$cgpa = 10;
$branch = "AI";

$year = date("Y");
$month = date("m");

if ($month < 7) {
    echo "Year $year";
}

?>

<h1><?= $name ?></h1>
<p><?= $branch ?></p>
<p><?= $cgpa ?></p>

<p>Date: <?= date("Y-m-d h:i:s") ?></p>
<p>You are visiting from: <?= $_SERVER["REMOTE_ADDR"] ?></p>

</body>
</html>
