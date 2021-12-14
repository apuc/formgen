<?php

namespace formgen\form\traits;

trait SetAttr {
    public function getAttr($settings) {
        if ($settings['required']) return 'required';
        else return '';
    }
}