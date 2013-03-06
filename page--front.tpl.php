<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page" class="container-16 clearfix">

  <div id="site-header" class="clearfix">
    <div id="branding" class="grid-4">
    <?php if ($page['logo']): ?>
	<?php //if ($linked_logo_img): ?>
      <span id="logo">
		<?php print render($page['logo']); ?>
		<?php //print $linked_logo_img; ?>
	  </span>
    <?php endif; ?>
	<?php if ($site_slogan): ?>
    <div id="site-slogan" class="grid-8 prefix-8"><?php //print $site_slogan; ?></div>
    <?php endif; ?>
    <?php if ($linked_site_name): ?>
      <h1 id="site-name" class="grid-3 omega"><?php //print $linked_site_name; ?></h1>
    <?php endif; ?>
    </div>

  <?php if ($page['search_box']): ?>
    <div id="search-box" class="grid-3 prefix-9"><?php print render($page['search_box']); ?></div>
  <?php endif; ?>
  
  <div id="site-subheader" class="clearfix">
  <?php if ($page['highlighted']): ?>
    <div id="highlighted" class="grid-4">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>
  
	<div id="highlighted_center" class="grid-4">

		<p>
				<img alt="header" src="<?php echo base_path().path_to_theme().'/images/'; ?>header_<?php echo  i18n_language()->language; ?>.png"  /></p>

	    </div>

   <?php if ($page['highlighted_center']): ?>
    <div id="highlighted_center" class="grid-4">
	
	
      <?php print render($page['highlighted_center']); ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['header']): ?>
    <div id="header-region" class="grid-7">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  </div>

  <div id="main" class="column <?php print ns('grid-16', $page['sidebar_first'], 6, $page['sidebar_second'], 3) . ' ' . ns('push-3', !$page['sidebar_first'], 4); ?>">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php //print $feed_icons; ?>
  </div>

<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-10', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3 <?php print ns('push-1', 0); ?>">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>

	<div id="message" class="grid-16"> 
		<?php print $messages; ?>
    </div>
  
  <div id="main-home" class="grid-16"> 
  	<?php if ($page['main_uno']): ?>
		<div id="main-1" class="grid-4 alpha"><?php print render($page['main_uno']); ?></div>
	<?php endif; ?>
	
	<?php if ($page['main_due']): ?>
		<div id="main-2" class="grid-4"><?php print render($page['main_due']); ?></div>
	<?php endif; ?>
	
	<?php if ($page['main_tre']): ?>
		<div id="main-3" class="grid-4"><?php print render($page['main_tre']); ?></div>
	<?php endif; ?>
	
	<?php if ($page['main_quattro']): ?>
		<div id="main-4" class="grid-4 omega"><?php print render($page['main_quattro']); ?></div>
	<?php endif; ?>
  </div>

<div id="main-bottom" class="grid-16">
	<?php if ($page['bottom_uno']): ?>
		<div id="bottom-1" class="grid-8 alpha"><?php print render($page['bottom_uno']); ?></div>
	<?php endif; ?>
	<?php if ($page['bottom_due']): ?>
	<div id="bottom-2" class="grid-4"><?php print render($page['bottom_due']); ?></div>
	<?php endif; ?>
	<?php if ($page['bottom_tre']): ?>
	<div id="bottom-3" class="grid-4 omega"><?php print render($page['bottom_tre']); ?></div>
	<?php endif; ?>
</div>


  <div id="footer">
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="grid-16">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </div>

</div>
