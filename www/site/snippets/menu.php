<nav class="navigation" role="navigation">
	<ul class="c-navigation__list">
    <?php foreach($pages->visible() as $item): ?>
    <li class="c-navigation__list-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
