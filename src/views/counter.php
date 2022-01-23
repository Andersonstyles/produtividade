<main class="content">
    <?php
        renderTitle(
            'Cadastro de Contador',
            'Mantenha os dados dos usuários atualizados',
            'icofont-business-man'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <a class="btn btn-lg btn-primary mb-3"
        href="save_counter.php">Novo Contador</a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Nome</th>
        </thead>
        <tbody>
            <?php foreach($counters as $counter): ?>
                <tr>
                    <td><?= utf8_encode($counter->name) ?></td>
                    
                    <td>
                        <a href="save_counter.php?update=<?= $counter->id ?>" 
                            class="btn btn-warning rounded-circle mr-2">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $counter->id ?>"
                            class="btn btn-danger rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</main>