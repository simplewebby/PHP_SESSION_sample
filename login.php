

<?php
session_start();

?>
<form method="post" action="checklogin.php">
    ID <input type="text" name="id" /><br />
    First Name <input type="text" name="fname" /><br />
    Last Name <input type="text" name="lname" /><br />
    State <input type="text" name="state" /><br />
    <input type="submit" name="submit" value="submit" />
</form>
