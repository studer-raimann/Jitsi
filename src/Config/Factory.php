<?php

namespace srag\Plugins\Jitsi\Config;

use srag\Plugins\Jitsi\Utils\JitsiTrait;
use ilJitsiConfigGUI;
use ilJitsiPlugin;
use srag\ActiveRecordConfig\Jitsi\Config\AbstractFactory;

/**
 * Class Factory
 *
 * Generated by SrPluginGenerator v1.3.5
 *
 * @package srag\Plugins\Jitsi\Config
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author studer + raimann ag - Team Core 1 <support-core1@studer-raimann.ch>
 */
final class Factory extends AbstractFactory
{

    use JitsiTrait;
    const PLUGIN_CLASS_NAME = ilJitsiPlugin::class;
    /**
     * @var self
     */
    protected static $instance = null;


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * Factory constructor
     */
    protected function __construct()
    {
        parent::__construct();
    }


    /**
     * @param ilJitsiConfigGUI $parent
     *
     * @return ConfigFormGUI
     */
    public function newFormInstance(ilJitsiConfigGUI $parent) : ConfigFormGUI
    {
        $form = new ConfigFormGUI($parent);

        return $form;
    }
}