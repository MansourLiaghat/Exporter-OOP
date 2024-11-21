<?php

namespace Export;
interface Exportable
{
    function export();
}

abstract class Exporter implements Exportable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;

        if (!$this->is_valid()) {
            die('invalid data');
        }

    }

    public function is_valid()
    {
        foreach ($this->data as $key => $value) {
            if (!isset($key) || empty($value)) {
                return false;
            }
        }
        return true;
    }
}