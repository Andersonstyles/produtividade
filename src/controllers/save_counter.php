<?php
session_start();
requireValidSession();

$exception = null;
$counterData = [];

if(count($_POST) === 0 && isset($_GET['update'])) {
    $counter = Counter::getOne(['id' => $_GET['update']]);
    $counterData = $counter->getValues();
} elseif(count($_POST) > 0) {
    try {
        $dbCounter = new Counter($_POST);
        if($dbCounter->id) {
            $dbCounter->update();
            addSuccessMsg('Contador alterado com sucesso!');
            header('Location:counter.php');
            exit();
        } else {
            $dbCounter->insert();
            addSuccessMsg('Contador cadastrado com sucesso!');
        }
        $_POST = [];
    } catch(Exception $e) {
        $exception = $e;
    } finally {
        $CounterData = $_POST;
    }
}

loadTemplateView('save_counter', $counterData + ['exception' => $exception]);