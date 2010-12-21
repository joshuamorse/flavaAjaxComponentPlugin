<?php include_javascripts() ?>

<?php /* The component will be ajax'd into this element */ ?>
<div id="<?php echo $module ?>-<?php echo $component ?>" class="flava-ajax-component">
  <?php echo image_tag(sfConfig::get('app_flava_ajax_component_loading')) ?>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#<?php echo $module ?>-<?php echo $component ?>').load(
      '<?php echo url_for('flava_ajax_component_show', array('moduleName' => $module, 'componentName' => $component)) ?>'
    );
  });
</script>
