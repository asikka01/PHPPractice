<!DOCTYPE html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Office Hours</title>
        <style>
                body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        padding: 20px;
                }

                table {
                        width: 50%;
                        margin: 0 auto;
                        border-collapse: collapse;
                }

                th, td {
                        padding: 10px;
                        text-align: left;
                        border-bottom: 1px solid #ddd;
                }

                th {
                        background-color: #4CAF50;
                        color: white;
                }
        </style>
</head>
<body>
        <h2>Office Hours</h2>
        <table>
                <tr><th>Day</th><th>Hours</th></tr>
                <?php
                        $office_hours = [
                                "Monday" => "9am - 5pm",
                                "Tuesday" => "9am - 5pm",
                                "Wednesday" => "9am - 5pm",
                                "Thursday" => "9am - 5pm",
                                "Friday" => "9am - 4pm",
                                "Saturday" => "10am - 2pm",
                                "Sunday" => "Closed"
                        ];

                        foreach ($office_hours as $day => $hours) {
                                echo "<tr><td>$day</td><td>$hours</td></tr>";
                        }
                ?>
        </table>
</body>
</html>
