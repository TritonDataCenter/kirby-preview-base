<a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

<?php if($p->hasVisibleChildren()) : ?>
<ul class="submenu nav-children" id="nav-collapsible-<?php echo $p->uid() ?>" aria-hidden="false">
  <?php foreach($p->children()->visible() as $p): ?>
  <li class="<?php e($p->isOpen(), 'sidebar-nav-active') ?>">

    <?php snippet('sidebar-li', array('p' => $p)) ?>

  </li>
  <?php endforeach ?>
</ul>
<?php endif ?>
