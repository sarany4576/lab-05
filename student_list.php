
<?php
require("connect_db.php");
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<table border=1 width=40%>";
echo "<tr><th>student Code</th><th>student Name</th><th>gender</th><th>Operationt</th></tr>";
while($row = mysqli_fetch_assoc($result)){
echo
"<tr><td>".$row["student_code"]."</td><td>".$row["student_name"]."</td><td>".$row["gender"]."</t
d>";
echo "<td><a href=edit_student.php?student_code=".$row["student_code"].">Edit</a>


<a href=delete_student.php?student_code=".$row["student_code"].">delete</a></td> </tr>";

}
echo "</table>";
echo "<br><a href=add_student.php>Add Student</a>";
echo "</center>";
?>