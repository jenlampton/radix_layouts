<?php
/**
 * @file
 * Template for Radix Sanderson.
 */
?>
<div class="radix-sanderson <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php if (!empty($content['header'])): ?>
    <header id="header" class="header" role="header">
      <div class="container">
        <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>

  <?php if ($messages): ?>
    <section class="messages container">
      <?php print $messages; ?>
    </section>
  <?php endif; ?>

  <main class="main container" role="main">
    <div class="page-header">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>

    <?php if ($tabs): ?>
      <div class="tabs">
        <?php print $tabs; ?>
      </div>
    <?php endif; ?>

    <?php print $action_links; ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 radix-layouts-column1 panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['column1']; ?>
          </div>
        </div>
        <div class="col-md-6 radix-layouts-column2 panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['column2']; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 radix-layouts-secondarycolumn1 panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['secondarycolumn1']; ?>
          </div>
        </div>
        <div class="col-md-4 radix-layouts-secondarycolumn2 panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['secondarycolumn2']; ?>
          </div>
        </div>
        <div class="col-md-4 radix-layouts-secondarycolumn3 panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['secondarycolumn3']; ?>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php if ($content['footer']): ?>
    <footer id="footer" class="footer" role="footer">
      <div class="container">
        <?php print $content['footer']; ?>
      </div>
    </footer>
  <?php endif; ?>
</div><!-- /.radix-sanderson -->
