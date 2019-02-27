<?php


include('conn.php');


if (isset($_GET['userid']) && is_numeric($_GET['userid']))
{

$id = $_GET['userid'];


if ($stmt = $mysqli->prepare("DELETE FROM students WHERE userid = ? LIMIT 1"))
{
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();


header("Location: view.php");
}
else

{
header("Location: view.php");
}

?>