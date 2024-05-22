if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Initialize SQL query
    $sql = "SELECT * FROM `harish` WHERE 1=1";

    // Add filters based on form input
    if (!empty($_POST['PHASE'])) {
        $phase = mysqli_real_escape_string($con, $_POST['PHASE']);
        $sql .= " AND PHASE='$phase'";
    }

    if (!empty($_POST['date'])) {
        $date = mysqli_real_escape_string($con, $_POST['date']);
        $sql .= " AND DATE='$date'";
    }

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
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
            <th>work</th>
            <th>OBSERVERVATIONS</th>
        </tr>";
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>" . $row["PHASE"] . "</td>
                <td>" . $row["DATE"] . "</td>
                <td>" . $row["VENUE/ALT"] . "</td>
                <td>" . $row["TEMP/WIND"] . "</td>
                <td>" . $row["SORTIE_NO"] . "</td>
                <td>" . $row["DURATION_PLANNED"] . "</td>
                <td>" . $row["AIRCRAFT"] . "</td>
                <td>" . $row["AUW"] . "</td>
                <td>" . $row["T/O"] . "</td>
                <td>" . $row["POS"] . "</td>
                <td>" . $row["CATEGORY"] . "</td>
                <td>" . $row["TYPE"] . "</td>
                <td>" . $row["BATTERY"] . "</td>
                <td>" . $row["CHARHE"] . "</td>
                <td>" . $row["DURATION"] . "</td>
                <td>" . $row["PILOT"] . "</td>
                <td>" . $row["OBSERVER"] . "</td>
                <td>" . $row["PAYLOADS"] . "</td>
                <td>" . $row["CONTROLLER/CHARGER_LEVEL"] . "</td>
                <td>" . $row["INT"] . "</td>
                <td>" . $row["FINAL"] . "</td>
                <td>" . $row["LAPTOP/CHARGER_LEVEL"] . "</td>
                <td>" . $row["FIRMWARE"] . "</td>
                <td>" . $row["PRODUCT_ID"] . "</td>
                <td>" . $row["work"] . "</td>
                <td>" . $row["OBSERVERVATIONS"] . "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close connection
    mysqli_close($con);
    ?>