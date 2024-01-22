<?php
function buildMenu($options)
{
    foreach ($options as $key => $value) {
        echo '<li>';
        echo '<a href="' . ($value['link'] ?? '#') . '"><i class="' . ($value['icon'] ?? '') . '"></i><span class="title">' . $key . '</span></a>';

        // Se houver submenus, chama recursivamente a função
        if (isset($value['submenu'])) {
            echo '<ul class="sub-menu">';
            buildMenu($value['submenu']);
            echo '</ul>';
        }

        echo '</li>';
    }
}
?>