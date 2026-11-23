<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 5a Q1</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 20px auto; font-family: Arial, sans-serif; }
        td, th { border: 1px solid #333; padding: 8px 12px; text-align: left; }
    </style>
</head>
<body>
<?php
    $name = "FAIZ AIMAN BIN ZHARUDIN";
    $matric = "AI240079";
    $course = "Bachelor of Computer Science (Information Security) with Honours";
    $yearOfStudy = "Year 3";
    $address = "NO.3, JALAN MANIS";
?>
    <table>
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo htmlspecialchars($name); ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo htmlspecialchars($matric); ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo htmlspecialchars($course); ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo htmlspecialchars($yearOfStudy); ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo htmlspecialchars($address); ?></td>
        </tr>
    </table>
</body>
</html>