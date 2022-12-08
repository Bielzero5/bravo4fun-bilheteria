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
            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Home</h3>
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
                            <th>ID</th>
                            <th>Comida</th>
                            <th>Tipo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $cmd = $bd->prepare("SELECT * FROM ALIMENTOS");
                            $cmd->execute();

                            $result = $cmd->fetchAll();
                            
                            foreach ($result as $key => $value) {
                                echo '
                                        <tr>
                                            <td>'. $value['idAlimento']. '</td>
                                            <td>'. $value['nomeAlimento']. '</td> 
                                            <td>'. $value['tipoAlimento']  .'</td>';
                        ?>
                                            <td >
                                                <a class="edit" href="editarAlimentoForm.php?id=<?php echo $value['idAlimento']; ?>">Editar</a>
                                                <a class="edit" style="color: red;" href="excluirAlimento.php?id=<?php echo $value['idAlimento']; ?>">Excluir</a>
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
                   
                    <form action="criarAlimento.php" method="POST">

                        <label class="labFont" for="nome">Nome do Alimento</label>
                        <input class="formUsu" type="nome" id="emailAdm" name="nome" placeholder="Maçã">
                        <label class="labFont" for="tipo">Tipo do Alimento</label>
                        <input class="formUsu" type="tipo" id="emailAdm" name="tipo" placeholder="Fruta">


                        <input type="submit" class="formUsu1" value="Enviar">
                    </form>
                </div>
        </main>
    
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