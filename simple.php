<html>
<body>

<form action="createdb.php" method="post">
create new Database : <input type="text" name="create">
<input type="submit">
</form>

<!--CREATE--->
<form action="cpu0.php" method="post">
Delete Database: <input type="text" name="delete">
<input type="submit">
</form>



<!--Create Table --->
<form action="create-tab.php" method="post">
CREATE TABLE: <input type="text" name="tbcreate">
INSIDE DATABASE CALLED: <input type="text" name="db_use_sel">
<input type="submit">
</form>


<!--Delete table--->
<form action="cpu4.php" method="post">
DELET TABLE: <input type="text" name="tbdelete">
INSIDE DATABASE CALLED: <input type="text" name="deldb">
<input type="submit">
</form>


</body>
</html>