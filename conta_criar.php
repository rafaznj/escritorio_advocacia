<?php include "cabecalho.php"; ?>

<body>
    <form method="post">

    <?php include "config_bd.php"; ?>
    
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <input type="text" name="txtOAB" placeholder="Digite o número OAB" class="form-control" />
                </div>

                <div class="col-md-4">
                    <input type="text" name="txtNome" placeholder="Digite seu nome completo" class="form-control" />
                </div>

                <div class="col-md-4">
                    <input type="email" name="txtEmail" placeholder="Digite seu email" class="form-control" />
                </div>

                <div class="col-md-4">
                    <input type="text" name="txtCPF" placeholder="Digite seu CPF" class="form-control" />
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="submit" formaction="conta_salvar.php" value="Enviar" class="btn btn-success" />
                </div>
            </div>
    </form>
</body>