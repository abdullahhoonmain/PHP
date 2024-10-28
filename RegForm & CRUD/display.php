<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <style>
        table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    border-radius: 4px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #007BFF;
    color: white;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e6f2ff;
}

caption {
    margin-bottom: 10px;
    font-size: 1.2em;
    color: #333;
    font-weight: bold;
    text-align: left;
}
body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
            margin: 0;
        }
        h3 {
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        .user-image {
            max-width: 70px; /* Set a maximum width */
            height: auto;     /* Maintain aspect ratio */
            border-radius: 4px; /* Optional: add some border radius */
        }
        button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

<?php 

$sql= "SELECT * FROM phpform";
$data=mysqli_query($con, $sql);
echo " <h3>Record</h3>";
echo "<a href='regform.html'> GoTo Registration Form</a>";
echo"<table>";
echo"<tr>";
echo"<th>Name</th>";
echo"<th>Email</th>";
echo"<th>Gender</th>";
echo"<th>Image</th>";
echo"<th>Operations</th>";


echo" </tr>";

while($result= mysqli_fetch_assoc($data))
{
    echo '<tr>';
    echo '<td>' . $result['Name'] . '</td>';
    echo '<td>' . $result['Email'] . '</td>';
    echo '<td>' . $result['Gender'] . '</td>';


    echo '<td><center><img src="images/' . $result['image'] . '" class= "user-image" /></center></td>';
    echo '<td>
        <a href="update.html?Email=' .$result['Email']. '"><button>Update</button></a>
        </td>';
    echo '</tr>';
}
echo '</table>';

?>
    
</body>
</html>