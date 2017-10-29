<!DOCTYPE html>   
 <html>  
      <head>  
          <title>WebStudents</title>  
          <meta charset="utf-8">
          <script src="bower_components/angular/angular.js"></script>
          <script src="app.js"></script>
          <script src="bower_components/angular-route/angular-route.js"></script>
           <!-- Materialize CSS -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

          <!-- JavaScript for: jQuery, angular, materialize, and angular-materialize. All of which are needed. -->
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-materialize/0.2.2/angular-materialize.min.js"></script>

          <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
          <script src="js/module.js"></script>
          <script src="js/controller.js"></script>
        
          <nav class="teal darken-1">
		         <div class="nav-wrapper">
		          <ul id="nav-mobile" class="right hide-on-med-and-down">
 		          <li><a href="https://tigre-labassedone.c9users.io/angular-seed/app/index.html" class="home"><span>Home</span></a></li>
 				        <li><a href="https://tigre-labassedone.c9users.io/angular-seed/app/home.php"><span>Cadastro de Alunos</span></a></li>
 				        <li><a href="https://tigre-labassedone.c9users.io/angular-seed/app/edit.php"><span>Editar Alunos</span></a></li>
 		         </ul>
		         </div>
	         </nav>
          
      </head> 
      
      <body>  
           <br /><br />  
           
           <div class="container" style="width:550px;">  
             	<h3 class="center" style="color: #00796b;">Editar Alunos</h3>
                <center><h6>Use Ctrl+F5 para atualizar a página</h6></center>
                <br /><br /> 
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                     <table class="table table-bordered striped responsive-table bordered">  
                          <tr>  
                               <th>Nome</th>
                               <th>Sobrenome</th> 
                               <th>Idade</th>
                               <th>CPF</th>
                               <th>Atualizar</th>
                               <th>Deletar</th>
                          </tr>  
                          <tr ng-repeat="x in names"> 
                               <td>{{x.first_name}}</td>
                               <td>{{x.last_name}}</td> 
                               <td>{{x.age}}</td>
                               <td>{{x.cpf}}</td>
                               <td><button ng-click="updateData(x.id, x.first_name , x.last_name, x.age , x.cpf )" class="waves-effect waves-light btn btn-info btn-xs">Atualizar</button></td>
                               <td><button ng-click="deleteData(x.id)" class="waves-effect waves-light btn btn-danger btn-xs">Deletar</button></td>  
                          </tr>  
                     </table> 
                     <br /><br />
                     <div class="card-panel teal lighten-2" >
                     <h5 style="color: #ffffff;">Atualize as informações abaixo:</h5>
                     </div>
                     <br />
                     <label>Atualizar Nome </label>  
                     <input type="text" name="first_name" ng-model="firstname" class="form-control" />  
                     <br />  
                     <label>Atualizar Sobrenome</label>  
                     <input type="text" name="last_name" ng-model="lastname" class="form-control" /> 
                     <br />
                     <label>Atualizar Idade</label>  
                     <input type="text" name="age" ng-model="age" class="form-control" /> 
                     <br />
                     <label>Atualizar CPF</label>  
                     <input type="text" name="cpf" ng-model="cpf" class="form-control" /> 
                     <br />
                     <center> 
                     <input type="submit" name="btnInsert" class="waves-effect waves-light btn btn-info" ng-click="insertData()" value="Atualizar"/>  
                     <br /><br />  
                     </center>
                     <br /><br />  
                </div>  
           </div>  
      </body>  
      <footer class="page-footer teal darken-1">
     	  	<div class="footer-copyright">
     			 <div class="container" style="color: ##ffffff;">
     				© Copyright | Todos os direitos reservados 
     		  	</div>
     		   </div>
       </footer>
 </html>  