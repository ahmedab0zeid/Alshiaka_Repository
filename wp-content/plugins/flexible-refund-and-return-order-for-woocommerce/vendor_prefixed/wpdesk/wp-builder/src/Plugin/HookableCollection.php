<?php

namespace FRFreeVendor\WPDesk\PluginBuilder\Plugin;

interface HookableCollection extends \FRFreeVendor\WPDesk\PluginBuilder\Plugin\Hookable
{
    /**
     * Add hookable object.
     *
     * @param Hookable|HookablePluginDependant $hookable_object Hookable object.
     */
    public function add_hookable(\FRFreeVendor\WPDesk\PluginBuilder\Plugin\Hookable $hookable_object);
    /**
     * Get hookable instance.
     *
     * @param string $class_name Class name.
     *
     * @return false|Hookable
     */
    public function get_hookable_instance_by_class_name($class_name);
}
