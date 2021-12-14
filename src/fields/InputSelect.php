<?php
namespace formgen\form\fields;

use formgen\form\interfaces\FieldInterface;
use formgen\form\traits\SetAttr;

class InputSelect implements FieldInterface {
    use SetAttr;

    public function addInput($type, $label = '', $args = []) {
        $label_title = '';

        $settings = array(
            'id' => strtolower($label),
            'value' => '',
            'label' => $label,
            'required' => true,
            'placeholder' => '',
            'addLabel' => true,
            'class' => '',
            'data' => '',
            'selectedPos' => '0',
        );

        $settings = array_merge($settings, $args);

        if ($settings['addLabel']) $label_title = '<label>'.$settings['label'].'</label>';

        $attr = $this->getAttr($settings);

        $html = $label_title.'<select name="'.$settings['id'].'" id="'.$settings['id'].'" '.$attr.'>';

        $i = 0;
        foreach ($settings['data'] as $val) {
            $select = $settings['selectedPos'] == $i ? 'selected' : '';
            $html .= '<option '. $select .' value="'.$val.'">'.$val.'</option>';
            $i++;
        }

        $html .= "</select>";
        return $html;
    }
}