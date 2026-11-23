<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 5a Q2</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px auto; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #333; padding: 8px 12px; text-align: left; }
    </style>
</head>
<body>
<?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
    ];
?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo ($student['name']); ?></td>
                    <td><?php echo ($student['program']); ?></td>
                    <td><?php echo ((string)$student['age']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>