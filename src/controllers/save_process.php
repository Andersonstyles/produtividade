<?php
session_start();
requireValidSession();

$exception = null;
$processData = [];

if(count($_POST) === 0 && isset($_GET['update'])) {
    $process = Process::getOne(['id' => $_GET['update']]);
    $processData = $process->getValues();
} elseif(count($_POST) > 0) {
    try {
        $dbProcess = new Process($_POST);
        if($dbProcess->id) {
            $dbProcess->update();
            addSuccessMsg('Processo alterado com sucesso!');
            header('Location:process.php');
            exit();
        } else {
            $dbProcess->insert();
            addSuccessMsg('Processo cadastrado com sucesso!');
        }
        $_POST = [];
    } catch(Exception $e) {
        $exception = $e;
    } finally {
        $ProcessData = $_POST;
    }
}

loadTemplateView('save_process', $processData + ['exception' => $exception]);