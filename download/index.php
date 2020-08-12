<?php $pageTitle = "Downloads"; require_once ('../_projectCommon.php');
/**
 * Copyright (c) 2015-present Eclipse Foundation and others.
 *
 * This program and the accompanying materials are made
 * available under the terms of the Eclipse Public License 2.0
 * which is available at https://www.eclipse.org/legal/epl-2.0/
 *
 * Contributors:
 *   Stuart McCulloch - Custom content for Sisu
 *
 * SPDX-License-Identifier: EPL-2.0
 */
ob_start();
?>

<div id="midcolumn">

<p><i>The following downloads are provided under the terms and conditions of the
<br><a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>
unless otherwise specified.</i></p>

<h3 id="dist">Distribution</h3>
<ul>
<li><a href="https://repo1.maven.org/maven2/org/eclipse/sisu/org.eclipse.sisu.inject.site/<?php print $currentRelease;?>/org.eclipse.sisu.inject.site-<?php print $currentRelease;?>.zip">Sisu-Inject <?php print $currentRelease;?> bundles</a></li>
<li><a href="https://repo1.maven.org/maven2/org/eclipse/sisu/org.eclipse.sisu.plexus.site/<?php print $currentRelease;?>/org.eclipse.sisu.plexus.site-<?php print $currentRelease;?>.zip">Sisu-Plexus <?php print $currentRelease;?> bundles</a></li>
<!--
<li><a href="http://www.eclipse.org/downloads/download.php?file=/sisu/releases/org.eclipse.sisu.inject.site-<?php print $currentRelease;?>.zip">Sisu-Inject <?php print $currentRelease;?> bundles</a></li>
<li><a href="http://www.eclipse.org/downloads/download.php?file=/sisu/releases/org.eclipse.sisu.plexus.site-<?php print $currentRelease;?>.zip">Sisu-Plexus <?php print $currentRelease;?> bundles</a></li>
-->
</ul>

<h3 id="site">Update Site</h3>
<p>To install a bundle distribution download the zip and point your P2 installer at it.</p>

<h3 id="maven">Maven Artifacts</h3>
<p>The following artifacts are also available from the <a href="http://search.maven.org/#search|ga|1|g%3A%22org.eclipse.sisu%22%20AND%20v:%22<?php print $currentRelease;?>%22">Central Repository</a>:</p>

<pre>
  &lt;dependency&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;org.eclipse.sisu.inject&lt;/artifactId&gt;
    &lt;version&gt;<?php print $currentRelease;?>&lt;/version&gt;
  &lt;/dependency&gt;

  &lt;dependency&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;org.eclipse.sisu.inject.extender&lt;/artifactId&gt;
    &lt;version&gt;<?php print $currentRelease;?>&lt;/version&gt;
  &lt;/dependency&gt;
</pre>

<pre>
  &lt;plugin&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;sisu-maven-plugin&lt;/artifactId&gt;
    &lt;version&gt;<?php print $currentRelease;?>&lt;/version&gt;
  &lt;/plugin&gt;
</pre>

<pre>
  &lt;dependency&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;org.eclipse.sisu.plexus&lt;/artifactId&gt;
    &lt;version&gt;<?php print $currentRelease;?>&lt;/version&gt;
  &lt;/dependency&gt;

  &lt;dependency&gt;
    &lt;groupId&gt;org.eclipse.sisu&lt;/groupId&gt;
    &lt;artifactId&gt;org.eclipse.sisu.plexus.extender&lt;/artifactId&gt;
    &lt;version&gt;<?php print $currentRelease;?>&lt;/version&gt;
  &lt;/dependency&gt;
</pre>

</div>

<?php
$html = ob_get_clean();
$Theme->setHtml($html);
$Theme->generatePage();
?>
