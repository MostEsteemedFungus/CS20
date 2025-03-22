<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f1f1f1;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
        .closed {
            color: #ff0000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Business Office Hours</h1>
        <table>
            <tr>
                <th>Day</th>
                <th>Office Hours</th>
            </tr>
            <?php
    
            $office_hours = array(
                "Monday"    => "9am - 5pm",
                "Tuesday"   => "9am - 5pm",
                "Wednesday" => "9am - 5pm",
                "Thursday"  => "9am - 5pm",
                "Friday"    => "9am - 5pm",
                "Saturday"  => "Closed",
                "Sunday"    => "Closed"
            );
            
            // Loop through the array and display the day and hours
            foreach ($office_hours as $day => $hours) {
                echo "<tr>";
                echo "<td>$day</td>";
                if ($hours == "Closed") {
                    echo "<td class='closed'>$hours</td>";
                } else {
                    echo "<td>$hours</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
