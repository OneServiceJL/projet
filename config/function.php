<?php 

require_once 'config/config.php';

 

 
function insertRadioProgram(array $data): void {
  $query = "INSERT INTO radio_programs (title, host, genre, language, start_time, end_time, days_of_week, description) 
    VALUES (:title, :host, :genre, :language, :start_time, :end_time, :days_of_week, :description)";
  $stmt = $pdo->prepare($query);
  $stmt->execute($data);
}
