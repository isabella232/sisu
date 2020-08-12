<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/eclipse.org-common/system/app.class.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/eclipse.org-common/system/nav.class.php');

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

$currentRelease = '0.3.4';

$projectInfo = 'https://projects.eclipse.org/projects/technology.sisu/';
$projectSource = 'https://git.eclipse.org/c/sisu/';
$projectCi = 'https://ci.eclipse.org/sisu/';
$projectBugs = 'https://bugs.eclipse.org/bugs/describecomponents.cgi?product=Sisu';
$projectWiki = 'http://wiki.eclipse.org/Sisu';

$pageKeywords = 'sisu, dependency injection, inject, ioc, jsr330';
$pageAuthor = 'Stuart McCulloch';

$App = new App();
$Nav = new Nav();

$Nav->addNavSeparator('Sisu', '/sisu/');
$Nav->addCustomNav('Javadoc', '/sisu/docs/api/org.eclipse.sisu.inject/reference/packages.html', '_self', NULL);
$Nav->addCustomNav('Source code', $projectSource, '_self', NULL);
$Nav->addCustomNav('Project info', $projectInfo, '_self', NULL);

$incubation = '<div style="text-align:center"><a href="/projects/what-is-incubation.php"><img class="img-responsive"
  align="center" src="https://projects.eclipse.org/sites/all/modules/custom/pmi/project_state/images/incubating.png"
  border="0" alt="Incubation" /></a></div>';

$Nav->setHTMLBlock($incubation);

$Theme = $App->getThemeClass();
$Theme->setPageAuthor($pageAuthor);
$Theme->setPageKeywords($pageKeywords);
$Theme->setPageTitle($pageTitle);
$Theme->setBreadcrumb($pageTitle);
$Theme->setNav($Nav);

$variables = array();
$variables['body_classes'] = '';
$variables['breadcrumbs_html'] = '';
$variables['hide_breadcrumbs'] = FALSE;
$variables['leftnav_html'] = '';
$variables['main_container_classes'] = 'container';
$variables['main_container_html'] = '';

// disable big button in header
$variables['btn_cfa'] = array(
  'hide' => TRUE,
  'text' => ' '
);

$App->setThemeVariables($variables);

?>
