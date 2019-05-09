<?php
// Set up database connection
$dbc = mysqli_connect("localhost", "root", "password", "cwulf");

// Checks if the database connected properly
if (!$dbc) {
    echo "Failed to connect to the database. Error = " . mysqli_connect_error();
}

// Query to get the question and answerChoices from the database
$query = "SELECT question, answerChoices FROM quiz1";

// Run whatever is in this if statement if the query executed successfully
if ($result = mysqli_query($dbc, $query)) {
    // Build question and answer section for each question
    while ($row = $result->fetch_assoc()) {
        $questionText = $row["question"];
        $answerChoiceText = $row["answerChoices"];
        $answerChoices = explode("|", $answerChoiceText);

        // $answerChoices is now an array containing all the answer choices. Do some logic here to determine the user's "personality"
    }
}

mysqli_close($dbc);