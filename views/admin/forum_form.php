<section class="title">
  <?php if($this->method == 'create_forum'): ?>
  <h4><?php echo lang('forums_create_forum_title');?></h4>
  <?php else: ?>
  <h4><?php echo sprintf(lang('forums_edit_forum_title'), $forum->title);?></h4>
  <?php endif; ?>
</section>

<section class="item">
  <fieldset>
    <?php
       if(empty($forum->categories)):
    echo lang('forums_no_categories');
    else:
    ?>
      
    <?php echo form_open($this->uri->uri_string(), 'class="crud"', array('id' => $forum->id)); ?>
      
    <ul>
	
      <li>
        <label for="title"><?php echo lang('forums_title_label');?> <span class="required-icon tooltip"><?php echo lang('required_label');?></span></label>
	<div class="input">
          <?php echo form_input('title', $forum->title, 'maxlength="100"'); ?>
	</div>
      </li>
	
      <li>
        <label for="description"><?php echo lang('forums_description_label');?> <span class="required-icon tooltip"><?php echo lang('required_label');?></span></label>
	<div class="input">
          <?php echo form_input('description', $forum->description, 'maxlength="255"'); ?>
	</div>
      </li>
	
      <li>
        <label for="category"><?php echo lang('forums_category_label');?></label>
	<div class="input">
          <?php echo form_dropdown('category', $forum->categories, $forum->category); ?>
	</div>
      </li>

    </ul>
  </fieldset>
  <div class="buttons">
    <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
  </div>
  <?php
     echo form_close();
     endif;
     ?> 
</section>
