<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site em MVC</title>
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/main.css" />
</head>
<body>
    <h1>Este é o topo</h1>
    <a href="<?=BASE_URL; ?>">HOME</a>
    <a href="<?=BASE_URL;?>galeria">GALERIA</a>
    <hr/>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <hr/>
    <h3>Criado e Desenvolvido por <small>Danilo Ferreira</small></h3>

    <scrip type="text/javascript" src="<?= BASE_URL; ?>assets/js/main.js"></script>
</body>
</html>