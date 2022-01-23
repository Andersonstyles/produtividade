<?php
class Counter extends Model {
    protected static $tableName = 'counter';
    protected static $columns = [
        'id',
        'name'
        
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

        if(!$this->name) {
            $errors['name'] = 'Nome é um campo obrigatório.';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
}