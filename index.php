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

$html = <<<EOHTML
<span class="sisu">
  <div class="sisu-0"></div>
  <div class="sisu-1 sisu-dot"></div>
  <div class="sisu-2"></div>
  <div class="sisu-3"></div>
  <div class="sisu-4 sisu-dot"></div>
  <div class="sisu-5"></div>
  <div class="sisu-6">
    <div class="sisu-1 sisu-dot"></div>
    <div class="sisu-2"></div>
    <div class="sisu-3"></div>
    <div class="sisu-4 sisu-dot"></div>
    <div class="sisu-5"></div>
    <div class="sisu-7"></div>
    <div class="sisu-8 sisu-dot"></div>
  </div>
</span>
<div id="bigbuttons">
<h3>Primary Links</h3>
<ul>
  <li><a id="buttonDocumentation" href="docs/" title="Documentation">
  <div class="buttonIcon"></div><h4>Documentation</h4>
  <p>Tutorials, Javadoc,</p><p>Design documents</p></a></li>
  <li><a id="buttonDownload" href="download/" title="Download">
  <div class="buttonIcon"></div><h4>Download</h4>
  <p>Distribution, Update site</p></a></li>
  <li><a id="buttonInvolved" href="involved/" title="Getting Involved">
  <div class="buttonIcon"></div><h4>Getting Involved</h4>
  <p>Sources, Wiki, Setup</p></a></li>
  <li><a id="buttonSupport" href="support/" title="Support">
  <div class="buttonIcon"></div><h4>Support</h4>
  <p>Bug tracker, Mailing lists</p></a></li>
</ul>
</div>
<div id="midcolumn">
  <h2>$pageTitle</h2>
  <p>
    $projectDescription
  </p>
  <h1 style="text-align:center"><a href="docs/tutorials/index.html">Documentation is on the way!</a></h1>
</div>
<div id="rightcolumn">
<!--
  <div class="sideitem">
    <h6>New and Noteworthy</h6>
    <div>
      <p>...</p>
    </div>
  </div>
-->
  $incubation
</div>
EOHTML;

# Generate the web page
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="' . $projectUrl . 'assets/css/landing.css"/>');
$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
