
<?php
include("config.php");
$id = $_GET['id'];

$sql = "SELECT proposal.pub FROM proposal WHERE id = '$id'";
$result = mysqli_query($con, $sql);
if($result == true)
{
    $sql ="UPDATE proposal SET pub = 'Yes' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result == true){
        $sql = "SELECT * FROM proposal WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result)  <= 1) {

                while ($row = mysqli_fetch_array($result)) {
                $title = $row['1'];
                $loc = $row['2'];
                $price = $row['3'];
                $room = $row['4'];
                $kitchen = $row['5'];
                $bath = $row['6'];
                $water = $row['12'];
                $sec = $row['13'];
                $people = $row['14'];
                $lightfee = $row['15'];
                $securityfee = $row['16'];
                $dur = $row['17'];
                $user_id = $row['7'];;             
                $aimg = $row['8'];
                $aimg1 =$row['9'];
                $aimg2 =$row['10'];
                $aimg3 =$row['11'];
                $sql = "SELECT * FROM property WHERE p_id = '$user_id'";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);
                if ($num <= 1){
                $sql = "INSERT INTO property (utitle, ulocation, uprice, uroom,ukitchen,p_id, ubathroom , uwater, usecuritty,upeople,ulightfee,usecurityfee,uduration, ubuildpic, uroompic, ukitchenpic, ubathroompic) VALUES ('$title', '$loc', '$price', '$room', '$kitchen','$user_id', '$bath','$water','$sec','$people','$lightfee','$securityfee','$dur', '$aimg','$aimg1','$aimg2','$aimg3')";
                $result = mysqli_query($con, $sql);
                if($result){
                    echo "<script> alert('Published Successfully')</script>";
                    header("Location:propose.php?echo=true");                
                }
            }else{
                echo "<script> alert('Already Exist')</script>";
                header("Location:propose.php?echo=false1");                
            }
        }
     }
    }
    else{
        echo "<script> alert('Failed to Publish')</script>";
        header("Location:propose.php?echo=false2");    
    } 
}
else{
	echo "<script> alert('Couldn't find the id')</script>";
	header("Location:propose.php?echo=false3");    
}
mysqli_close($con);
?>