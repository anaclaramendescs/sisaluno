<?php
include_once('crudaluno.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM aluno WHERE id=:id";

    try {
        include_once('../conexao.php'); 

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Verifica se a exclusão foi bem-sucedida
        if ($stmt->rowCount() > 0) {
            echo "<script>alert('OK! A disciplina de ID $id foi excluído com sucesso!!!')</script>";
        } else {
            echo "<script>alert('Erro ao excluir O aluno de ID $id.')</script>";
        }

    } catch (PDOException $e) {
        echo "<script>alert('Erro ao excluir o aluno.')</script>";
    }
    echo "<script>window.location.href = 'listaaluno.php';</script>";
}
?>