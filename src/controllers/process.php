<?php
session_start();
requireValidSession();


$exception = null;
if(isset($_GET['delete'])) {
    try {
        Process::deleteById($_GET['delete']);
        addSuccessMsg('Processo excluído com sucesso.');
    } catch(Exception $e) {
        if(stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Não é possível excluir o processo.');
        } else {
            $exception = $e;
        }
    }
}

$lawsuit = Process::get();


loadTemplateView('process', [
    'lawsuit' => $lawsuit,
    'exception' => $exception
]);