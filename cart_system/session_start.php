<?php
if(session_id() == '') {
    session_start();
}
$uri = $_SERVER['REQUEST_URI'];
?>