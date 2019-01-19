<html>
<body>
<?php

include("check.php");

$name=$_POST["name"];
$roll_no=$_POST["roll_no"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$gender=$_POST["gender"];
$category=$_POST["category"];
$branch=$_POST["branch"];

if(isset($_POST["insert"]))
{
    $sql="insert into student (Name,Roll_no,Address,Contact,Gender,Category,Branch)values('$name','$roll_no','$address',$contact,'$gender','$category','$branch')";
    if($conn->query($sql)===TRUE) 
    {
    echo "<br>"."New record inserted successfully";
    }
    else
    {
    echo "<br>"."Error:" .$sql .  "<br>" .$conn->error;
    }
}

else if(isset($_POST["delete"]))
{
    if($name!=NULL)
        $sql="DELETE from student where Name='$name'";

    else if($roll_no!=NULL)
        $sql="DELETE from student where Roll_no='$roll_no'";

    else if($address!=NULL)
        $sql="DELETE from student where Address='$address'";

    else if($contact!=NULL)
        $sql="DELETE from student where Contact='$contacts'";

    else if($gender!=NULL)
        $sql="DELETE from student where Gender='$gender'";

    else if($category!=NULL)
        $sql="DELETE from student where Category='$category'";

    else if($branch!=NULL)
        $sql="DELETE from student where Branch='$branch'";



    if (mysqli_query($conn, $sql)) {
        echo "<br>"."Record deleted successfully";
        } 
    else {
            echo "<br>"."Error deleting record: " . mysqli_error($conn);
        }
        

}


else if(isset($_POST["update"]))
{
if($roll_no!=NULL)
    {
        if($name!=NULL)
            $sql="UPDATE student SET Name='$name' WHERE Roll_no like '$roll_no'";

        else if($address!=NULL)
            $sql="UPDATE student SET Address='$address' WHERE Roll_no like '$roll_no'";

        else if($contact!=NULL)
            $sql="UPDATE student SET Contact='$contact' WHERE Roll_no like '$roll_no'";

        else if($gender!=NULL)
            $sql="UPDATE student SET Gender='$gender' WHERE Roll_no like '$roll_no'";

        else if($category!=NULL)
            $sql="UPDATE student SET Category='$category' WHERE Roll_no like '$roll_no'";

        else if($branch!=NULL)
            $sql="UPDATE student SET Branch='$branch' WHERE Roll_no like '$roll_no'";


        if (mysqli_query($conn, $sql)) {
            echo "<br>"."Record updated successfully";
            } 
        else {
                echo "<br>"."Error updating record: " . mysqli_error($conn);
            }
        
    }   
}
mysqli_close($conn);

?>
</body>
</html>