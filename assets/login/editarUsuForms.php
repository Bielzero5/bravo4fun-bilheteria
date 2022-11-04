<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
      <link rel="stylesheet" href="../css/style2.css">
    <title>Responsive-Dashboard</title>
</head>
<body>
<?php
    //dados para conexão ao mysql
    require 'conexao.php'; 


    $id = $_GET["id"];
    
?>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../images/logo-dark-2.png" alt="logo da empresa">
                    <h2>Bravo<span class="danger">4Fun</span></h2>
                </div>
            </div>

            <div class="sidebar">
                <a href="index.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Home</h3>
                </a>
                <a href="categorias.php">
                    <span class="material-icons-sharp">add</span>
                    <h3>Adicionar Categorias</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
                
            </div>
        </aside>
        <!------------- END OF ASIDE ------------>
        <main>
      
            <!------------------- END OF INSIGHTS -------------------->
            <div class="recent-orders">
                <div  id="modalEditAdm" class="divUsu">
                    <div class="modalHeaderAdm">
                        <h2>Cadastro de Administrador</h2>
                    </div>
                   
                    <form action="editarUsu.php" method="POST">

                        <label class="labFont" for="idUsu">ID:</label>
                        <input type="text" name="idUsu" id="idUsu01" class="formUsu" value="<?php echo $id ?>" disabled>
                        <input type="hidden" name="idUsu" id="idUsu" class="formUsu" value="<?php echo $id ?>">
                        <label class="labFont" for="nome">Nome:</label>
                        <input class="formUsu" type="text" id="nomeAdm" name="nome" placeholder="Epaminondas" required>

                        <label class="labFont" for="email">Email</label>
                        <input class="formUsu" type="email" id="emailAdm" name="email" placeholder="joazinho@gmail.com" required>

                        <label class="labFont" for="senha">Senha</label>
                        <input class="formUsu" type="password" id="senhaAdm" name="senha" placeholder="Senha123." required>

                        <div class="divStatus">
                            <div>    
                                <input class="status"type="radio" name="status" id="ativo" value="1" checked>
                                <label  for="status">Ativo</label>
                            </div>
                            <div>
                                <input class="status" type="radio" name="status" id="inativo" value="0">
                                <label for="status">Inativo</label>
                            </div>
                        </div>
                
                        <input type="submit" class="formUsu1" value="Enviar">
                    </form>
                </div>
        </main>
        <!------------------- END OF MAIN -------------------->
    </div>

    <script src="scripts.js"></script>
    
</body>
</html>