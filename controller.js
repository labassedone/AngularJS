angular.module("myapp").controller("usercontroller", function($scope, $http){  
      $scope.btnName = "Cadastrar";  
      $scope.insertData = function(){  
           if($scope.firstname == null)  
           {  
                alert("First Name is required");  
           }  
           else if($scope.lastname == null)  
           {  
                alert("Last Name is required");  
           }
           else if($scope.age == null)  
           {  
                alert("Age is required");  
           }
           else if($scope.cpf == null)  
           {  
                alert("CPF is required");  
           }
           else  
           {  
               $http.post(  
                    "insert.php",  
                    {'firstname':$scope.firstname, 'lastname':$scope.lastname, 'age':$scope.age, 'cpf':$scope.cpf, 'btnName':$scope.btnName, 'id':$scope.id}  
               ).success(function(data){  
                    alert(data);  
                    $scope.firstname = null;  
                    $scope.lastname = null;  
                    $scope.age = null;
                    $scope.cpf = null;
                    $scope.btnName = "Cadastrar";
                    $scope.displayData();
               }); 
           }
      }
      
      $scope.displayData = function(){  
           $http.get("select.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      } 
      
      $scope.updateData = function( id , first_name , last_name , age , cpf ){  
            $scope.id = id;
            $scope.firstname = first_name;  
            $scope.lastname = last_name; 
            $scope.age = age;
            $scope.cpf = cpf;
            $scope.btnName = "Atualizar";  
      } 
      
      $scope.deleteData = function(id){  
           if(confirm("Você tem certeza que deseja apagar os dados deste aluno?"))  
           {  
                $http.post('delete.php', {'id': id })  
                .success(function(data){  
                     alert(data);  
                     $scope.displayData();  
                });  
           }  
           else  
           {  
                return false;  
           }  
      }  
});  
