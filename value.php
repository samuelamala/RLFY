<?php
$value1=$_POST['PHASE'];
$value2=$_POST['date'];
$value3=$_POST['VENUE/ALT'];
$value4=$_POST['TEMP/WIND'];
$value5=$_POST['SORTIE_NO'];
$value6=$_POST['DURATION/PLANNED'];
$value7=$_POST['AIRCRAFT'];
$value8=$_POST['AUW'];
$value9=$_POST['T/O'];
$value10=$_POST['POS'];
$value11=$_POST['CATEGORY'];
$value12=$_POST['TYPE'];
$value13=$_POST['BATTERY'];
$value14=$_POST['CHARHE'];
$value15=$_POST['DURATION'];
$value16=$_POST['PILOT'];
$value17=$_POST['OBSERVER'];
$value18=$_POST['PAYLOADS'];
$value19=$_POST['CONTROLLER/CHARGER_LEVEL'];
$value20=$_POST['INT'];
$value21=$_POST['FINAL'];
$value22=$_POST['LAPTOP/CHARGER_LEVEL'];
$value23=$_POST['FIRMWARE'];
$value24=$_POST['PRODUCT_ID'];
$value25=$_POST['work'];
$value26=$_POST['OBSERVERVATIONS'];
$con=mysqli_connect("localhost","root","","data");
$sql="INSERT INTO `harish`(`PHASE`, `DATE`, `VENUE/ALT`, `TEMP/WIND`, `SORTIE_NO`, `DURATION_PLANNED`, `AIRCRAFT`, `AUW`, `T/O`, `POS`, `CATEGORY`, `TYPE`, `BATTERY`, `CHARHE`, `DURATION`, `PILOT`, `OBSERVER`, `PAYLOADS`, `CONTROLLER/CHARGER_LEVEL`, `INT`, `FINAL`, `LAPTOP/CHARGER_LEVEL`, `FIRMWARE`, `PRODUCT_ID`, `work`, `OBSERVERVATIONS`) 
VALUES ('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13','$value14','$value15','$value16','$value17','$value18','$value19','$value20','$value21','$value22','$value23','$value24','$value25','$value26')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "DATA ADDED SUCCESSSFULLY";
}
else {
    echo "DATA NOT ENTERED";
}



if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `harish`";
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

?>
