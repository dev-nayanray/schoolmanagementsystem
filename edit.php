<?php include 'header.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission
    $newName = $_POST['new_name'];
    $newEmail = $_POST['new_email'];
    $newContact = $_POST['new_contact'];

    $updateSql = "UPDATE users SET name = '$newName', email = '$newEmail', contact = '$newContact' WHERE uesr_id = $userId";
    
    if (mysqli_query($conn, $updateSql)) {
        echo 'Profile updated successfully.';
    } else {
        echo 'Error updating profile: ' . mysqli_error($conn);
    }
}
?>
<main class="container">
<form method="post" action="">
    <label for="new_name">Name:</label>
    <input type="text" id="new_name" name="new_name" value="<?php echo $userInfo['name']; ?>">
    
    <label for="new_email">Email:</label>
    <input type="email" id="new_email" name="new_email" value="<?php echo $userInfo['email']; ?>">
    
    <label for="new_contact">Contact:</label>
    <input type="text" id="new_contact" name="new_contact" value="<?php echo $userInfo['contact']; ?>">
    
    <input type="submit" value="Update Profile">
</form>
    </main>

<?php include 'footer.php';?> 