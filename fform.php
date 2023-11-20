<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
    <h1>Contact List</h1>

    <?php
    // Fake data
    $contacts = [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'],
        ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'],
        ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '555-123-4567'],
    ];

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newContact = [
            'id' => count($contacts) + 1,
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
        ]; 
      array_push($contacts,$newContact);
 
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?= $contact['id']; ?></td>
                    <td><?= $contact['name']; ?></td>
                    <td><?= $contact['email']; ?></td>
                    <td><?= $contact['phone']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>

        <input type="submit" value="Add Contact">
    </form>
</body>
</html>
