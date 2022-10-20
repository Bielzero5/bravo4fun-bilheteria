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
                <a href="index.php" >
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Home</h3>
                </a>
                <a href="#" class="active">
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
                <h2>Categorias Adicionados</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Categorias</th>
                            <th>Descrição</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $cmd = $pdo->prepare("SELECT * FROM CATEGORIA");
                            $cmd->execute();

                            $result = $cmd->fetchAll();
                             
                            foreach ($result as $key => $value) {
                                echo '
                                        <tr>
                                        
                                            <td>'. $value['CATEGORIA_NOME']. '</td>
                                            <td>'. $value['CATEGORIA_DESC']. '</td>
                                            <td>'. ($value['CATEGORIA_ATIVO'] == 1 ? 'Ativo' : 'Inativo') .'</td>'; 
                        ?>
                                            <td >
                                                <a href="excluirCat.php?id=<?php echo $value['CATEGORIA_ID']; ?>">Excluir</a>
                                            </td>
                                            <td >
                                                <a class="edit" href="editarCatForms.php?id=<?php echo $value['CATEGORIA_ID']; ?>">Editar</a>
                                            </td>
                                                            
                        <?php
                                echo    '</tr>';
                                };
                        ?>
                    
                    </tbody>
                </table>

                <div id="fade" class="hide" ></div>
                <div id="modal" class="hide">
                    <div class="modal-header">
                        <h2>Editar Categoria</h2>
                        <button id="close-modal">Fechar</button>
                    </div>
                    <div class="modal-body">
                        <form action="editarUsu.php?id=<?php echo $value['CATEGORIA_ID']; ?>" method="POST">
                            <label for="nome">Nome da Categoria:</label>
                            <input class="formUsu" type="text" id="nome" name="nome" placeholder="Rock">

                            <label for="desc">Descrição</label>
                            <textarea name="desc" id="desc-cat" cols="30" rows="5" wrap="hard">
                            </textarea>

                            <input type="submit" class="formUsu1" value="Enviar">
                        </form>
                    </div>
                </div>

                <div id="fadeAdm" class="hide"></div>
                <div  id="modalAdm" class="divUsu hide">
                    <div class="modalHeaderAdm">
                        <h2>Cadastro de Categorias</h2>
                        <button id="closeModalBtnAdm">Fechar</button>
                    </div>
                   
                    <form action="criarCategoria.php" method="POST">
                        <label class="labFont" for="nome">Nome da Categoria:</label>
                        <input class="formUsu" type="text" id="nomeAdm" name="nome" placeholder="Rock">
                        
                        <label class="labFont" for="desc">Descrição</label>
                        <textarea name="desc" id="desc-cat" cols="30" rows="5" wrap="hard"></textarea>
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
                <div class="theme-toggler">
                    <span class="material-icons-sharp active" >light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
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
                <h2>Cadastrar Categorias</h2>
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