<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2015 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Stuart McCulloch (Sonatype, Inc.) - Custom content for Sisu
 *******************************************************************************/

ob_start();
?>

<div id="midcolumn">
  <center><h3><a class="btn btn-huge btn-primary" href="docs/tutorials/index.html">Sisu in 5 minutes</a></h3></center>
  <hr/>
  <p><?php print $projectDescription;?></p>
</div>

<div id="rightcolumn">
  <div class="sideitem">
    <h6>New and Noteworthy</h6>
    <h7>2015-02-20</h7><p>Sisu <a href="download/">0.3.0</a> has been released!</p>
    <h7>2014-04-21</h7><p>0.2.1 maintenance release</p>
  </div>
  <?php print $incubation;?>
</div>

<?php
$html = ob_get_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
