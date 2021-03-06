<?php defined("SYSPATH") or die("No direct script access.") ?>
<?= $theme->sidebar_top() ?>
<div class="g-toolbar">
  <div id="g-view-menu" class="g-buttonset">
    <? if ($page_type == "album"):?>
      <?= $theme->album_menu() ?>
    <? elseif ($page_type == "photo") : ?>
      <?= $theme->photo_menu() ?>
    <? elseif ($page_type == "movie") : ?>
      <?= $theme->movie_menu() ?>
    <? elseif ($page_type == "tag") : ?>
      <?= $theme->tag_menu() ?>
    <? endif ?>
  </div>
</div>

<?= $theme->sidebar_blocks() ?>
<?= $theme->sidebar_bottom() ?>
