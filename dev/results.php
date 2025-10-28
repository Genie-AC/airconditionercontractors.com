<?
    $q = substr(filter_var($_REQUEST["q"],FILTER_SANITIZE_SPECIAL_CHARS),0,2);
    #connect to the database
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "al1av3a7rwj8i9_hvacr", "b?3n[GapCf!%", "al1av3a7rwj8i9_airc12_con");
    #build the query
    $query = "
        SELECT * FROM Contractors
        WHERE State LIKE '$q'
    ";
    $result = $mysqli->query($query);
    $array = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            #echo "stubs.push([`" . $row["Name"] . "`,`" . $row["Address"] . "`,`" . $row["City"] . "`,`" . $row["Phone"] . "`])\n";
            $array[] = array(
                $row["Name"],
                $row["Address"],
                $row["City"],
                $row["Phone"]
            );
        }
    }
    echo json_encode($array);
?>