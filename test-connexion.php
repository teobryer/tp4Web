<?php
require ("connexpdo.inc.php");
require_once ("js.php");

try {
    $objdb = connexpdo("tp4");
} catch (PDOException $e) {
    displayException($e);
}
?>