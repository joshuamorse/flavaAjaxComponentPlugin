flavaAjaxComponentPlugin
========================

Allows the use of include_ajax_component() and include_ajax_partial(). This functions as
you would expect, in that it lazy-loads a component.



Requirements
------------

- jQuery



Installation
------------

- Enable the plugin in your project configuration file:


      /config/ProjectConfiguration.class.php


- Add the flavaAjaxComponent module to your settings file


      /app/yourapp/settings.yml


- Publish plugin assets:


      ./symfony plugin:publish-assets



Basic Flow
----------

The following is the primary request flow for flavaAjaxComponentPlugin:
  - User calls include_ajax_component(), which then calls...
  - include_partial('flavaAjaxComponent/ajax') passing the requested module/component
  - The ajax partial makes use of a generic component route/action (via jquery)
  - The route points to a show template which simply calls include_component()



Options
-------

- include_javascripts() on each component load via "loadjs" config option -- useful if you have an ajax component with javascript dependencies.
- head.js document ready (jquery) functionality via "headjs" config option -- useful if you're using head.js.
