<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Edit admin profile after login');
$I->amOnPage('/');
$I->click('Sign in');
$I->dontsee('Enter your Devtrac Test The Tests username.');
$I->see('Enter your Devtrac Test username');
$I->see('Enter the password that accompanies your username.');
$I->fillField('name','admin');
$I->fillField('pass','admin');
$I->click('Log in');
$I->dontsee('Sorry, unrecognized username or password');
$I->dontseeLink('Have you forgotten your password?');
$I->see('Welcome, admin');
$I->amGoingTo('submit user edit form/page');
$I->click('Edit My Profile');
$I->fillField('name','admin');
$I->selectOption('taxonomy_vocabulary_5[und]','Supervisor');
$I->fillField('field_user_superior[und][0][target_id]','admin');
$I->selectOption('taxonomy_vocabulary_4[und]','Education');
$I->fillField('field_user_firstname[und][0][value]','admin');
$I->fillField('field_user_surname[und][0][value]','admin');
$I->fillField('field_user_aboutme[und][0][value]',' am here to test please dont worry am just a dummy admin');
$I->click('Save');
$I->see('Department:');
$I->see('admin');
$I->see('About this User');
$I->see('am here to test please dont worry am just a dummy admin');
$I->seeLink('admin admin');
$I->seeLink('health centers performance in the west');
$I->seeLink('school farcilities and structure');
$I->seeLink('FieldTrips');
$I->seeLink('Site Reports');
$I->seeLink('Locations Created');
$I->amGoingTo('click on each individual menu link on the user page');
$I->seeLink('Open FieldTrips');
$I->seeLink('Open Action Items');
$I->seeLink('Team Members');
$I->see('1 of ');
$I->click('Open FieldTrips');
$I->seeLink('FieldTrips');
$I->seeLink('Start Date');
$I->seeLink('Duration');
$I->seeLink('Status');
$I->amGoingTo('click on of the open fieldtrips to comfirm action item link');
$I->click('school farcilities and structure');
$I->seeLink('Site Report');
$I->seeLink('Undefined Area');
$I->see('Site Visit');



$I = new AcceptanceTester($scenario);
$I->wantTo('Create users with different roles')