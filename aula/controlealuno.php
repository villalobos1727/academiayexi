<?php
    include_once 'conexao.php';

    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    var_dump($dadoscad);

if (!empty($dadoscad['btncad'])) {

   $sql = "insert into aluno(nome,sexo,datanacimento,
   telefone,cpf,rg,cep,numerocasa,complememto,foto,email,senha)
   values(:nome,:sexo,:datanacimento,:telefone,:cpf,:rg,:cep,
   :numerocasa,:complememto,:foto,:email,:senha)";

   $salvar= $conn->prepare($sql);
   $salvar->bindParam(':nome', $dadoscad['nome'], PDO::PARAM_STR);
   $salvar->bindParam(':sexo', $dadoscad['sexo'], PDO::PARAM_STR);
   $salvar->bindParam(':datanacimento', $dadoscad['datanacimento'], PDO::PARAM_STR);
   $salvar->bindParam(':telefone', $dadoscad['telefone'], PDO::PARAM_STR);
   $salvar->bindParam(':cpf', $dadoscad['cpf'], PDO::PARAM_STR);
   $salvar->bindParam(':rg', $dadoscad['rg'], PDO::PARAM_STR);
   $salvar->bindParam(':cep', $dadoscad['cep'], PDO::PARAM_STR);
   $salvar->bindParam(':numerocasa', $dadoscad['numerocasa'], PDO::PARAM_INT);
   $salvar->bindParam(':complemento', $dadoscad['complemento'], PDO::PARAM_STR);
   $salvar->bindParam(':foto', $dadoscad['foto'], PDO::PARAM_STR);
   $salvar->bindParam(':email', $dadoscad['email'], PDO::PARAM_STR);
   $salvar->bindParam(':senha', $dadoscad['senha'], PDO::PARAM_STR);
   $salvar->execute();

   if ($salvar->rowCount()) {
       echo "Usuario cadastrado com sucesso";
       unset($dadoscad);  
   } else {
       echo "Usuario nãp cadastrado com sucesso!</p>":
   }


}


}
catch(PDOException $erro){
    echo $erro;


}

?>