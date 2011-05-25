<?php

class flavaAjaxComponentActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
    $this->forward404Unless($type = $request->getParameter('type'));
    $this->forward404Unless(in_array($type, array('component', 'partial')));

    // Are we currently allowing direct access to URLs?
    if (!sfConfig::get('app_flava_ajax_component_allow_direct_access'))
    {
      // Has a param been set to allow access for this request?
      if (!$request->getParameter('allow_direct_access'))
      {
        if (!$request->getReferer())
        {
          $this->forward404Unless($request->getReferer(), 'Direct access is not allowed.');
        }
      }
    }

    $this->module = $request->getParameter('module_name');
    $this->target = $request->getParameter('target_name');

    $this->setTemplate($request->getParameter('type'));
  }
}
