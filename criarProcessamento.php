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

        //Capturar os valores das variaveis
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        //Monta o comando de inserção
        $cmdtext = "INSERT INTO ADMINISTRADOR(ADM_NOME, ADM_EMAIL, ADM_SENHA) VALUES('". $nome ."','". $email ."','". $senha . "')";
        $cmd = $pdo->prepare($cmdtext);

        //Executa o comando e verifica se teve sucesso
        $status = $cmd->execute();
        if ($status) {
            echo "Criação do Administrador com sucesso";
        }else {
            echo "Ocorreu um erro ao inserir";
        };
    ?>
</body>
</html>