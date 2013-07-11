<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2012 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

$pageTitle = $pageTitle . " / Downloads";

$html  = <<<EOHTML
<div id="midcolumn">

<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<h3 id="dist">Distribution</h3>
<p>Coming soon...</p>

<h3 id="site">Update Site</h3>
<p>Coming soon...</p>

<h3 id="maven">Maven Artifacts</h3>
<p>$milestone is available from the<a href="http://search.maven.org/#search|ga|1|g%3A%22org.eclipse.sisu%22%20AND%20v:%22$milestone%22">Central Repository</a>.</p>

</div>

<div id="rightcolumn">
$incubation
</div>
EOHTML;

# Generate the web page
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="' . $projectUrl . 'section.css"/>');
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
