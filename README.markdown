flavaAjaxComponentPlugin
========================
Allows the use of include_ajax_component(). This functions as
you would expect, in that it lazy-loads a component. This
plugin requires jQuery.


Setup
=====
- enable the plugin in your project configuration file (e.g. config/ProjectConfiguration.class.php).
- add the flavaAjaxComponent module to your settings file (e.g. app/yourapp/settings.yml) file under enabled_modules.


Basic Flow
==========
- include_ajax_component
- include_partial(ajax)
- ajax load centralized component route/action (via jquery)
- include_component

Options
=======
- include_javascripts() on each component load via "loadjs" config option
- head.js document ready (jquery) functionality via "headjs" config option
