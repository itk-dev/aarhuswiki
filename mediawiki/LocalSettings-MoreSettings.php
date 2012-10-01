<?php
#
# This file must NOT contain any sensitiv information
# This file are located on GitHub 
#

## CAVENDISH SETTINGS
$cavendishLogoURL = '';
$cavendishLogoMargin = '10';

# include("$IP/extensions/JavaScript/JavaScript.php");
include("$IP/extensions/googleAnalytics/googleAnalytics.php" );
include("$IP/extensions/NewestPages/NewestPages.php" );

# ConfirmEdit-extension
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
require_once("$IP/extensions/ConfirmEdit/QuestyCaptcha.php"); 
$wgCaptchaClass = 'QuestyCaptcha';
$wgCaptchaQuestions[] = array( 'question' => "Indtast postnummeret for Aarhus C i feltet", 'answer' => "8000" );

#User Merge and Delete-extension
require_once( "$IP/extensions/UserMerge/UserMerge.php" );
// By default nobody can use this function, enable for bureaucrat?
$wgGroupPermissions['bureaucrat']['usermerge'] = true;
 
// optional: default is array( 'sysop' )
$wgUserMergeProtectedGroups = array( 'bureaucrat' );

#RenameUser
require_once("$IP/extensions/Renameuser/Renameuser.php");

#WikiEditor - inklusion af parametre var også nødvendigt
#require_once("$IP/extensions/WikiEditor/WikiEditor.php");
#$wgDefaultUserOptions['usebetatoolbar'] = 1;
#$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
#$wgDefaultUserOptions['wikieditor-preview'] = 1;