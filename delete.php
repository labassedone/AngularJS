<?php    
 $connect = mysqli_connect("localhost", "labassedone", "", "c9");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $id = $data->id;  
      $query = "DELETE FROM `aluno` WHERE `id` = '$id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo 'Apagado com Sucesso';  
      }  
      else  
      {  
           echo 'Error';  
      }  
}  
?>  