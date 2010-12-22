flavaAjaxComponentPlugin
========================
Allows the use of include_ajax_component(). This functions as
you would expect, in that it lazy-loads a component. This
plugin requires jQuery.

Basic Flow
==========
- include_ajax_component
- include_partial(ajax)
- ajax load centralized component route/action (via jquery)
- include_component
