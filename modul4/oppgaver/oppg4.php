<?php
$jobListings = [
    [
        'title' => 'Web Developer',
        'description' => 'Develop and maintain web applications.',
        'due_date' => '2023-09-30',
        'location' => 'New York, USA',
    ],
    [
        'title' => 'Graphic Designer',
        'description' => 'Design graphics and visual content.',
        'due_date' => '2023-10-15',
        'location' => 'Los Angeles, USA',
    ],
    [
        'title' => 'Marketing Manager',
        'description' => 'Create and execute marketing campaigns.',
        'due_date' => '2023-11-05',
        'location' => 'London, UK',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <button onclick="history.back()">Tilbake</button>
    <h1>Job Listings</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Location</th>
        </tr>
        <?php foreach ($jobListings as $job) : ?>
        <tr>
            <td><?php echo $job['title']; ?></td>
            <td><?php echo $job['description']; ?></td>
            <td><?php echo $job['due_date']; ?></td>
            <td><?php echo $job['location']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
