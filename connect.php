<?php
/**
 * Database Connection Module
 * Establishes and returns a mysqli connection using environment variables
 */

// Load environment variables from .env file
function loadEnv($path) {
    if (!file_exists($path)) {
        throw new Exception('.env file not found');
    }
    
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        
        // Parse KEY=VALUE pairs
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            
            // Set as environment variable if not already set
            if (!getenv($key)) {
                putenv("$key=$value");
            }
        }
    }
}

// Load .env file
loadEnv(__DIR__ . '/.env');

/**
 * Get database connection
 * @return mysqli Database connection object
 * @throws Exception if connection fails
 */
function getDbConnection() {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $host = getenv('DB_HOST');
    $user = getenv('DB_USER');
    $pass = getenv('DB_PASS');
    $name = getenv('DB_NAME');
    
    try {
        $mysqli = new mysqli($host, $user, $pass, $name);
        $mysqli->set_charset('utf8mb4');
        return $mysqli;
    } catch (Exception $e) {
        error_log("Database connection failed: " . $e->getMessage());
        throw new Exception("Database connection failed");
    }
}

/**
 * Get contractors by state
 * @param mysqli $mysqli Database connection
 * @param string $state Two-letter state code
 * @return array Array of contractor records
 */
function getContractorsByState($mysqli, $state) {
    $state = $mysqli->real_escape_string($state);
    
    $query = "
        SELECT * FROM Contractors2
        WHERE State LIKE '$state'
        ORDER BY City
    ";
    
    $result = $mysqli->query($query);
    $contractors = array();
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $contractors[] = array(
                'name' => $row["Name"],
                'address' => $row["Address"],
                'city' => $row["City"],
                'phone' => $row["Phone"],
                'zipcode' => $row["Zipcode"]
            );
        }
    }
    
    return $contractors;
}

/**
 * Sort contractors by distance from zipcode
 * @param array $contractors Array of contractor records
 * @param int $targetZipcode Target zipcode to compare against
 * @return array Sorted array with distance included
 */
function sortContractorsByZipcode($contractors, $targetZipcode) {
    $array = array();
    
    foreach ($contractors as $contractor) {
        $array[] = array(
            $contractor['name'],
            $contractor['address'],
            $contractor['city'],
            $contractor['phone'],
            abs($contractor['zipcode'] - $targetZipcode)
        );
    }
    
    usort($array, function($a, $b) {
        if ($a[4] < $b[4]) {
            return -1;
        } else if ($a[4] > $b[4]) {
            return 1;
        } else {
            return 0;
        }
    });
    
    return $array;
}

/**
 * Chunk array into pages
 * @param array $array Array to chunk
 * @param int $pageSize Number of items per page
 * @param int $pageNumber Page number to return (0-indexed)
 * @return array Array containing total pages and requested page data
 */
function getPagedResults($array, $pageSize, $pageNumber) {
    $chunks = array_chunk($array, $pageSize);
    $totalPages = count($chunks);
    $pageData = isset($chunks[$pageNumber]) ? $chunks[$pageNumber] : array();
    
    return array($totalPages, $pageData);
}
?>
