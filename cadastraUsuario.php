<!DOCTYPE html>
<html>
<head>
     <title> Cadastro - PHP UTD ONLINE </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
  <div class="container">
        <div class="row"> 
            <div class="col-md-8 offset md-2">
                 <h3> Cadastro de Usuario</h3><hr>
                 <form action="receberUsuario.php" method="GET">
                 <label>Nome do Usuario </label> <br>
                 <input type="text" class="form-contol" name="nomeUsuario" placeholder="Nome"><br><br>

                 <label>Preço do Usuario </label> <br>
                 <input type="text" class="form-contol" name="emaiUsuario" placeholder="email"><br><br>

                
                 
                       <button class="btn btn-primary"> Cadastrar Usuario </button>         
                 </form>

             </div>
       </div> 
    </div>


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>