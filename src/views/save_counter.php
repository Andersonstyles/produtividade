<main class="content">
    <?php
        renderTitle(
            'Cadastro de Contador',
            'Crie e atualize o contador',
            'icofont-business-man'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
        <?php if($id): ?>
        <input type="hidden" name="id" value="<?= $id ?>">
        <?php endif ?>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Informe o nome"
                    class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>"
                    value="<?= utf8_decode($name) ?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
            
        </div>
        <div>
            <button class="btn btn-primary btn-lg">Salvar</button>
            <a href="/counter.php"
                class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </form>
</main>