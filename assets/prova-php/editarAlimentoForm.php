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
    $cmd = $bd->prepare("SELECT * FROM ALIMENTOs WHERE idAlimento=$id");
    $cmd->execute();
    $result = $cmd->fetch();
    
?>
    <div class="container">
        <aside>

            <div class="sidebar">
                <a href="index.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                
            </div>
        </aside>
        <!------------- END OF ASIDE ------------>
        <main>
      
            <!------------------- END OF INSIGHTS -------------------->
            <div class="recent-orders">
                <div  id="modalEditAdm" class="divUsu">
                    <div class="modalHeader">
                        <h2>Edição de Alimento</h2>
                        <a href="index.php" class="material-icons-sharp">arrow_forward</a>
                    </div>
                   
                    <form action="editarAlimento.php" method="POST">

                        <label class="labFont" for="id">ID:</label>
                        <input type="text" name="id" id="id01" class="formUsu" value="<?php echo $id ?>" disabled>
                        <input type="hidden" name="id" id="id" class="formUsu" value="<?php echo $id ?>">

                        <label class="labFont" for="nome">Nome do Alimento:</label>
                        <input class="formUsu" type="text" id="nome" name="nome" value="<?php echo $result["nomeAlimento"] ?>">

                        <label class="labFont" for="tipo">Tipo do Alimento:</label>
                        <input class="formUsu" type="text" id="tipo" name="tipo" value="<?php echo $result["tipoAlimento"] ?>">


                        
                        <input type="submit" class="formUsu1" value="Enviar">
                    </form>
                </div>
        </main>
        <!------------------- END OF MAIN -------------------->
        <div class="right">
          
        </div>
    </div>

    <script src="scripts.js"></script>
    
</body>
</html>