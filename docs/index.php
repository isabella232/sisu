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

$pageTitle 		= $pageTitle . " - Documentation";

$gitRepos = $project->getSourceRepositories(); 

$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>

<h3 id="apidocs">API Documentation</h3>
<p>
  For technical details regarding usage of the API, please consult the
  generated <a href="$apidocs">API docs</a> (coming soon) of the various classes.
</p>
<p>
  These API docs are also available from the Central Repository such that IDEs with Maven integration can present
  you with that information automatically when you edit your code. 
</p>

<h3 id="wiki">Wiki</h3>
<p>
  More high-level and task-focused documentation regarding $projectName's usage can be found in our
  <a href="$wiki">wiki space</a>.
</p>

</div>

<div id="rightcolumn">
$incubation
</div>
EOHTML;

# Generate the web page
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="' . $projectUrl . 'section.css"/>');
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
