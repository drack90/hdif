<?php

$data = $_POST['reglaments'];

$sqlQuery = new reglaments();
$sqlQuery::editReglaments($data);
