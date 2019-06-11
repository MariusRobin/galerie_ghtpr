
plugin.tx_galerieghtpr_pi1 {
    view {
        # cat=plugin.tx_galerieghtpr_pi1/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:galerie_ghtpr/Resources/Private/Templates/
        # cat=plugin.tx_galerieghtpr_pi1/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:galerie_ghtpr/Resources/Private/Partials/
        # cat=plugin.tx_galerieghtpr_pi1/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:galerie_ghtpr/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_galerieghtpr_pi1//a; type=string; label=Default storage PID
        storagePid =
    }
}
