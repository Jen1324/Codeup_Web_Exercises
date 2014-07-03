<?php

function getOffset() {
    $page = isset($_GET['page']) ? $_GET['page'] : 1;

    return ($page - 1) * 4;
}

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'jen', 'letmein');
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$parks = $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET ' . getOffset())->fetchAll(PDO::FETCH_ASSOC);

$count = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

$numPages = floor($count / 4);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>National Parks</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />

    <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <div class="container">
        <h1>National Parks <small>Parks National</small></h1>

        <table class="table table-striped table-hover">
            <tr>
                <th>Name</th>
                <th>State</th>
                <th>Date Established</th>
                <th>Area in Acres</th>
                <th>Park Description</th>
            </tr>

            <?php foreach ($parks as $park): ?>
                <tr>
                    <td><?= $park['name']; ?></td>
                    <td><?= $park['location']; ?></td>
                    <td><?= $park['date_establish']; ?></td>
                    <td><?= $park['area_in_acres']; ?></td>
                    <td><?= $park['park_description']; ?></td>
                </tr>
            <?php endforeach ?>
        </table>
        <ul class="pager">
          <li class="previous"><a href="?">&larr; Previous</a></li>
          <li class="next"><a href="?page=2">Next &rarr;</a></li>
        </ul>
    </div>
</body>
</html>