<?php
echo $this->Html->script('ckeditor/ckeditor');
echo $this->Html->script('WEB_ROOT'.'js/ckeditor/ckeditor'); //Link the ckeditor.js file on the page you want to use the editor.
?>
<div class="widget_804">
    <h1>Edit SOS</h1>
    <div class="sos_div content-div">
        <div class="title">
            <h2>Title</h2>
        </div>
        <div class="info">
            <div class="heading plain_textarea">
                <?php
                
                    echo $form->create('Gossip', array('action' => 'edit_sos'));
                    echo $form->hidden('id', array('value' => $post['Post']['id'], 'type' => 'textarea', 'rows' => '1'));
                    echo $form->input('topic', array('class' => 'height-40','id' => 'ckeditor', 'div' => false, 'label' => false, 'value' => $post['Post']['topic'], 'type' => 'textarea', 'rows' => '1'));
                    ?>
                </div>
            </div>
        </div>
    
    <div class="sos_div content-div">
        <div class="title">
            <h2>Image URL</h2>
        </div>
        <div class="info">
            <div class="heading plain_textarea">
                <?php echo $form->input('image_url', array('value' => $post['Post']['image_url'], 'class' => 'height-40', 'type' => 'textarea', 'label' => false, 'div' => false)); ?>
            </div>
        </div>
    </div>




   <!--     <div class="sos_div content-div">
            <div class="title">
                <h2>Content</h2>
            </div>
            <div class="info">
                <div class="heading plain_textarea">
                    <?php
                    echo $form->input('post', array('class' => 'height-233', 'div' => false, 'label' => false, 'value' => $post['Post']['post'], 'type' => 'textarea'));
                    ?>

                </div>
            </div>
        </div>
-->
        <div class="gray-buttons">
            <?php
            echo $form->end(array('value' => 'create', 'class' => 'button', 'div' => false));
            ?>
            
            <input type="button" value="Reset" class="button">
        </div>



        
</div>
<script>
CKEDITOR.replace( 'ckeditor',{
    toolbar:'MyToolbar'} );
</script>