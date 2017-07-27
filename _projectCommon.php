<?php
/*******************************************************************************
 * Copyright (c) 2015 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Stuart McCulloch (Sonatype, Inc.) - Custom content for Sisu
 *******************************************************************************/

require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/classes/Project.class.php");

$projectId = "technology.sisu";
$project = getProject($projectId);
$projectName = $project->getName();
$projectShortName = $project->getShortName();
$projectDescription = $project->getDescription();
$projectUrl = "http://www.eclipse.org/sisu/";
$issueTracker = normalizeHttpUrl($project->getBugzillaUrl()); 
$wiki = normalizeHttpUrl($project->getWikiUrl());
$sources = "http://git.eclipse.org/c/sisu/";
$ci = "https://hudson.eclipse.org/sisu/";
$about = "/projects/project.php?id=$projectId";
$iplog = "/projects/ip_log.php?projectid=$projectId";
$release = "0.3.3";

# Set the theme for your project's web pages.
# See the Committer Tools "Phoenix" secion in the How Do I? for list of themes
# https://dev.eclipse.org/committers/
$theme = "solstice";

# Define keywords, author and title here, or in each PHP page specifically
$pageKeywords	= "sisu, dependency injection, inject, ioc, jsr330";
$pageAuthor	= "Stuart McCulloch";
$pageTitle 	= $projectName;

# Define your project-wide Navigation here
# This appears on the left of the page if you define a left nav
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
# these are optional

# If you want to override the eclipse.org navigation, uncomment below.
# $Nav->setLinkList(array());

# Break the navigation into sections
$Nav->addNavSeparator("$projectName", $projectUrl);
$Nav->addCustomNav("Documentation", $projectUrl . "docs/", "_self", 3);
$Nav->addCustomNav("Downloads", $projectUrl . "download/", "_self", 3);
$Nav->addCustomNav("Get Involved", $projectUrl . "developers/", "_self", 3);
$Nav->addCustomNav("Support", $projectUrl . "support/", "_self", 3);
$Nav->addCustomNav("Changelog", "http://wiki.eclipse.org/Sisu/Changelog", "_self", 3);
$Nav->addCustomNav("About Sisu", "/projects/project.php?id=$projectId", "_self", 3);

# top navigation bar
# To override and replace the navigation with your own, uncomment the line below.
# $Menu->setMenuItemList(array());
# $Menu->addMenuItem("Home", $projectUrl, "_self");
# $Menu->addMenuItem("Documentation", $projectUrl . "docs/", "_self");
# $Menu->addMenuItem("Downloads", $projectUrl . "download/", "_self");
# $Menu->addMenuItem("Get Involved", $projectUrl . "developers/", "_self");
# $Menu->addMenuItem("Support", $projectUrl . "support/", "_self");

# incubation side item
$incubation = "<div class=\"sideitem\">
  <h6><img src=\"$images->incubation_conforming_small\" align=\"right\"/>Incubation</h6>
  <div style=\"text-align:center\"><a href=\"/projects/what-is-incubation.php\"><img
    align=\"center\" src=\"$images->incubation_large\"
    border=\"0\" alt=\"Incubation\" /></a></div>
  </div>";

# To define additional CSS or other pre-body headers

ob_start();
require_once("banner.php");
$banner = ob_get_clean();

# Initialize custom solstice $variables.
$variables = array();
# Add classes to <body>. (String)
$variables['body_classes'] = '';
# Insert custom HTML in the breadcrumb region. (String)
$variables['breadcrumbs_html'] = '';
# Hide the breadcrumbs. (Bool)
$variables['hide_breadcrumbs'] = FALSE;
# Insert HTML before the left nav. (String)
$variables['leftnav_html'] = "$banner";
# Update the main container class (String)
$variables['main_container_classes'] = 'container';
# Insert HTML after opening the main content container, before the left sidebar. (String)
$variables['main_container_html'] = '';

# Set Solstice theme variables. (Array)
$App->setThemeVariables($variables);

# Insert extra html before closing </head> tag.
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/sisu/assets/css/banner.css"/>');

# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
$App->Promotion = FALSE;

# If you have Google Analytics code, use it here
# $App->SetGoogleAnalyticsTrackingCode("YOUR_CODE");
?>
