<?php

namespace Kunstmaan\ViewBundle\Helper;

use Kunstmaan\AdminNodeBundle\Modules\NodeMenu;

class FrontMenuService {

    protected $frontMenu;

    public function __construct() {
        $this->frontMenu = array();
    }

    public function addFrontMenu($Frontmenu) {
        $this->frontMenu[] = $Frontmenu;
    }

    public function getNodeMenu($container, $locale, $node) {
        return new NodeMenu($container, $locale, $node);
    }
}