<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>FILTER DATA</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Filter Data from RPA </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="text" name="PHASE" value="<?php if(isset($_POST['PHASE'])){echo $_POST['PHASE']; } ?>" class="form-control" placeholder="Phase">
                                        <input type="text" name="date" value="<?php if(isset($_POST['date'])){echo $_POST['date']; } ?>" class="form-control" placeholder="Date">
                                        <input type="text" name="VENUE/ALT" value="<?php if(isset($_POST['VENUE/ALT'])){echo $_POST['VENUE/ALT']; } ?>" class="form-control" placeholder="Venue/Alt">
                                        <input type="text" name="TEMP/WIND" value="<?php if(isset($_POST['TEMP/WIND'])){echo $_POST['TEMP/WIND']; } ?>" class="form-control" placeholder="Temp/Wind">
                                        <input type="text" name="SORTIE_NO" value="<?php if(isset($_POST['SORTIE_NO'])){echo $_POST['SORTIE_NO']; } ?>" class="form-control" placeholder="Sortie No">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>PHASE</th>
                                                    <th>DATE</th>
                                                    <th>VENUE/ALT</th>
                                                    <th>TEMP/WIND</th>
                                                    <th>SORTIE_NO</th>
                                                    <th>DURATION_PLANNED</th>
                                                    <th>AIRCRAFT</th>
                                                    <th>AUW</th>
                                                    <th>T/O</th>
                                                    <th>POS</th>
                                                    <th>CATEGORY</th>
                                                    <th>TYPE</th>
                                                    <th>BATTERY</th>
                                                    <th>CHARHE</th>
                                                    <th>DURATION</th>
                                                    <th>PILOT</th>
                                                    <th>OBSERVER</th>
                                                    <th>PAYLOADS</th>
                                                    <th>CONTROLLER/CHARGER_LEVEL</th>
                                                    <th>INT</th>
                                                    <th>FINAL</th>
                                                    <th>LAPTOP/CHARGER_LEVEL</th>
                                                    <th>FIRMWARE</th>
                                                    <th>PRODUCT_ID</th>
                                                    <th>WORK</th>
                                                    <th>OBSERVATIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $con = mysqli_connect("localhost", "root", "", "data");

                                                    if (!$con) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    $sql = "SELECT * FROM `harish` WHERE 1=1";

                                                    if (!empty($_POST['PHASE'])) {
                                                        $phase = mysqli_real_escape_string($con, $_POST['PHASE']);
                                                        $sql .= " AND PHASE='$phase'";
                                                    }
                                                    if (!empty($_POST['date'])) {
                                                        $date = mysqli_real_escape_string($con, $_POST['date']);
                                                        $sql .= " AND DATE='$date'";
                                                    }
                                                    if (!empty($_POST['VENUE/ALT'])) {
                                                        $venue_alt = mysqli_real_escape_string($con, $_POST['VENUE/ALT']);
                                                        $sql .= " AND `VENUE/ALT`='$venue_alt'";
                                                    }
                                                    if (!empty($_POST['TEMP/WIND'])) {
                                                        $temp_wind = mysqli_real_escape_string($con, $_POST['TEMP/WIND']);
                                                        $sql .= " AND `TEMP/WIND`='$temp_wind'";
                                                    }
                                                    if (!empty($_POST['SORTIE_NO'])) {
                                                        $sortie_no = mysqli_real_escape_string($con, $_POST['SORTIE_NO']);
                                                        $sql .= " AND `SORTIE_NO`='$sortie_no'";
                                                    }
                                                    if (!empty($_POST['DURATION/PLANNED'])) {
                                                        $duration_planned = mysqli_real_escape_string($con, $_POST['DURATION/PLANNED']);
                                                        $sql .= " AND `DURATION_PLANNED`='$duration_planned'";
                                                    }
                                                    if (!empty($_POST['AIRCRAFT'])) {
                                                        $aircraft = mysqli_real_escape_string($con, $_POST['AIRCRAFT']);
                                                        $sql .= " AND `AIRCRAFT`='$aircraft'";
                                                    }
                                                    if (!empty($_POST['AUW'])) {
                                                        $auw = mysqli_real_escape_string($con, $_POST['AUW']);
                                                        $sql .= " AND `AUW`='$auw'";
                                                    }
                                                    if (!empty($_POST['T/O'])) {
                                                        $to = mysqli_real_escape_string($con, $_POST['T/O']);
                                                        $sql .= " AND `T/O`='$to'";
                                                    }
                                                    if (!empty($_POST['POS'])) {
                                                        $pos = mysqli_real_escape_string($con, $_POST['POS']);
                                                        $sql .= " AND `POS`='$pos'";
                                                    }
                                                    if (!empty($_POST['CATEGORY'])) {
                                                        $category = mysqli_real_escape_string($con, $_POST['CATEGORY']);
                                                        $sql .= " AND `CATEGORY`='$category'";
                                                    }
                                                    if (!empty($_POST['TYPE'])) {
                                                        $type = mysqli_real_escape_string($con, $_POST['TYPE']);
                                                        $sql .= " AND `TYPE`='$type'";
                                                    }
                                                    if (!empty($_POST['BATTERY'])) {
                                                        $battery = mysqli_real_escape_string($con, $_POST['BATTERY']);
                                                        $sql .= " AND `BATTERY`='$battery'";
                                                    }
                                                    if (!empty($_POST['CHARHE'])) {
                                                        $charhe = mysqli_real_escape_string($con, $_POST['CHARHE']);
                                                        $sql .= " AND `CHARHE`='$charhe'";
                                                    }
                                                    if (!empty($_POST['DURATION'])) {
                                                        $duration = mysqli_real_escape_string($con, $_POST['DURATION']);
                                                        $sql .= " AND `DURATION`='$duration'";
                                                    }
                                                    if (!empty($_POST['PILOT'])) {
                                                        $pilot = mysqli_real_escape_string($con, $_POST['PILOT']);
                                                        $sql .= " AND `PILOT`='$pilot'";
                                                    }
                                                    if (!empty($_POST['OBSERVER'])) {
                                                        $observer = mysqli_real_escape_string($con, $_POST['OBSERVER']);
                                                        $sql .= " AND `OBSERVER`='$observer'";
                                                    }
                                                    if (!empty($_POST['PAYLOADS'])) {
                                                        $payloads = mysqli_real_escape_string($con, $_POST['PAYLOADS']);
                                                        $sql .= " AND `PAYLOADS`='$payloads'";
                                                    }
                                                    if (!empty($_POST['CONTROLLER/CHARGER_LEVEL'])) {
                                                        $controller_charger_level = mysqli_real_escape_string($con, $_POST['CONTROLLER/CHARGER_LEVEL']);
                                                        $sql .= " AND `CONTROLLER/CHARGER_LEVEL`='$controller_charger_level'";
                                                    }
                                                    if (!empty($_POST['INT'])) {
                                                        $int = mysqli_real_escape_string($con, $_POST['INT']);
                                                        $sql .= " AND `INT`='$int'";
                                                    }
                                                    if (!empty($_POST['FINAL'])) {
                                                        $final = mysqli_real_escape_string($con, $_POST['FINAL']);
                                                        $sql .= " AND `FINAL`='$final'";
                                                    }
                                                    if (!empty($_POST['LAPTOP/CHARGER_LEVEL'])) {
                                                        $laptop_charger_level = mysqli_real_escape_string($con, $_POST['LAPTOP/CHARGER_LEVEL']);
                                                        $sql .= " AND `LAPTOP/CHARGER_LEVEL`='$laptop_charger_level'";
                                                    }
                                                    if (!empty($_POST['FIRMWARE'])) {
                                                        $firmware = mysqli_real_escape_string($con, $_POST['FIRMWARE']);
                                                        $sql .= " AND `FIRMWARE`='$firmware'";
                                                    }
                                                    if (!empty($_POST['PRODUCT_ID'])) {
                                                        $product_id = mysqli_real_escape_string($con, $_POST['PRODUCT_ID']);
                                                        $sql .= " AND `PRODUCT_ID`='$product_id'";
                                                    }
                                                    if (!empty($_POST['work'])) {
                                                        $work = mysqli_real_escape_string($con, $_POST['work']);
                                                        $sql .= " AND `work`='$work'";
                                                    }
                                                    if (!empty($_POST['OBSERVATIONS'])) {
                                                        $observations = mysqli_real_escape_string($con, $_POST['OBSERVATIONS']);
                                                        $sql .= " AND `OBSERVATIONS`='$observations'";
                                                    }

                                                    $result = mysqli_query($con, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                            <tr>
                                                                <td><?= $row['PHASE']; ?></td>
                                                                <td><?= $row['DATE']; ?></td>
                                                                <td><?= $row['VENUE/ALT']; ?></td>
                                                                <td><?= $row['TEMP/WIND']; ?></td>
                                                                <td><?= $row['SORTIE_NO']; ?></td>
                                                                <td><?= $row['DURATION_PLANNED']; ?></td>
                                                                <td><?= $row['AIRCRAFT']; ?></td>
                                                                <td><?= $row['AUW']; ?></td>
                                                                <td><?= $row['T/O']; ?></td>
                                                                <td><?= $row['POS']; ?></td>
                                                                <td><?= $row['CATEGORY']; ?></td>
                                                                <td><?= $row['TYPE']; ?></td>
                                                                <td><?= $row['BATTERY']; ?></td>
                                                                <td><?= $row['CHARHE']; ?></td>
                                                                <td><?= $row['DURATION']; ?></td>
                                                                <td><?= $row['PILOT']; ?></td>
                                                                <td><?= $row['OBSERVER']; ?></td>
                                                                <td><?= $row['PAYLOADS']; ?></td>
                                                                <td><?= $row['CONTROLLER/CHARGER_LEVEL']; ?></td>
                                                                <td><?= $row['INT']; ?></td>
                                                                <td><?= $row['FINAL']; ?></td>
                                                                <td><?= $row['LAPTOP/CHARGER_LEVEL']; ?></td>
                                                                <td><?= $row['FIRMWARE']; ?></td>
                                                                <td><?= $row['PRODUCT_ID']; ?></td>
                                                                <td><?= $row['work']; ?></td>
                                                                <td><?= $row['OBSERVATIONS']; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <tr>
                                                            <td colspan="27">No Record Found</td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    mysqli_close($con);
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
