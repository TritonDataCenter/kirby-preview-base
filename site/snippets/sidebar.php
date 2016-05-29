<aside>
  <p class="intro"><?php echo $site->description()->kirbytext() ?></p>
  <a class="skip-link visuallyhidden focusable" href="#main">Skip to Main Content</a>
  <nav class="sidebar-nav" role="navigation">
    <ul>
      <?php foreach($pages->visible() as $p): ?>
      <li class="group<?php e($p->isOpen(), ' sidebar-nav-active') ?>">

        <?php snippet('sidebar-li', array('p' => $p)) ?>

      </li>
      <?php endforeach ?>
    </ul>
  </nav>
</aside>
