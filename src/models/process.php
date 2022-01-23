<?php
class Process extends Model {
    protected static $tableName = 'process';
    protected static $columns = [
        'id',
        'type',
        'punctuation'
    ];

    public function insert() {
        $this->validate();
        return parent::insert();
    }

    public function update() {
        $this->validate();
        return parent::update();
    }

    private function validate() {
        $errors = [];

        if(!$this->type) {
            $errors['type'] = 'O tipo do processo é obrigatório.';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
}