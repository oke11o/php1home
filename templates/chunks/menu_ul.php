<ul class="navbar-nav mr-auto">
    <?php
    foreach ($menu as $i => $menuItem) {
        $attrs = [];
        if (array_key_exists('attrs', $menuItem)) {
            $attrs = $menuItem['attrs'];
        }
        $isActive = false;
        if (isset($attrs['isActive'])) {
            $isActive = true;
        }
        $disabled = false;
        if (isset($attrs['disabled'])) {
            $disabled = true;
        }
        $children = [];
        if (isset($menuItem['children'])) {
            $children = $menuItem['children'];
        }
        include 'menu_li.php';
    }
    ?>
</ul>