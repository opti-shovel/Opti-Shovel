<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="2">
    <link rel="stylesheet" type="text/css" href="./css/style1.css" media="screen"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 1200px;
            padding: 20px;
            border-radius: 10px;
        }
        .left {
            flex-basis: 40%;
            padding: 20px;
        }
        .right {
            flex-basis: 58%;
            padding: 20px;
            margin-top: 50px;
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        .truck-info {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            vertical-align: top; /* Align content to the top */
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .status {
            font-weight: bold;
            color: #333;
        }
        .progress-container {
            text-align: center;
            margin-top: 5px;
        }
        progress {
            width: 100%;
        }
        tr{
            font-size:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>DUMPER SENSOR DATA</h1>
            <div class="truck-info">
                <img src="./image/process/process4.jpg" alt="Truck" width="200px">
                <h5 class="mt-3">Truck 1</h5>
                <p>Location: Raniganj</p>
            </div>
        </div>
        <div class="right">
            <?php
            $dbname = 'example';
            $dbuser = 'root';
            $dbpass = '';
            $dbhost = 'localhost';

            $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
            if($conn->connect_error){
                die("connection failed:" . $conn->connect_error);
            }

            $sql= "SELECT id, weight FROM weight_measure ORDER BY id DESC LIMIT 1";
            echo '<table cellspacing="2" cellpadding="2">
                    <tr>
                        <th>Weight (in g)</th>
                        <th>Progress</th>
                        <th>Status</th>
                    </tr>';
            $prev_weight = 0;
            if($result = $conn->query($sql)){
                if($row = $result->fetch_assoc()){
                    $row_id = $row["id"];
                    $row_weight = $row["weight"];
                    if($row_weight>=200){
                        $status="Overweight";
                    }
                    else if($row_weight>0 && $row_weight<200){
                        if($row_weight==$prev_weight){
                            $status="Still";
                        }else{
                            $status="Normal Weight";
                            $prev_weight=$row_weight;
                        }
                    }
                    else{
                        $row_weight=0;
                        $status="No Weight";
                        $prev_weight=$row_weight;
                    }

                    echo '<tr>
                        <td>' . $row_weight . '</td>
                        <td>
                            <div class="progress-container">
                                <progress max="200" value="' . $row_weight . '"></progress>
                            </div>
                        </td>
                        <td><span class="status">' . $status . '</span></td>
                        </tr>';
                }
                $result->free();
            }
            $conn->close();
            ?>
            <script>
                var progressElement = document.querySelector('progress');
                if (progressElement.value >= 200) {
                    setTimeout(function() {
                        alert('Value has reached 200 or more!');
                    }, 1000); // Delay the alert for 1 second (1000 milliseconds)
                }
            </script>
        </div>
    </div>
</body>
</html>
