<?php
echo $this->Html->script('ckeditor/ckeditor');
echo $this->Html->script('WEB_ROOT'.'js/ckeditor/ckeditor'); //Link the ckeditor.js file on the page you want to use the editor.
?>
<div class="widget_804">
    <h1>Add Pink Me Up</h1>
    <div class="sos_div content-div">
        <?php echo $form->create('Junior', array('action' => 'add_pink_me_up')); ?>
        <div class="title">
            <h2>Title</h2>
        </div>
        <div class="info">
            <div class="heading plain_textarea">
                <?php echo $form->input('topic', array('class' => 'height-40','id' => 'ckeditor', 'type' => 'textarea', 'label' => false, 'div' => false)); ?>
            </div>
        </div>
    </div>
    
    <div class="sos_div content-div">
        <div class="title">
            <h2>Image URL</h2>
        </div>
        <div class="info">
            <div class="heading plain_textarea">
                <?php echo $form->input('image_url', array('class' => 'height-40', 'type' => 'textarea', 'label' => false, 'div' => false)); ?>
            </div>
        </div>
    </div>

  <!--  <div class="sos_div content-div">
        <div class="title">
            <h2>Content</h2>
        </div>
        <div class="info">
            <div class="heading plain_textarea">
                
                <?php echo $form->input('post', array('type' => 'textarea', 'class' => 'height-233', 'div' => false, 'label' => false)); ?>
            </div>
        </div>
    </div>
  -->
    <div class="gray-buttons">
        <?php
           
        echo $form->hidden('user_id', array('value' => $this->Session->read('User.User.id')));

        echo $form->end(array('value'=>'create','class'=>'button','div'=>false));
        ?>
        
        <input type="button" value="Reset" class="button">
    </div>




</div>
<script>
CKEDITOR.replace( 'ckeditor',{
    toolbar:'MyToolbar'} );
</script>