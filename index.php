<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bunga</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f7; 
            color: #333;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color:rgb(255, 120, 141); 
            margin-bottom: 30px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color:rgb(181, 168, 237); 
            color: white;
        }

        tr:nth-child(even) {
            background-color: #eaf3fb; 
        }

        tr:hover {
            background-color: #ffebf0; 
        }

        td {
            font-size: 16px;
        }

        table, th, td {
            border: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>
    <h1>Menampilkan Bunga - Bunga</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Bunga</th>
                <th>Jenis Bunga</th>
                <th>Warna</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "Bunga.php";
            $b = new Bunga();
            $datas = $b->getDataB();

            foreach ($datas as $data) {
                echo "<tr>
                        <td>$data[nama_bunga]</td>
                        <td>$data[jenis_bunga]</td>
                        <td>$data[warna]</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
