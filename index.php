<?php $pageTitle = "Sisu"; require_once ('_projectCommon.php');
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

$links = array();
$links[] = array(
  'icon' => 'fa-download',
  'url' => 'download/',
  'title' => 'Downloads',
  'text' => 'Maven, Distributions'
);
$links[] = array(
  'icon' => 'fa-users',
  'url' => 'developers/',
  'title' => 'Get Involved',
  'text' => 'Source code, Wiki'
);
$links[] = array(
  'icon' => 'fa-book',
  'url' => 'docs/',
  'title' => 'Documentation',
  'text' => 'Javadoc, Tutorials'
);
$links[] = array(
  'icon' => 'fa-support',
  'url' => 'support/',
  'title' => 'Support',
  'text' => 'Mailing lists, Bug tracker'
);

// add blank logo and main icons
$variables['header_nav'] = array(
  'links' => $links,
  'logo' => array(
    'src' => 'assets/img/blank.png',
    'alt' => 'Sisu',
    'url' => '/sisu/'
  )
);

ob_start();
require_once('banner.php');
$banner = ob_get_clean();

// add real logo banner, which will go over the blank logo
$variables['main_container_html'] = "<a href='/sisu/'>$banner</a>";
$App->setThemeVariables($variables);

$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="assets/css/banner.css"/>');

ob_start();
?>

<div id="midcolumn">
  <center><h3><a class="btn btn-huge btn-primary" href="docs/tutorials/index.html">Sisu in 5 minutes</a></h3></center>
  <hr/>
  <p>
  Sisu is a modular JSR330-based container that supports classpath scanning, auto-binding, and dynamic auto-wiring. Sisu uses Google-Guice to perform dependency injection and provide the core JSR330 support, but removes the need to write explicit bindings in Guice modules. Integration with other containers via the Eclipse Extension Registry and the OSGi Service Registry is a goal of this project.
  </p>
</div>
<p class="margin-bottom-50"/>
<div class="sideitem pull-left">
  <h6>New and Noteworthy</h6>
  <h7>2019-11-05</h7><p><a href="download/">0.3.4</a> Reproducible builds</p>
  <h7>2016-02-17</h7><p>0.3.3 Lifecycle maintenance</p>
  <h7>2015-09-14</h7><p>0.3.2 Java9+Jigsaw support</p>
  <h7>2015-02-20</h7><p>Sisu 0.3.0 has been released!</p>
</div>

<?php
$html = ob_get_clean();
$Theme->setHtml($html);
$Theme->generatePage();
?>
