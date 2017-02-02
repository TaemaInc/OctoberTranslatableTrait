<?php

namespace Lunfel\OctoberCMS\Translation;

trait ComponentTranslatable {
	public $locale = 'en';

	private function setupLocale()
	{
		// Get current locale if rainlab.translate plugin is installed
        if (class_exists('\RainLab\Translate\Classes\Translator')) {
            $this->locale = \RainLab\Translate\Classes\Translator::instance()->getLocale();
        }
	}
}