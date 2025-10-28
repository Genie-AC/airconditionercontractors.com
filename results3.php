<?php
/**
 * Contractor Search Results API
 * Returns paginated contractor results filtered by state and sorted by zipcode proximity
 */

require_once 'connect.php';

// Sanitize and validate input parameters
$st = substr(filter_var($_REQUEST["st"], FILTER_SANITIZE_SPECIAL_CHARS), 0, 2);
$pg = substr(filter_var($_REQUEST["pg"], FILTER_SANITIZE_SPECIAL_CHARS), 0, 3) + 0;
$ct = substr(filter_var($_REQUEST["ct"], FILTER_SANITIZE_SPECIAL_CHARS), 0, 25);
$zp = substr(filter_var($_REQUEST["zp"], FILTER_SANITIZE_SPECIAL_CHARS), 0, 5) + 0;

try {
    // Get database connection
    $mysqli = getDbConnection();
    
    // Get contractors by state
    $contractors = getContractorsByState($mysqli, $st);
    
    // Sort by zipcode proximity
    $sortedContractors = sortContractorsByZipcode($contractors, $zp);
    
    // Get paginated results (20 items per page)
    $results = getPagedResults($sortedContractors, 20, $pg);
    
    // Return JSON response
    echo json_encode($results);
    
    // Close connection
    $mysqli->close();
    
} catch (Exception $e) {
    // Return error response
    http_response_code(500);
    echo json_encode(array('error' => 'An error occurred while fetching results'));
    error_log($e->getMessage());
}
?>
