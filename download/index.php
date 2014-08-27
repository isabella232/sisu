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

$pageTitle = "Downloads";

ob_start();
require_once("../banner.php");
?>

<div id="midcolumn">

<p><i>The following downloads are provided under the terms and conditions of the
<br><a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>
unless otherwise specified.</i></p>

<h3 id="dist">Distribution</h3>
<ul>
<li><a href="http://www.eclipse.org/downloads/download.php?file=/sisu/releases/org.eclipse.sisu.inject.site-<?php print $release;?>.zip">Sisu-Inject <?php print $release;?> bundles</a></li>
<li><a href="http://www.eclipse.org/downloads/download.php?file=/sisu/releases/org.eclipse.sisu.plexus.site-<?php print $release;?>.zip">Sisu-Plexus <?php print $release;?> bundles</a></li>
</ul>

<h3 id="site">Update Site</h3>
<p>To install a bundle distribution download the zip and point your P2 installer at it.</p>

<h3 id="maven">Maven Artifacts</h3>
<p>The following artifacts are also available from the <a href="http://search.maven.org/#search|ga|1|g%3A%22org.eclipse.sisu%22%20AND%20v:%22<?php print $release;?>%22">Central Repository</a>:</p>

<pre>
  &lt;dependency&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;org.eclipse.sisu.inject&lt;/artifactId&gt;
    &lt;version&gt;<?php print $release;?>&lt;/version&gt;
  &lt;/dependency&gt;

  &lt;dependency&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;org.eclipse.sisu.inject.extender&lt;/artifactId&gt;
    &lt;version&gt;<?php print $release;?>&lt;/version&gt;
  &lt;/dependency&gt;
</pre>

<pre>
  &lt;plugin&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;sisu-maven-plugin&lt;/artifactId&gt;
    &lt;version&gt;0.2.0&lt;/version&gt;
  &lt;/plugin&gt;
</pre>

<pre>
  &lt;dependency&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;org.eclipse.sisu.plexus&lt;/artifactId&gt;
    &lt;version&gt;<?php print $release;?>&lt;/version&gt;
  &lt;/dependency&gt;

  &lt;dependency&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;org.eclipse.sisu.plexus.extender&lt;/artifactId&gt;
    &lt;version&gt;<?php print $release;?>&lt;/version&gt;
  &lt;/dependency&gt;
</pre>

</div>

<div id="rightcolumn">
<?php print $incubation;?>
</div>

<?php
$html = ob_get_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
