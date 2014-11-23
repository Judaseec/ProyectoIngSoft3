<h1>Default CJuiTabs: Static, render partial, Ajax tab</h1>
<?php

$modelr=new Rubros;

$this->widget('zii.widgets.jui.CJuiTabs',array(
    'tabs'=>array(
        'StaticTab '=>'Content for tab 1',
        'StaticTab With ID'=>array('content'=>'Content for tab 2 With Id' , 'id'=>'tab2'),
        'Render Partial'=>array('id'=>'test-id','content'=>$this->renderPartial(
                                        'buscarConvocatoria',
                                        array('model'=>$model,),TRUE
                                        )),        
        'Rubros'=>array('id'=>'test-id','content'=>$this->renderPartial(
                                        '/Rubros/Generales',
                                        array('model'=>$modelr,),TRUE
                                        )),  
        // panel 3 contains the content rendered by a partial view
        'AjaxTab'=>array('ajax'=>$this->createUrl('ajax')),
    ),
    // additional javascript options for the tabs plugin
    'options'=>array(
        'collapsible'=>true,
    ),
    'id'=>'MyTab-Menu',
));
?>