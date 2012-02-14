<?php
/*******************************************************************************
 * Copyright (c) 2011, 2012 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/classes/Project.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/classes/ProjectSummary.class.php");

$projectId = "technology.sisu";
$project = getProject($projectId);
$summary = new ProjectSummary($project);
$projectName = $project->getName();
$projectShortName = $project->getShortName();
$projectDescription = $project->getDescription();
$projectUrl = normalizeRelativeUrl($project->getProjectUrl());
$issueTracker = normalizeHttpUrl($project->getBugzillaUrl()); 
$wiki = normalizeHttpUrl($project->getWikiUrl());
$sources = "http://git.eclipse.org/c/sisu/";
$ci = "https://hudson.eclipse.org/hudson/";
$apidocs = "http://download.eclipse.org/sisu/org.eclipse.sisu.inject/current/apidocs/";
$about = "/projects/project.php?id=$projectId";
$iplog = "/projects/ip_log.php?projectid=$projectId";
$incubation = $summary->getIncubationSideItem();

# Set the theme for your project's web pages.
# See http://eclipse.org/phoenix/
$theme = "Nova";

# Define keywords, author and title here, or in each PHP page specifically
$pageKeywords	= "sisu, dependency injection, inject, ioc, jsr330";
$pageAuthor		= "Stuart McCulloch";
$pageTitle 		= $projectName;

# Define your project-wide Navigation here
# This appears on the left of the page if you define a left nav
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
# these are optional

# If you want to override the eclipse.org navigation, uncomment below.
$Nav->setLinkList(array());

# Break the navigation into sections
$Nav->addNavSeparator($projectName, $projectUrl . "/");
$Nav->addCustomNav("About", "/projects/project.php?id=$projectId", "_self", 3);
$Nav->addCustomNav("Downloads", $projectUrl . "/download/", "_self", 3);
$Nav->addCustomNav("Documentation", $projectUrl . "/documentation/", "_self", 3);
$Nav->addCustomNav("Support", $projectUrl . "/support/", "_self", 3);
$Nav->addCustomNav("Developers", $projectUrl . "/developers/", "_self", 3);

# top navigation bar
# To override and replace the navigation with your own, uncomment the line below.
$Menu->setMenuItemList(array());
$Menu->addMenuItem("Home", $projectUrl . "/", "_self");
$Menu->addMenuItem("Downloads", $projectUrl . "/download/", "_self");
$Menu->addMenuItem("Documentation", $projectUrl . "/documentation/", "_self");
$Menu->addMenuItem("Support", $projectUrl . "/support/", "_self");
$Menu->addMenuItem("Developers", $projectUrl . "/developers/", "_self");

# To define additional CSS or other pre-body headers
# FIXME: Both CSS files cause the rightcolumn to be improperly placed/rendered
# $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/default/style.css"/>');
# $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="' . $projectUrl . '/style.css"/>');

# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
$App->Promotion = TRUE;

# If you have Google Analytics code, use it here
# $App->SetGoogleAnalyticsTrackingCode("YOUR_CODE");
?>
