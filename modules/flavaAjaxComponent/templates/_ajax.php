<?php if (sfConfig::get('app_flava_ajax_component_load_js')): ?>
  <?php include_javascripts() ?>
<?php endif ?>

<?php /* The component/partial will be loaded into this element. */ ?>
<div id="<?php echo $module_name ?>-<?php echo $target_name ?>" class="flava-ajax-component">
  <?php echo image_tag(sfConfig::get('app_flava_ajax_component_loading')) ?>
</div>

<?php
  //var_dump($this->partialVars); die;
  //var_dump($this->getAttributeHolder()); die;
?>

<script type="text/javascript">
  <?php if (sfConfig::get('app_flava_ajax_component_headjs')): ?>
    head.ready(function() {
  <?php else: ?>
    $(document).ready(function() {
  <?php endif ?>
    $('#<?php echo $module_name ?>-<?php echo $target_name ?>').load(
      '<?php
        echo url_for('flava_ajax_' . $type . '_show', array('module_name' => $module_name, 'target_name' => $target_name))
        // pass options here
        //echo url_for('flava_ajax_' . $type . '_show', $this->partialVars)
      ?>'
    );
  });
</script>
