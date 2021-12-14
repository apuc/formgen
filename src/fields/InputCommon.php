<?php
namespace formgen\form\fields;

use formgen\form\interfaces\FieldInterface;
use formgen\form\traits\SetAttr;

class InputCommon implements FieldInterface {
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
        );

        $settings = array_merge($settings, $args);

        if ($settings['addLabel']) $label_title = '<label>'.$settings['label'].'</label>';

        $attr = $this->getAttr($settings);

        return $label_title.'<input type="'.$type.'" class="'.$settings['class'].'" id="'.$settings['id'].'" value="'.$settings['value'].'" placeholder="'.$settings['placeholder'].'" '.$attr.'>';
    }
}