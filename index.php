<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2011, 2012 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

$html  = <<<EOHTML
<div id="bigbuttons">
	<h3>Primary Links</h3>
	<ul>
		<li><a id="buttonDownload" href="download/" title="Download">Eclipse Distribution, Update Site</a></li>
		<li><a id="buttonDocumentation" href="documentation/" title="Documentation">Tutorials, Examples, Reference Documentation</a></li>
		<li><a id="buttonSupport" href="support/" title="Support">Bug Tracker, Newsgroup, Support</a></li>
		<li><a id="buttonInvolved" href="developers/" title="Getting Involved">VCS, Workspace Setup, Wiki, Committers</a></li>
	</ul>
</div>

<div id="midcolumn">
<h2>$pageTitle</h2>
<p>
  $projectDescription
</p>
</div>

<div id="rightcolumn">
$incubation

<div class="sideitem">
<h6>Resources</h6>
<ul>
  <li><a href="$about">About $projectName</a></li>
  <li><a href="developers/#sources">Sources</a></li>
  <li><a href="documentation/#apidocs">API Docs</a></li>
  <li><a href="support/#issues">Issues</a></li>
  <li><a href="$wiki">Wiki</a></li>
  <li><a href="http://www.eclipse.org/legal/epl-v10.html">License</a></li>
</ul>
</div>
</div>

EOHTML;

$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>' . "\n\t");

# Generate the web page
$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
