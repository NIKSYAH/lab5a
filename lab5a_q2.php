<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 5a Q2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php 
        $students = [
            ["Name" => "Alice", "Program" => "BIP", "Age" => 21],
            ["Name" => "Bob", "Program" => "BIS", "Age" => 20],
            ["Name" => "Raju", "Program" => "BIT", "Age" => 22]
        ];
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php 
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>" . $student["Name"] . "</td>";
                echo "<td>" . $student["Program"] . "</td>";
                echo "<td>" . $student["Age"] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>

</html>