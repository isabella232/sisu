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

$pageTitle = "Documentation";

ob_start();
?>

<div id="midcolumn">

<h3 id="demo">Tutorials</h3>
<p><a href="tutorials/index.html">In progress...</a></p>

<h3 id="api">API</h3>
<ul>
<li><a href="api/org.eclipse.sisu.inject/">Sisu-Inject <?php print $release;?> javadoc</a></li>
<li><a href="api/org.eclipse.sisu.plexus/">Sisu-Plexus <?php print $release;?> javadoc</a></li>
<li><a href="api/org.eclipse.sisu.mojos/">sisu-maven-plugin site</a></li>
</ul>
<p><i>also available from the Central Repository for IDEs with Maven integration.</i></p>

<h3 id="design">Design</h3>
<p>Coming soon...</p>

</div>

<div id="rightcolumn">
<?php print $incubation;?>
</div>

<?php
$html = ob_get_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
