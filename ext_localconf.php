<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Ghtpr.GalerieGhtpr',
            'Pi1',
            [
                'Image' => 'latest',
                'Category' => 'list, show',
                'Album' => 'list, show, latest',
                'Author' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Album' => 'search'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = galerie_ghtpr-plugin-pi1
                        title = LLL:EXT:galerie_ghtpr/Resources/Private/Language/locallang_db.xlf:tx_galerie_ghtpr_pi1.name
                        description = LLL:EXT:galerie_ghtpr/Resources/Private/Language/locallang_db.xlf:tx_galerie_ghtpr_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = galerieghtpr_pi1
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'galerie_ghtpr-plugin-pi1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:galerie_ghtpr/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
    }
);
