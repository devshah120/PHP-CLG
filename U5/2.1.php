if(isset($_POST['delete']))
{
$uname=$_POST['uname'];
$con=new 
mysqli("localhost","root","password","Site");
if(!empty($uname))
{
$sql="delete from register where 
uname='$uname'";
if($con->query($sql)==TRUE)
{
echo "$uname Deleted";
echo "<a href='userlist.php'> Check Delete</
a>";
//header('Location:userlist.php');
}
else
{
echo "Not a registered user";
}
}
}