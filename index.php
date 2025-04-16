<?php
require_once 'config/database.php'; // importer database

require_once 'includes/functions.php'; // import de logic 

$pdo = getPDO();
$offers = getLastsJobs($pdo);

require_once 'views/pages/homepage.html.php';