<?php

/* Herzog Dupont for YOOtheme Pro Copyright (C) 2021–2022 Thomas Weidlich GNU GPL v3 */

namespace HerzogDupont;

// No direct access to this file
defined('_JEXEC') or die();

use YOOtheme\Config;
use YOOtheme\Path;

class SettingsListener
{
    public static function initCustomizer(Config $config)
    {
        // Add panel using a dynamic PHP configuration
        $config->set('customizer.panels.herzogdupont', [
            'title'  => 'Herzog Dupont',
            'width'  => 400,
            'fields' => [
                'hd.elements.hd-counter' => [
                    'type' => 'checkbox',
                    'label' => 'Counter element',
                    'default' => true,
                    'text' => 'Add to the element library',
                ],
                'hd.elements.hd-flipcard' => [
                    'type' => 'checkbox',
                    'label' => 'Flipcard element',
                    'default' => true,
                    'text' => 'Add to the element library',
                ],
                'hd.elements.hd-image-comparison' => [
                    'type' => 'checkbox',
                    'label' => 'Image Comparison element',
                    'default' => true,
                    'text' => 'Add to the element library',
                ],
                'hd.elements.hd-lottie' => [
                    'type' => 'checkbox',
                    'label' => 'Lottie element',
                    'default' => true,
                    'text' => 'Add to the element library',
                ],
                'hd.elements.hd-progress' => [
                    'type' => 'checkbox',
                    'label' => 'Progress element',
                    'default' => true,
                    'text' => 'Add to the element library',
                ],
                'hd.elements.hd-slideshow-grid' => [
                    'type' => 'checkbox',
                    'label' => 'Slideshow Grid element',
                    'default' => true,
                    'text' => 'Add to the element library',
                ],
                'hd.elements.hd-timeline' => [
                    'type' => 'checkbox',
                    'label' => 'Timeline element',
                    'default' => true,
                    'text' => 'Add to the element library',
                ],
                'hd.elements.hd-toggle' => [
                    'type' => 'checkbox',
                    'label' => 'Toggle element',
                    'default' => true,
                    'text' => 'Add to the element library',
                ],
            ],
        ]);

        $config->set('customizer.sections.settings.fields.settings.items.herzogdupont', 'Herzog Dupont');
        
        $config->addFile('customizer', Path::get('./customizer.json'));
    }
}
