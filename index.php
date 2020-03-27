<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h2>Data Sebaran Covid-19</h2>
    <h3>api url : https://api.kawalcorona.com/indonesia/provinsi</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $response = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
            $data = json_decode($response,true);
            $i = 0;
            foreach ($data as $key => $value1) {
                echo "<tr>";
                    echo "<td>".++$i."</td>";
                foreach($value1 as $value2){
                    echo "<td>".$value2['Provinsi']."</td>";
                    echo "<td>".$value2['Kasus_Posi']."</td>";
                    echo "<td>".$value2['Kasus_Semb']."</td>";
                    echo "<td>".$value2['Kasus_Meni']."</td>";
                }
                echo "</tr>";
            }
            
        ?>
        </tbody>
    </table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>