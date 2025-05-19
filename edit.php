<?php

$user_id = $_REQUEST[""];

$user_id;

include("connections.php");

$get_record = mysqli_query($connections, "SELECT * FROM myinfo WHERE id='$user_id'");

while($row_edit = mysqli_fetch_assoc($get_record)){

    echo $db_name = $row_edit["name"];
    echo $db_address = $row_edit["address"];
    echo $db_email = $row_edit["email"];
    echo $db_section = $row_edit["section"];
    echo $db_contact = $row_edit["contact"];
}

?>


<form method="POST" action="">

<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

<input type="text" name="new_name" value="<?php echo $db_name; ?>">
<Br>

<input type="text" name="new_address" value="<?php echo $db_address; ?>">
<Br>

<input type="text" name="new_email" value="<?php echo $db_email; ?>">
<Br>

<input type="text" name="new_section" value="<?php echo $db_section; ?>">
<Br>

<input type="text" name="new_contact" value="<?php echo $db_contact; ?>">
<Br>

<input type="submit" value="Update">
</form>