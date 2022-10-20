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

    if (isset($_POST['email']) && !empty($_POST['email']) 
    && isset($_POST['senha']) && !empty($_POST['senha']))   {
        
        require 'UsuarioClass.php';
        require 'conexao.php';
        $usuario = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if ($usuario->login($email, $senha) == true) {
                header("Location: index.php");
            } else {
                header("Location: login.php");
            }
    }

    
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
                <a href="#" class="active">
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
                <h1>Administradores Adicionados</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Emails</th>
                            <th>Nome</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $cmd = $pdo->prepare("SELECT * FROM ADMINISTRADOR");
                            $cmd->execute();

                            $result = $cmd->fetchAll();
                            
                            foreach ($result as $key => $value) {
                                echo '
                                        <tr>
                                            <td>'. $value['ADM_EMAIL']. '</td>
                                            <td>'. $value['ADM_NOME']. '</td> 
                                            <td>'. ($value['ADM_ATIVO'] == 1 ? 'Ativo' : 'Inativo') .'</td>';
                        ?>
                                            <td >
                                                <a href="excluirUsu.php?id=<?php echo $value['ADM_ID']; ?>">Excluir</a>
                                            </td>
                                            <td >
                                                <a class="edit" href="editarUsuForms.php?id=<?php echo $value['ADM_ID']; ?>">Editar</a>
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
                        <h2>Editar Usuário</h2>
                        <button id="close-modal">Fechar</button>
                    </div>
                    <div class="modal-body">
                        
                        </form>
                    </div>
                </div>

                <div id="fadeAdm" class="hide"></div>
                <div  id="modalAdm" class="divUsu hide">
                    <div class="modalHeaderAdm">
                        <h2>Cadastro de Administrador</h2>
                        <button id="closeModalBtnAdm">Fechar</button>
                    </div>
                   
                    <form action="criarProcessamento.php" method="POST">
                        <label class="labFont" for="nome">Nome:</label>
                        <input class="formUsu" type="text" id="nomeAdm" name="nome" placeholder="Epaminondas">

                        <label class="labFont" for="email">Email</label>
                        <input class="formUsu" type="email" id="emailAdm" name="email" placeholder="joazinho@gmail.com">

                        <label class="labFont" for="senha">Senha</label>
                        <input class="formUsu" type="password" id="senhaAdm" name="senha" placeholder="Senha123.">
                        
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