<?
    #state, chunk page, city
    
    $st = substr(filter_var($_REQUEST["st"],FILTER_SANITIZE_SPECIAL_CHARS),0,2);
    $pg = substr(filter_var($_REQUEST["pg"],FILTER_SANITIZE_SPECIAL_CHARS),0,3) + 0;
    $ct = substr(filter_var($_REQUEST["ct"],FILTER_SANITIZE_SPECIAL_CHARS),0,25);
    $zp = substr(filter_var($_REQUEST["zp"],FILTER_SANITIZE_SPECIAL_CHARS),0,5) + 0;
    #connect to the database
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "al1av3a7rwj8i9_hvacr", "b?3n[GapCf!%", "al1av3a7rwj8i9_airc12_con");
    #build the query
    $query = "
        SELECT * FROM Contractors2
        WHERE State LIKE '$st'
        ORDER BY City
    ";
    $result = $mysqli->query($query);
    $array = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $array[] = array(
                $row["Name"],
                $row["Address"],
                $row["City"],
                $row["Phone"],
                abs($row["Zipcode"] - $zp)
            );
        }
    }
    function cmp(array $a, array $b) {
        if ($a[4] < $b[4]) {
            return -1;
        } else if ($a[4] > $b[4]) {
            return 1;
        } else {
            return 0;
        }
    }
    usort($array, 'cmp');
    $chunks = array_chunk($array, 20);
    echo json_encode(array(count($chunks), $chunks[$pg]));
    
?>