<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class MainBlock extends \CBitrixComponent
{
    public function executeComponent()
    {
        $this->includeComponentTemplate('index');
    }
}