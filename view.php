<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <style>
        * {
            margin: 0;
            padding:0;
        }

        h1, h2, h3 {
            margin: 0.5em 0;
        }

        body {
            width: 880px;
            margin: 0 auto;
            padding: 1em 0;
            
        }

        table {
            border-collapse: collapse;
            margin: 2em 0;
        }

        th, td {
            padding: 0.5em;
        }

        a {
            text-decoration:none;
            padding: 0.5em;
            border-radius: 4px;
            border: 1px solid #000;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="data-wrapper">
        <?php
            $content = file_get_contents('db.html');
            echo $content;
        ?>
    </div>
    <a href="index.html">Perbarui Data</a>
</body>
</html>