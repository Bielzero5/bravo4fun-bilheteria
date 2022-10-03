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
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
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
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date" name="" id="">
            </div>

            <div class="insights">
                <!------------------- END OF INCOMES -------------------->
            </div>
            <!------------------- END OF INSIGHTS -------------------->
            <div class="recent-orders">
                <h2>Administradores Adicionados</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Emails</th>
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $cmd = $pdo->prepare("SELECT * FROM ADMINISTRADOR WHERE ADM_ATIVO = 1");
                            $cmd->execute();

                            $result = $cmd->fetchAll();
                            
                            foreach ($result as $key => $value) {
                                echo '
                                        <tr>
                                            <td>'. $value['ADM_EMAIL']. '</td>
                                            <td>'. $value['ADM_NOME']. '</td>'; 
                        ?>
                                            <td class="danger"><a href="excluirUsu.php?id=<?php echo $value['ADM_ID']; ?>">Excluir</a></td>
                                            <td class="primary"><input id="open-modal" type="button" value="Editar"></td>                  
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
                        <form action="editarUsu.php" method="POST">
                            <label for="nome">Nome:</label>
                            <input class="formUsu" type="text" id="nome" name="nome" placeholder="Epaminondas">

                            <label for="email">Email</label>
                            <input class="formUsu" type="email" id="email" name="email" placeholder="joazinho@gmail.com">

                            <label for="senha">Senha</label>
                            <input class="formUsu" type="password" id="senha" name="senha" placeholder="Senha123.">
                    
                            <input type="submit" class="formUsu1" value="Enviar">
                        </form>
                    </div>
                </div>

                <div  id="modalAdm" class="divUsu hide">
                    <h2>Cadastro de Administrador</h2>
                    <form action="criarProcessamento.php" method="POST">
                        <label for="nome">Nome:</label>
                        <input class="formUsu" type="text" id="nomeAdm" name="nome" placeholder="Epaminondas">

                        <label for="email">Email</label>
                        <input class="formUsu" type="email" id="emailAdm" name="email" placeholder="joazinho@gmail.com">

                        <label for="senha">Senha</label>
                        <input class="formUsu" type="password" id="senhaAdm" name="senha" placeholder="Senha123.">
                
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
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../images/profile-2.jpg" alt="Foto de perfil">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order o Night Lion tech GPS drone</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../images/profile-3.jpg" alt="Foto de perfil">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order o Night Lion tech GPS drone</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../images/profile-4.jpg" alt="Foto de perfil">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order o Night Lion tech GPS drone</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------- END OF UPDATES -------------------->
            <div class="sales-analytics">
                <h2>Cadastrar Adiministrador</h2>
                <div class="item add-product">
                    <div> 
                        <input type="button" value="Adicionar">
                        <span class="material-icons-sharp">add</span>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts.js"></script>
    
</body>
</html>