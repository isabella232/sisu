<?php $pageTitle = "Documentation"; require_once ('../_projectCommon.php');
/**
 * Copyright (c) 2015-present Eclipse Foundation.
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

<h3 id="demo">Tutorials</h3>
<p><a href="tutorials/index.html">Sisu in 5 minutes</a></p>

<h3 id="api">API</h3>
<ul>
<li><a href="api/org.eclipse.sisu.inject/">Sisu-Inject <?php print $currentRelease;?> javadoc</a></li>
<li><a href="api/org.eclipse.sisu.plexus/">Sisu-Plexus <?php print $currentRelease;?> javadoc</a></li>
<li><a href="api/org.eclipse.sisu.mojos/">sisu-maven-plugin site</a></li>
</ul>
<p><i>also available from the Central Repository for IDEs with Maven integration.</i></p>

<h3 id="design">Design</h3>
<p>Coming soon...</p>

</div>

<?php
$html = ob_get_clean();
$Theme->setHtml($html);
$Theme->generatePage();
?>
