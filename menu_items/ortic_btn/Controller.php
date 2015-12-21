<?php
namespace Concrete\Package\OrticToolbar\MenuItem\OrticBtn;


class Controller extends \Concrete\Core\Application\UserInterface\Menu\Item\Controller
{
    /**
     * Return false if you don't want to display the button
     * @return bool
     */
    public function displayItem()
    {
        return true;
    }
}
