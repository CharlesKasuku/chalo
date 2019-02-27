<html>
<head>
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1>View Records</h1>

<?php

include('conn.php');


$per_page = 3;


if ($result = $mysqli->query("SELECT firstname, secondname, admno FROM students ORDER BY userid"))
{
if ($result->num_rows != 0)
{
$total_results = $result->num_rows;

$total_pages = ceil($total_results / $per_page);


if (isset($_GET['page']) && is_numeric($_GET['page']))
{
$show_page = $_GET['page'];


if ($show_page > 0 && $show_page <= $total_pages)
{
$start = ($show_page -1) * $per_page;
$end = $start + $per_page;
}
else
{

$start = 0;
$end = $per_page;
}
}
else
{

$start = 0;
$end = $per_page;
}


echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";
for ($i = 1; $i <= $total_pages; $i++)
{
if (isset($_GET['page']) && $_GET['page'] == $i)
{
echo $i . " ";
}
else
{
echo "<a href='pages.php?page=$i'>$i</a> ";
}
}
echo "</p>";


echo "<table border='1' cellpadding='10'>";
echo "<tr> 
<th>userid</th> 
<th>firstname</th> 
<th>secondname</th> 
<th>admno</th>
<th></th>
<th></th>
</tr>";


for ($i = $start; $i < $end; $i++)
{

if ($i == $total_results) { break; }


$result->data_seek($i);
$row = $result->fetch_row();


echo "<tr>";
echo '<td>' . $row[0] . '</td>';
echo '<td>' . $row[1] . '</td>';
echo '<td>' . $row[2] . '</td>';

echo '<td><a href="records.php?id=' . $row[0] . '">Edit</a></td>';
echo '<td><a href="delete.php?id=' . $row[0] . '">Delete</a></td>';
echo "</tr>";
}


echo "</table>";
}
else
{
echo "No results to display!";
}
}

else
{
echo "Error: " . $mysqli->error;
}


$mysqli->close();

?>
</body>
</html>
</html>