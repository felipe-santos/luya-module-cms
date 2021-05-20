<?php
/**
 * View file for block: HeaderBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->varValue('class');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
use yii\helpers\Html;

$subClasses = $this->varValue('subClass');
$image = $this->varValue('image', null);

$attributes = [
    'class' => $this->varValue('class'),
    'id' => $this->varValue('id'),
    'style' => $this->varValue('style')
];
if($image !== null){
    $image = Yii::$app->storage->getImage($image);
    if(isset($image->source)){
        $attributes['style'] .= ';background-image: url('.$image->source.') !important;';
    }
}

if(!empty($subClasses)){
    foreach($subClasses as $subClass){
        $json = json_decode($subClass['value'], true);
        if(!empty($json)){
            $attributes[$json['attr']] = $json['val'];
        }
    }
}

echo Html::tag('section', $this->placeholderValue('elements'), 
    $attributes
);