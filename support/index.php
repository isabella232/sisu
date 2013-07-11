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

$pageTitle = $pageTitle . " / Support";

$issueTracker = normalizeHttpUrl($project->getBugzillaUrl()); 

$html  = <<<EOHTML
<div id="midcolumn">

<h3 id="mail">Mailing Lists</h3>
<p>
  If you have a question about using Sisu that the existing documentation does not answer, we'd like to hear from you on
  the <a href="http://dev.eclipse.org/mailman/listinfo/sisu-users/">user mailing list</a>. Questions about the internal
  design of Sisu should be directed to the <a href="http://dev.eclipse.org/mailman/listinfo/sisu-dev/">developer mailing list</a>.
</p>
<p>
  Before posting your question, please search the list archives
  (<a href="http://dev.eclipse.org/mhonarc/lists/sisu-users/">users</a>
  / <a href="http://dev.eclipse.org/mhonarc/lists/sisu-dev/">dev</a>)
  in case your question has been brought up before and was already answered.
</p>

<h3 id="issues">Issue Tracker</h3>
<p>
  If you encountered a bug or have a feature request, please fill a sufficiently detailed issue in our
  <a href="$issueTracker">issue tracker</a>.
  Ideally, your description and attached logs should be enough to recreate your issue.
</p>
<p>
  Please also take time to check if your issue has already been
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=Technology&product=Sisu">logged</a>
  by someone else. 
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
