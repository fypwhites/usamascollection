<?php
 
$conn = mysqli_connect('localhost', 'root', '', 'attendancemng');
$query= "SELECT * FROM users";
$query_run = mysqli_query($conn,$query);
 
//echo "$total";
?>
<!DOCTYPE html>
<html>
    <head>
        <style>

body
{
    background-color:powderblue;
}
table {

  font-family: myFirstFont;
  border-collapse: collapse;
  width: 100%;
  
  
}
 
td, th {
  border: 2px solid darkcyan;
  text-align: left;
  padding: 8px;
}
 
tr:nth-child(even) {
  background-color: wheat;
}
a
{
    border: 0;
 	font-family: myFirstFont;
 	height: 80px; 
	width: 100px;
	align-content: right;
	
	font-size: 25px;
	margin-left: 10px;
	margin-right: 10px;
	background-color: blue;
	border-style: groove;
	color: white;
	margin-top: 0px;
    border-radius:5px;
	border-bottom: 2px solid darkcyan;
}

</style>
        </style>
        <title>Fetch data from database.</title>
        
     
    </head>
    <body>
        <h1 align ="center">Data of Registered Users</h1>
        <table>
        <tr>
        <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>E-MAIL</th>
                    <th>PASSWORD</th>
                    <th>Operations</th>
                                    
        </tr>
  </tr>
            <thead>
                
            </thead>
 
            <tbody>
                <?php
                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $row)
                    {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a style="background-color:red" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                        
                        </tr>
 
                        <?php
                    }
 
                }
                else
                {
                ?>
                <tr>
                    <td>Empty Database</td>
                </tr>
 
                <?php
                }
                ?>
 
            </tbody>
        </table>
    </body>
</html>