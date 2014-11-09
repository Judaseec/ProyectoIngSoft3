<section class="bg pd4">
<div class="container center">
  <div class="row-fluid">
    <div class="span8">

    <div class="well">

          <img src="../../proyectosw3/themes/classic/img/logo-colciencias.png" alt="logo">
          <h2>Bienvenido</h2>

    <div class="row-fluid">
            <div class="span4" style="text-align:center;">
              <div style="font-size: 40px;margin:20px 0 20px 0;"><i class=""></i></div>
              <h3></h3>
              <p></p>
          </div>
            <div class="span4" style="text-align:center;">
              <div style="font-size: 40px;margin:20px 0 20px 0;"><i class=""></i></div>
              <h3></h3>
              <p></p>
          </div>
            <div class="span4" style="text-align:center;">
              <div style="font-size: 40px;margin:20px 0 20px 0;"><i class=""></i></div>
              <h3></h3>
              <p></p>
          </div>
      </div>
    </div>
</div><!-- /.span4 -->

<div class="span4">
  <div class="well">
  <?php $form=$this->beginWidget('CActiveForm', array(
      'id'=>'login-form',
      'action'=>$this->createUrl("site/login"),
      'htmlOptions'=>array("style"=>"text-align: left"),
      'enableClientValidation'=>true,
      'clientOptions'=>array(
        'validateOnSubmit'=>true,
      ),
    )); ?>
      
    <?php echo $form->labelEx($model,'username'); ?>
    <?php echo $form->textField($model,'username',array("class"=>"input-block-level","placeholder"=>"Username")); ?>
    <?php echo $form->error($model,'username'); ?>

    <?php echo $form->labelEx($model,'password'); ?>
    <?php echo $form->passwordField($model,'password',array("class"=>"input-block-level","placeholder"=>"Password")); ?>
    <?php echo $form->error($model,'password'); ?>
  <br>
    <?php echo $form->checkBox($model,'rememberMe'); ?>
    <?php echo $form->label($model,'rememberMe'); ?>
    <?php echo $form->error($model,'rememberMe'); ?>

    <?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary pull-right")); ?>
<?php $this->endWidget(); ?>

  </div>

  

    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>
</section>


