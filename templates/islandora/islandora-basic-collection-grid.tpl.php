<?php

/**
 * @file
 * islandora-basic-collection.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
dpm ( get_defined_vars() );
?>

<div class="islandora islandora-basic-collection">
  <div class="islandora-basic-collection-grid clearfix flex-boxes">
  <?php foreach($associated_objects_array as $key => $value): ?>
    <dl class="flex-box islandora-basic-collection-object <?php print $value['class']; ?>">
        <a href="/<?php print $value['path']; ?>">
        <dt class="islandora-basic-collection-thumb"><?php print $value['thumbnail']; ?></dt>
        <dd class="flex-title islandora-basic-collection-caption"><?php print filter_xss($value['title']); ?></dd></a>
    </dl>
  <?php endforeach; ?>
</div>
</div>
