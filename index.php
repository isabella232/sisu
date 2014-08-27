<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2014 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Stuart McCulloch (Sonatype, Inc.) - Custom content for Sisu
 *******************************************************************************/

ob_start();
require_once("banner.php");
?>

<div id="midcolumn">
  <p>
    <?php print $projectDescription;?>
  </p>
  <center><h3><a href="docs/tutorials/index.html">Documentation is on the way!</a></h3></center>
</div>

<div id="rightcolumn">
  <div class="sideitem">
    <h6>New and Noteworthy</h6>
    <div>
      2014-04-21 &nbsp; <a href="download/">0.2.1</a> maintenance release
    </div>
    <div>
      2014-02-17 &nbsp; Sisu 0.2.0 has been released!
    </div>
  </div>
  <?php print $incubation;?>
</div>

<?php
$html = ob_get_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
