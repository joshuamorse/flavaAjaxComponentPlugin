<?php

function include_ajax_component($module_name, $target_name, $user_options = array())
{
  $base_options['module_name'] = $module_name;
  $base_options['target_name'] = $target_name;
  $base_options['type'] = 'component';

  foreach ($user_options as $key => $val)
  {
    $base_options[$key] = $val;
  }

  $base_options['data'] = 'datasd';

  include_partial('flavaAjaxComponent/ajax', $base_options);
}

function include_ajax_partial($module_name, $target_name, $user_options = array())
{
  $base_options['module_name'] = $module_name;
  $base_options['target_name'] = $target_name;
  $base_options['type'] = 'partial';

  foreach ($user_options as $key => $val)
  {
    $base_options[$key] = $val;
  }

  include_partial('flavaAjaxComponent/ajax', $base_options);
}
