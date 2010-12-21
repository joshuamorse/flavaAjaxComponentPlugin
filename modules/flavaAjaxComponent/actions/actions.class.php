<?php

class flavaAjaxComponentActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
    $this->module = $request->getParameter('moduleName');
    $this->component = $request->getParameter('componentName');
  }
}
