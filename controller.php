<?php

namespace Concrete\Package\OrticToolbar;

use Package,
    Core;

class Controller extends Package
{
    protected $pkgHandle = 'ortic_toolbar';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '1.0';

    public function getPackageName()
    {
        return t('Ortic Button');
    }

    public function getPackageDescription()
    {
        return t('Installs the awesome ortic butotn package');
    }

    public function on_start()
    {
        $req = \Request::getInstance();

        // Make sure we don't inject our code if it's called by an AJAX request
        if (!$req->isXmlHttpRequest()) {
            /* @var $menuHelper \Concrete\Core\Application\Service\UserInterface\Menu */
            $menuHelper = Core::make('helper/concrete/ui/menu');

            $menuHelper->addPageHeaderMenuItem('ortic_btn', $this->pkgHandle, array(
                'icon' => 'question',
                'label' => t('Ortic'),
                'position' => 'right',
                'href' => 'http://www.ortic.com',
                'linkAttributes' => array('id' => 'ortic-button', 'target' => '_blank')
            ));
        }
    }
}
