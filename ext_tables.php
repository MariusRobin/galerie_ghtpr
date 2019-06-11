<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ghtpr.GalerieGhtpr',
            'Pi1',
            'galeriePhoto_ghtpr'
        );

        $pluginSignature = str_replace('_', '', 'galerie_ghtpr') . '_pi1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:galerie_ghtpr/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('galerie_ghtpr', 'Configuration/TypoScript', 'galerie-photo-cms');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerieghtpr_domain_model_image', 'EXT:galerie_ghtpr/Resources/Private/Language/locallang_csh_tx_galerieghtpr_domain_model_image.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerieghtpr_domain_model_image');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerieghtpr_domain_model_album', 'EXT:galerie_ghtpr/Resources/Private/Language/locallang_csh_tx_galerieghtpr_domain_model_album.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerieghtpr_domain_model_album');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerieghtpr_domain_model_category', 'EXT:galerie_ghtpr/Resources/Private/Language/locallang_csh_tx_galerieghtpr_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerieghtpr_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerieghtpr_domain_model_tag', 'EXT:galerie_ghtpr/Resources/Private/Language/locallang_csh_tx_galerieghtpr_domain_model_tag.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerieghtpr_domain_model_tag');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerieghtpr_domain_model_author', 'EXT:galerie_ghtpr/Resources/Private/Language/locallang_csh_tx_galerieghtpr_domain_model_author.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerieghtpr_domain_model_author');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerieghtpr_domain_model_socialnetwork', 'EXT:galerie_ghtpr/Resources/Private/Language/locallang_csh_tx_galerieghtpr_domain_model_socialnetwork.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerieghtpr_domain_model_socialnetwork');

    }
);
