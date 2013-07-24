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

$pageTitle = $pageTitle . " / Documentation";

$html  = <<<EOHTML
<div id="midcolumn">

<h3 id="demo">Tutorials</h3>
<p>Coming soon...</p>

<h3 id="api">$milestone API</h3>
<ul>
<li><a href="api/org.eclipse.sisu.inject/">Sisu-Inject</a></li>
<li><a href="api/org.eclipse.sisu.mojos/">Sisu-Mojos</a></li>
<li><a href="api/org.eclipse.sisu.plexus/">Sisu-Plexus</a></li>
</ul>
<p><i>also available from the Central Repository for IDEs with Maven integration.</i></p>

<h3 id="design">Design</h3>
<p>Coming soon...</p>

</div>

<div id="rightcolumn">
$incubation
</div>
EOHTML;

# Generate the web page
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="' . $projectUrl . 'css/section.css"/>');
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
