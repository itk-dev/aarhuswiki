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

#Anti-spam extensions
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
require_once("$IP/extensions/ConfirmEdit/QuestyCaptcha.php"); 
$wgCaptchaClass = 'QuestyCaptcha';
$wgCaptchaQuestions[] = array( 'question' => "Indtast tallet '2012' i feltet", 'answer' => "2012" );