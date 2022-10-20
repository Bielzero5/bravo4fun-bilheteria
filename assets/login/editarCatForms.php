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
                    <h3>Dashboard</h3>
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
                        <h2>Cadastro de Categorias</h2>
                    </div>
                   
                    <form action="criarProcessamento.php" method="POST">
                        <label class="labFont" for="nome">Nome da Categoria:</label>
                        <input class="formUsu" type="text" id="nomeAdm" name="nome" placeholder="Epaminondas">

                        <label class="labFont" for="desc">Descrição</label>
                        <textarea name="desc" id="descCat" cols="100" rows="10"></textarea>

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
        <div class="right">
            <div class="top">
                <button class="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Hey,<b>Daniel</b></p>
                        <small class="text-mutet">Adim</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../images/profile-1.jpg" alt="Foto de perfil">
                    </div>
                </div>
            </div>
            <!------------------- END OF TOP -------------------->
            <div class="sales-analytics">
                <h2>Cadastrar Adiministrador</h2>
                <div class="item add-product">
                    <div> 
                        <input id="openModalAdm"  type="button" value="Adicionar">
                        <span class="material-icons-sharp">add</span>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts.js"></script>
    
</body>
</html>