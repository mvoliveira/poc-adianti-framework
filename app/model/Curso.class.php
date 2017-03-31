<?php

class Curso extends TRecord
{
    const TABLENAME = 'curso';
    const PRIMARYKEY = 'id';
    const IDPOLICY = 'max';

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('nome');
        parent::addAttribute('sigla');
        parent::addAttribute('descricao');
    }
}
