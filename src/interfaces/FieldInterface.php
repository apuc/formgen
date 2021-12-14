<?php
namespace formgen\form\interfaces;

interface FieldInterface {
    public function addInput($type, $label, $args = []);
}