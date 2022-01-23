<main class="content">
    <?php
        renderTitle(
            'Cadastro de Processo',
            'Crie e atualize os processos',
            'icofont-clip-board'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
        <?php if($id): ?>
        <input type="hidden" name="id" value="<?= $id ?>">
        <?php endif ?>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="type">Processo</label>
                <input type="text" id="type" name="type" placeholder="Informe o processo"
                    class="form-control <?= $errors['type'] ? 'is-invalid' : '' ?>"
                    value="<?= utf8_decode($type) ?>">
                <div class="invalid-feedback">
                    <?= $errors['type'] ?>
                </div>
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="punctuation">Pontuação</label>
                <input type="int" id="punctuation" name="punctuation" placeholder="Informe a pontuação"
                    class="form-control <?= $errors['punctuation'] ? 'is-invalid' : '' ?>"
                    value="<?= $punctuation ?>">
                <div class="invalid-feedback">
                    <?= $errors['punctuation'] ?>
                </div>
                </div>
                </div>
        <div>
            <button class="btn btn-primary btn-lg">Salvar</button>
            <a href="/process.php"
                class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </form>
</main>