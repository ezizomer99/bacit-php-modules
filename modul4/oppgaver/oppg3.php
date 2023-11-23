<?php
$users = [
    'name' => 'Navn navnesen',
    'email' => 'navn@navnmail.com',
    'phone' => '12345678',
    'age' => 25,
];

$newName = $newEmail = $newPhone = $newAge = '';

function updateUserProfile($name, $email, $phone, $age) {
    global $users;
    $users['name'] = $name;
    $users['email'] = $email;
    $users['phone'] = $phone;
    $users['age'] = $age;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_name'])) {
        $newName = $_POST['new_name'];
    }
    if (isset($_POST['new_email'])) {
        $newEmail = $_POST['new_email'];
    }
    if (isset($_POST['new_phone'])) {
        $newPhone = $_POST['new_phone'];
    }
    if (isset($_POST['new_age'])) {
        $newAge = $_POST['new_age'];
    }

    updateUserProfile($newName, $newEmail, $newPhone, $newAge);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3</title>
</head>
<body>
    <button onclick="history.back()">Tilbake</button>

    <h1>User Profile</h1>

    <h2>User Information</h2>
    <p>Name: <?php echo $users['name']; ?></p>
    <p>Email: <?php echo $users['email']; ?></p>
    <p>Phone: <?php echo $users['phone']; ?></p>
    <p>Age: <?php echo $users['age']; ?></p>

    <h2>Edit User Information</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="new_name">Name:</label>
        <input type="text" name="new_name" id="new_name" value="<?php echo $newName; ?>"><br>

        <label for="new_email">Email:</label>
        <input type="text" name="new_email" id="new_email" value="<?php echo $newEmail; ?>"><br>

        <label for="new_phone">Phone:</label>
        <input type="text" name="new_phone" id="new_phone" value="<?php echo $newPhone; ?>"><br>

        <label for="new_age">Age:</label>
        <input type="text" name="new_age" id="new_age" value="<?php echo $newAge; ?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
