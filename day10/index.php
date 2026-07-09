<?php
include("header.php");
?>

<form action="process.php" method="POST">


    <label>Name</label>
    <input type="text" name="name" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Mobile</label>
    <input type="text" name="mobile" required>

    <label>Gender</label>
    <select name="gender" required>
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>

    <label>Password</label>
    <input type="password" name="password" required>

    <button type="submit" name="submit">Register</button>

</form>

<?php
include("footer.php");
?>