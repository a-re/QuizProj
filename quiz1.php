<?php
$dbc = mysqli_connect("localhost", "root", "password", "cwulf");

if (!$dbc) {
    echo "Failed to connect to the database. Error = " . mysqli_connect_error();
}

$query = "SELECT question, answerChoices FROM quiz1";
if ($result = mysqli_query($dbc, $query)) {
    // Build question and answer section for each question
    while ($row = $result->fetch_assoc()) {
        echo $row["question"] . "  " . $row["answerChoices"];
    }
}

mysqli_close($dbc);