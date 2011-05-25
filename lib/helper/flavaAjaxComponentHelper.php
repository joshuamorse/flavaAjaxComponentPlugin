<?php

function include_ajax_component($module_name, $target_name, $user_options = array())
{
  include_ajax_view($module_name, $target_name, $user_options, 'component');
}

function include_ajax_partial($module_name, $target_name, $user_options = array())
{
  include_ajax_view($module_name, $target_name, $user_options, 'partial');
}

function include_ajax_view($module_name, $target_name, $user_options, $type)
{
  $options['module_name'] = $module_name;
  $options['target_name'] = $target_name;
  $options['type'] = $type;
  $options = array_merge($options, $user_options);

  include_partial('flavaAjaxComponent/ajax', $options);
}
