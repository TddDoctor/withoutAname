<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Adding a field trip with a roadside observation');
$I->amGoingTo('login as an admin to create a field trip');
$I->amOnPage('/user/login');
$I->click('Sign in');
$I->see('Enter your Devtrac Test The Tests username.');
$I->see('Enter the password that accompanies your username.');
$I->dontsee('Enter your Devtrac Test username');
$I->fillField('name','admin');
$I->fillField('pass','admin');
$I->click('Log in');
$I->amGoingTo('filling in the fieldtrip form elements');
$I->seeLink('Add Field Trip');
$I->see('Welcome, admin');
$I->see('filling in all mandatory fields.');
$I->dontseeLink('finish filling in your full profile');
$I->click('Add Field Trip');
$I->fillField('title','school farcilities and structure');
$I->fillField('field_fieldtrip_internal_id[und][0][value]','12dew');
$I->selectOption('field_fieldtrip_fc_purpose[und][0][field_fieldtrip_fc_purpose_purps][und]','fieldwork');
$I->fillField('field_fieldtrip_fc_purpose[und][0][field_fieldtrip_purpose_percent][und][0][value]',100);
$I->amGoingTo('submit field trip form');
$I->click('Save');
$I->see('school farcilities and structure');
$I->see('Purpose(s) of the Fieldtrip');
$I->seeLink('Full Report');
$I->seeLink('Add a Site Report to the Field Trip.');
$I->click('Add a Site Report to the Field Trip.');
$I->amGoingTo('Add a Site Report to the Field Trip');
$I->see('Site Report Type');
$I->fillField('reporttype',1);
$I->click('Submit');
$I->see('Create Field Trip Report Item');
$I->see('Your summarized Trip Report content. This will be made PUBLIC and thus available to the general public.');
$I->amGoingTo('Add a field trip report Item to the roadside observation');
$I->fillField('title','status report of north school');
$I->selectOption('taxonomy_vocabulary_1[und]','- Health Centre');
$I->fillField('field_ftritem_public_summary[und][0][value]','this is intended for testing only not for demostration purposeses');
$I->fillField('field_ftritem_narrative[und][0][value]','this is intended for testing only not for demostration purposesesthis is intended for testing only not for demostration purposesesthis is intended for testing only not for demostration purposesesvthis is intended for testing only not for demostration purposeses');
$I->see('Did you take any photos during the reporting? Please upload the images from here. Click "Choose File" to access the images on your computer.');
$I->fillField('field_ftritem_lat_long[und][0][geom]','POINT (33.346199035645 2.911979913712)');
$I->click('Save');
$I->seeLink('Change at least one district for the Field Trip.');
$I->seeLink('Change the sectors of status report of north school.');
$I->dontseeLink('Change the images of status report of north school.');
$I->seeLink('Add a Site Report to the Field Trip.');
$I->seeLink('Site Reports');
$I->seeLink('Comments');
$I->amGoingTo('Click on the menu links on the field trip report item');
$I->click('Comments');
$I->see('Add new comment');
$I->fillField('comment_body[und][0][value]','This comment on the fieldtrip report item is for testing purpose that is all!');