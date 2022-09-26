<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
      <link rel="stylesheet" href="style2.css">
    <title>Responsive-Dashboard</title>
</head>
<body>
<?php
        //dados para conexão ao mysql
        $mysqlhostname = '144.22.244.104';
        $mysqlport = '3306';
        $mysqlusername = 'Bravo4Fun';
        $mysqlpassword = 'Bravo4Fun';
        $mysqldatabase = 'Bravo4Fun';

        //Mostra a String de Conexao ao Mysql

        $dsn = 'mysql:host=' . $mysqlhostname .';dbname='. $mysqldatabase . ';port='. $mysqlport;
        $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

        // Captura o post do usuario
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        //Realiza uma query sql para buscar o adiministrador que tenha o email e a senha salvas no banco
        $admin = $pdo->query("SELECT * FROM ADMINISTRADOR WHERE ADM_EMAIL='" . $email ."' AND ADM_SENHA='" . $senha . "'")->fetchAll();

    ?>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="images/logo-dark-2.png" alt="logo da empresa">
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
                            $cmd = $pdo->prepare("SELECT * FROM ADMINISTRADOR");
                            $cmd->execute();

                            $result = $cmd->fetchAll();
                            
                            foreach ($result as $key => $value) {
                                echo '<tr>
                                        <td>'. $value['ADMIN_EMAIL']. '</td>
                                        <td>'. $value['ADMIN_NAME']. '</td>
                                        <td class="danger">Exlcuir</td>
                                        <td class="primary">Editar</td>
                                    </tr>';
                            };
                        ?>
                    </tbody>
                </table>

                <div class="divUsu">
                    <h2>Cadastro de Administrador</h2>
                    <form action="criarProcessamento.php">
                        <label for="nome">Nome:</label>
                        <input class="formUsu" type="text" id="nome" name="nome" placeholder="Epaminondas">

                        <label for="email">Email</label>
                        <input class="formUsu" type="email" id="email" name="email" placeholder="joazinho@gmail.com">

                        <label for="senha">Senha</label>
                        <input class="formUsu" type="password" id="senha" name="senha" placeholder="Senha123.">
                
                        <input class="formUsu1" type="button" value="Enviar">
                    </form>
                    </div>
                <a href="#">Show All</a>
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
                        <img src="./images/profile-1.jpg" alt="Foto de perfil">
                    </div>
                </div>
            </div>
            <!------------------- END OF TOP -------------------->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-2.jpg" alt="Foto de perfil">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order o Night Lion tech GPS drone</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-3.jpg" alt="Foto de perfil">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order o Night Lion tech GPS drone</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-4.jpg" alt="Foto de perfil">
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
                <h2>Sales Analytics</h2>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Adicionar Usuários</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>