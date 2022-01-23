<main class="content">
    <?php
        renderTitle(
            'Cadastro de Processos',
            'Mantenha os processos atualizados',
            'icofont-clip-board'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <a class="btn btn-lg btn-primary mb-3"
        href="save_process.php">Novo Processo</a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Nome do Processo</th>
            <th>Valor da Pontuação</th>
            
        </thead>
        <tbody>
            <?php foreach($lawsuit as $process): ?>
                <tr>
                    <td><?= utf8_encode($process->type) ?></td>
                    <td><?= $process->punctuation ?></td>
                    
                    <td>
                        <a href="save_process.php?update=<?= $process->id ?>" 
                            class="btn btn-warning rounded-circle mr-2">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $process->id ?>"
                            class="btn btn-danger rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</main>