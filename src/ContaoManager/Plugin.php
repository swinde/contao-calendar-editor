<?php

/**
 * This file is part of 
 * 
 * CalendarEditorBundle
 * @copyright  Daniel Gaußmann 2018
 * @author     Daniel Gaußmann (Gausi) 
 * @package    Calendar_Editor
 * @license    LGPL-3.0-or-later
 * @see        https://github.com/DanielGausi/Contao-CalendarEditor
 *
 * an extension for
 * Contao Open Source CMS
 * (c) Leo Feyer, LGPL-3.0-or-later
 *
 */
 
 
namespace DanielGausi\CalendarEditorBundle\ContaoManager;


use Contao\CoreBundle\ContaoCoreBundle;
use Contao\CalendarBundle\ContaoCalendarBundle;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use DanielGausi\CalendarEditorBundle\CalendarEditorBundle;
use MenAtWork\MultiColumnWizardBundle\MultiColumnWizardBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [			
            BundleConfig::create(CalendarEditorBundle::class)
                ->setLoadAfter(
					[ ContaoCoreBundle::class,
					  ContaoCalendarBundle::class,
					  MultiColumnWizardBundle::class
					]
				)
			->setReplace(['calendar']),
        ];
    }
}