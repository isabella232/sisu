<?php $pageTitle = "Get Involved"; require_once ('../_projectCommon.php');
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

<h3 id="wiki">Wiki</h3>
<p>
  Information about building, testing and debugging Sisu can be found in our <a href="<?php print $projectWiki;?>">wiki space</a>.
</p>

<h3 id="sources">Source Code</h3>
<p>
  The source files of the project are stored in <a href="<?php print $projectSource;?>">Git repositories</a>. Please
  see the summary tab of a repository for details about the URL required to clone a repository to your local machine. 
</p>
<p>
  In addition to the Git repositories hosted by the Eclipse Foundation, there are also
  <a href="https://github.com/eclipse">mirror repositories at GitHub</a>. Please note that due to legal requirements, 
  we will not accept pull requests from these repositories. Instead, contributors are asked to create a patch file and
  attach it to an entry in our issue tracker.
</p>
<p>
  When editing sources files, please respect our existing code style. Formatter styles for some IDEs are available below:
</p>
<ul>
  <li><a href="http://maven.apache.org/developers/maven-eclipse-codestyle.xml">Eclipse 3.2+ formatter settings</a></li>
  <li><a href="http://maven.apache.org/developers/maven-idea-codestyle.xml">IntelliJ IDEA 4.5+ formatter settings</a></li>
</ul>
<p>
  Building the sources requires <a href="http://maven.apache.org/">Apache Maven 3.0 or newer</a> and a Java Developer
  Kit for Java 6 or higher (this is needed to compile the optional annotation processing support).
</p>

<h3 id="iplog">Intellectual Property Log</h3>
<p>
  All Eclipse projects are required to maintain an
  <a href="http://wiki.eclipse.org/Development_Resources/IP_Log">IP log</a> for the employed intellectual property.
  Committers should especially pay attention to the
  <a href="http://wiki.eclipse.org/Development_Resources/IP_Log#Contributions">IP due diligence process</a>
  when handling external contributions.
</p>
<p>
  We use the <a href="http://wiki.eclipse.org/Development_Resources/Automatic_IP_Log">automatic IP log tool</a>
  to track code contributions and third-party dependencies.
</p>

<h3 id="issues">Bug Tracker</h3>
<p>
  The project uses Bugzilla to manage <a href="<?php print $projectBugs;?>">bugs and feature requests</a>.
</p>

<h3 id="mail">Mailing Lists</h3>
<ul>
  <li><a href="http://dev.eclipse.org/mailman/listinfo/sisu-dev/">Developer mailing list</a> (sisu-dev)</li>
  <li><a href="http://dev.eclipse.org/mailman/listinfo/sisu-users/">User mailing list</a> (sisu-user)</li>
</ul>

<h3 id="ci">Continuous Integration</h3>
<p>
  We use <a href="<?php print $projectCi;?>">Jenkins</a> for our continuous integration
  builds. Jenkins is configured to periodically poll our Git repositories for changes and automatically starts a new
  build when required. We also have a daily <a href="https://ci.eclipse.org/sisu/job/sisu-sonar/">Sonar job</a>
  to track <a href="https://dev.eclipse.org/sonar/dashboard/index/org.eclipse.sisu:sisu-inject">code quality</a>.
</p>
<p>
  Besides cross-platform testing, CI is also used to automatically deploy snapshot/nightly builds. Those builds are
  generally not production-ready but only enable feedback from early access users. The following Maven repository can
  be used to access these snapshot builds:
</p>
<pre>
  &lt;repository&gt;
    &lt;id&gt;sonatype-nexus-snapshots&lt;/id&gt;
    &lt;url&gt;https://oss.sonatype.org/content/repositories/snapshots&lt;/url&gt;
    &lt;releases&gt;&lt;enabled&gt;false&lt;/enabled&gt;&lt;/releases&gt;
    &lt;snapshots&gt;&lt;enabled&gt;true&lt;/enabled&gt;&lt;/snapshots&gt;
  &lt;/repository&gt;
</pre>
<p>
  Note: This repository contains snapshots of many projects, not just those produced by Sisu.
</p>

<h3 id="website">Website</h3>
<p>
  Committers that wish to author the contents on the project's website will find the relevant instructions in the
  documents listed below:
</p>
<ul>
  <li><a href="http://wiki.eclipse.org/IT_Infrastructure_Doc#Website">IT Infrastructure</a></li>
  <li><a href="http://wiki.eclipse.org/Using_Phoenix">Using Phoenix</a></li>
  <li><a href="http://wiki.eclipse.org/Configuring_Eclipse_to_Edit_your_eclipse.org_Website">Configuring Eclipse to Edit your eclipse.org Website</a></li>
</ul>

</div>

<?php
$html = ob_get_clean();
$Theme->setHtml($html);
$Theme->generatePage();
?>
