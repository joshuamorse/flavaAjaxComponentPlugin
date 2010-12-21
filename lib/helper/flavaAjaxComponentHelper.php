<?php

function include_ajax_component($module, $component)
{
  include_partial('flavaAjaxComponent/ajax', array('module' => $module, 'component' => $component));
}
