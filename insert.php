<?php  
 $connect = mysqli_connect("localhost", "labassedone", "", "c9");
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count($data) > 0)  
 {  
      $first_name = mysqli_real_escape_string($connect, $data->firstname);       
      $last_name = mysqli_real_escape_string($connect, $data->lastname);
      $age = mysqli_real_escape_string($connect, $data->age);
      $cpf = mysqli_real_escape_string($connect, $data->cpf);
      $btn_name = $data->btnName;  
      
      if($btn_name == "Cadastrar")  
      { 
           $query = "INSERT INTO `aluno`(`first_name`, `last_name`, `age`, `cpf`) VALUES ('$first_name', '$last_name', '$age', '$cpf')";  
           if(mysqli_query($connect, $query))  
           {  
                echo "Aluno cadastrado com sucesso";  
           }  
           else  
           {  
                echo 'Ops, algo deu errado!';  
           }  
      }
      if($btn_name == 'Atualizar')  
      {  
           $id = $data->id;  
           $query = "UPDATE `aluno` SET `first_name`='$first_name',`last_name`='$last_name',`age`='$age',`cpf`='$cpf' WHERE `id` ='$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Atualizado com sucesso';  
           }  
           else  
           {  
                echo 'Ops, algo deu errado com a atualização!';  
           }  
      }  
       
 }     
 ?>  