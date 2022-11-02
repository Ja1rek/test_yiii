<?php


use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use kartik\form\ActiveForm;
use kartik\builder\Form;
use app\models\Country;
use kartik\builder\TabularForm;
use yii\helpers\ArrayHelper;

$FormAttribs = array(
    /*
    'id'=>[ // primary key attribute
        'type'=>TabularForm::INPUT_HIDDEN, 
        'columnOptions'=>['hidden'=>true]
    ], */
    'name'=>['type'=>TabularForm::INPUT_TEXT],
    'population'=>['type'=>TabularForm::INPUT_TEXT],
    'dateTime'=>['type'=>TabularForm::INPUT_TEXT]
);




  
  
  
    
  $form = ActiveForm::begin();
echo TabularForm::widget([
    'dataProvider'=>$dataProvider,
    'form'=>$form,
    'attributes'=>$FormAttribs,
    'gridSettings'=>['condensed'=>true]
]);
// Add other fields if needed or render your submit button
echo '<div class="text-right text-end">' . 
     Html::submitButton('Submit', ['class'=>'btn btn-primary']) .
     '<div>';
ActiveForm::end();
    

?>








