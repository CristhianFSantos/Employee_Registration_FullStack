<?php
include_once 'connection.php';
include 'index.html';

$name = $_POST['name'];
$age = $_POST['age'];
$profession = $_POST['profession'];
$sex = $_POST['sex'];
$nationality = $_POST['nationality'];

try{
$smt = $conn->prepare("INSERT INTO people (name, age, profession, sex, nationality) VALUES (:name, :age, :profession, :sex, :nationality)");
$smt->bindParam(':name', $name);
$smt->bindParam(':age', $age);
$smt->bindParam(':profession', $profession);
$smt->bindParam(':sex', $sex);
$smt->bindParam(':nationality', $nationality);
$smt->execute();

$conn = null;
Header("Location:index.html");
}catch(PDOException $e){
    echo "Erro ao inserir ".$e->getMessage();
}catch(Exception $e){
    echo "Erro ".$e->getMessage();
}

?>
