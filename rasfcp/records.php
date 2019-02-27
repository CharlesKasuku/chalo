<?php

include("conn.php");


function renderForm($first = '', $last ='', $admno, $error = '', $id = '')
{ ?>

<!DOCTYPE HTML>

<html>
    
<head> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
 <link rel="stylesheet" href="bootstrap1/css/bootstrap.css" type="text/css"  /> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.css" type="text/css"  />
<title>
<?php if ($id != '') { echo "Edit Record"; } ?>
</title> 
    <style type="text/css">
        
    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 2px solid #ddd;
}

th, td {background-color: blue;
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
         fieldset{
            width: 30%;
            margin-left: 40%;
            height: 30%;
            border-radius: 30px;
        }
         
        body {background-color:aliceblue;
   }
        
        h1,h10,h7,h8,h9 {color: blue;}
    </style>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
    
<body>

    
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
. "</div>";
} ?>
<fieldset>
    <h1>
    <?php if ($id != '') { echo "Edit Record Below"; } ?>
</h1>
<form action="" method="post">
<div>
    
<?php if ($id != '') { ?>
<input type="hidden" name="userid" value="<?php echo $id; ?>" />
<strong><h10>userid:</h10> <?php echo $id; ?></strong>
<?php } ?><br/>

<strong><h7>firstname:</h7> </strong> <input type="text" name="firstname" class="form-control"
value="<?php echo $first; ?>" requred/><br/>
<strong><h8>secondname:</h8> </strong> <input type="text" name="secondname" class="form-control"
value="<?php echo $last; ?>" requred/><br/>
<strong><h9>admno: </h9></strong> <input type="text" name="admno" class="form-control"
value="<?php echo $admno; ?>" requred/><br/><br/>
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>
    </fieldset>
</body>
</html>

<?php }


if (isset($_GET['userid']))
{

if (isset($_POST['submit']))
{

if (is_numeric($_POST['userid']))
{

$id = $_POST['userid'];
$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
$secondname = htmlentities($_POST['secondname'], ENT_QUOTES);
$admno = htmlentities($_POST['admno'], ENT_QUOTES);


if ($firstname == '' || $secondname == '' || $admno='')
{

$error = 'ERROR: Please fill in all required fields!';
renderForm($firstname, $secondname, $admno, $error, $id);
}
else
{

if ($stmt = $mysqli->prepare("UPDATE students SET firstname = ?, secondname = ?,admno= ?
WHERE userid=?"))
{
$stmt->bind_param("ssi", $firstname, $secondname,$admno, $id);
$stmt->execute();
$stmt->close();
}

else
{
echo "ERROR: could not prepare SQL statement.";
}


header("Location: view.php");
}
}

else
{
echo "Error!";
}
}

else
{

if (is_numeric($_GET['userid']) && $_GET['userid'] > 0)
{

$id = $_GET['userid'];


if($stmt = $mysqli->prepare("SELECT userid, firstname, secondname, admno FROM students WHERE userid=?"))
{
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($id, $firstname, $secondname,$admno);
$stmt->fetch();


renderForm($firstname, $secondname,$admno, NULL, $id);

$stmt->close();
}

else
{
echo "Error: could not prepare SQL statement";
}
}

else
{
header("Location: view.php");
}
}
}




$mysqli->close();
?>