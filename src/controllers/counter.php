<?php
session_start();
requireValidSession();


$exception = null;
if(isset($_GET['delete'])) {
    try {
        Counter::deleteById($_GET['delete']);
        addSuccessMsg('Contador excluído com sucesso.');
    } catch(Exception $e) {
        if(stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Não é possível excluir o contador.');
        } else {
            $exception = $e;
        }
    }
}

$counters = Counter::get();


loadTemplateView('counter', [
    'counters' => $counters,
    'exception' => $exception
]);