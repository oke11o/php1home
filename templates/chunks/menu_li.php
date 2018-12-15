<?php if(!$security || $security == $user['role']): ?>
    <li class="nav-item <?php if ($isActive) { echo 'active'; } ?> <?php if ($children) { echo 'dropdown'; } ?>">
        <a
            class="nav-link  <?php if ($disabled) { echo 'disabled'; } ?> <?php if ($children) { echo 'dropdown-toggle'; } ?>"
            href="<?= $menuItem['href'] ?? ''; ?>"
            <?php if ($children) { echo 'id="dropdown'.$i.'" data-toggle="dropdown"';} ?>
        >
            <?= $menuItem['name']; ?>
            <?php if ($isActive) {
                echo '<span class="sr-only">(current)</span>';
            } ?>
        </a>
        <?php if ($children): ?>
            <div class="dropdown-menu" aria-labelledby="dropdown<?= $i ?>">
                <?php foreach ($children as $child) : ?>

                    <a class="dropdown-item" href="<?= $child['href'] ?>"><?= $child['name'] ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif ?>
    </li>
<?php endif ?>