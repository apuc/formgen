<?php

namespace formgen\form;

use formgen\form\fields\InputCommon;
use formgen\form\fields\InputSelect;

class BuildForm {
    private $html_output;
    private $button;

    public function __construct($action = '', $method = 'post', $button = true) {
        $this->html_output = "<form method='$method' action='$action'>";
        $this->button = $button;
    }

    public function addInput($type, $label, $args = []) {
        if ($type == 'select') $input = new InputSelect();
        else $input = new InputCommon();

        $this->html_output .= $input->addInput($type, $label, $args);

        return $this;
    }

    public function create() {
        if ($this->button) $this->html_output .= '<input type="submit" value="Submit" name="submit">';
        $this->html_output .= '</form>';
        echo $this->html_output;
    }
}