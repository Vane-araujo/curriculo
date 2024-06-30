<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $experiencias = $_POST['cargo'];
    // currículo em HTML
    $curriculoHTML = "<h2>Dados Pessoais</h2>";
    $curriculoHTML .= "<p><strong>Nome:</strong> $nome</p>";
    $curriculoHTML .= "<p><strong>E-mail:</strong> $email</p>";
    $curriculoHTML .= "<h2>Experiência Profissional</h2>";
    foreach ($experiencias as $key => $cargo) {
        $empresa = $_POST['empresa'][$key];
        $periodo = $_POST['periodo'][$key];
        $curriculoHTML .= "<p><strong>Cargo:</strong> $cargo</p>";
        $curriculoHTML .= "<p><strong>Empresa:</strong> $empresa</p>";
        $curriculoHTML .= "<p><strong>Período:</strong> $periodo</p>";
    } 
    echo $curriculoHTML; 
}
?>
<script>
    function imprimirCurriculo() {
        window.onload = function() {
            window.print();
        }
    }
    imprimirCurriculo();
</script>