<?php
    // $index = $_POST[$index];
    // $data = file_get_contents('students.json');
    // $data = json_decode($data);
    // unset($data['index']);
    // $data = json_encode($data, JSON_PRETTY_PRINT);
    // file_put_contents('students.json', $data);
   
   $id = $_GET['id'];
   $data = file_get_contents('Data_Students.json');
   $student = json_decode($data,true);
   unset($student[$id]);
    $data_student= json_encode($student, JSON_PRETTY_PRINT);
    file_put_contents('Data_Students.json',$data_student);
    header('location: page-Students.php');
    // get the index
    // $index = $_GET['index'];
 
    // //fetch data from json
    // $data = file_get_contents('Data_Students.json');
    // $data = json_decode($data);
 
    // //delete the row with the index
    // unset($data[$index]);
 
    // //encode back to json
    // $data = json_encode($data, JSON_PRETTY_PRINT);
    // file_put_contents('Data_Students.json', $data);
 
?>