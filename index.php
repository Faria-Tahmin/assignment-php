<!DOCTYPE html>
<html>
<head>
    <title>Data Table Show </title>

    <style type="text/css">
        
        td{
            padding: 30px;
            background-image: linear-gradient(20deg , white,peachpuff);
            font-size: 20px;
        }

       td:hover{
        padding: 50px;
        font-weight: bolder;
        font-size: 30px;

       }
    

    </style>
</head>
<body>

<div class="container">

<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "useraccounts";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT name as NAME, id as ID , department as DEPARTMENT, institution as INSTITUTION, email as EMAIL, contact as CONTACT FROM users");
$all_property = array();  //declare an array for saving property

//showing property
echo '         <table class="data-table" border="5" bordercolor="darkslategrey">
        <tr class="data-heading">            ';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>'     .        $property->name         .     '</td>'; 
    echo '    '; //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; 

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "           <tr>         ";
    foreach ($all_property as $item) {
        echo '<td>' .       $row[$item]     . '</td>'; //get items using property value
    }
    echo ' </tr> ';
}
echo "</table>";
?>
</div>
</body>
</html>



