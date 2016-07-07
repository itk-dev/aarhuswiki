<?php
#
# This file must NOT contain any sensitive information
# This file is located on GitHub
#

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
        exit;
}

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
wfLoadSkin( 'CologneBlue' );
wfLoadSkin( 'Modern' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );

$wgDefaultSkin = "cavendishmw";

require_once("$IP/skins/cavendishmw/cavendishmw.php");
## CAVENDISH SETTINGS
$cavendishLogoURL = '';
$cavendishLogoMargin = '0';

# GoogleAnalytics
include("$IP/extensions/googleAnalytics/googleAnalytics.php" );
$wgGoogleAnalyticsAccount = 'UA-32768052-1';

# MobileFrontend
require_once "$IP/extensions/MobileFrontend/MobileFrontend.php";
$wgMFAutodetectMobileView = true;

# NewestPages
include("$IP/extensions/NewestPages/NewestPages.php" );

# ConfirmEdit
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
wfLoadExtension( 'ConfirmEdit/QuestyCaptcha' );
$wgCaptchaClass = 'QuestyCaptcha';
$wgCaptchaQuestions[] = array( 'question' => "Indtast postnummeret for Aarhus C i feltet", 'answer' => "8000" );

# User Merge and Delete
//require_once( "$IP/extensions/UserMerge/UserMerge.php" );
wfLoadExtension( 'UserMerge' );
# By default nobody can use this function, enable for bureaucrat
$wgGroupPermissions['bureaucrat']['usermerge'] = true;
# optional: default is array( 'sysop' )
$wgUserMergeProtectedGroups = array( 'bureaucrat' );

# Renameuser
//require_once("$IP/extensions/Renameuser/Renameuser.php");
wfLoadExtension( 'Renameuser' );

# WikiEditor - inklusion af nedenstående parametre var også nødvendigt
//require_once("$IP/extensions/WikiEditor/WikiEditor.php");
wfLoadExtension( 'WikiEditor' );
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;

# Cite
//require_once("$IP/extensions/Cite/Cite.php");
wfLoadExtension( 'Cite' );

# Åben eksterne links i nye vinduer
$wgExternalLinkTarget = '_blank';

## CustomNamespaces
$wgExtraNamespaces[3000] = "HistorieHotellet";
$wgExtraNamespaces[3001] = "HistorieHotellet_talk";
$wgContentNamespaces[] = 3000;
