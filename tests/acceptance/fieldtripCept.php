<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('create a field trip');
$I->amGoingTo('login as an admin to create a field trip');
$I->amOnPage('/user/login');
$I->click('Sign in');
$I->dontsee('Enter your Devtrac Test The Tests username.');
$I->see('Enter the password that accompanies your username.');
$I->see('Enter your Devtrac Test username');
$I->fillField('name','admin');
$I->fillField('pass','admin');
$I->click('Log in');
$I->amGoingTo('filling in the fieldtrip form elements');
$I->seeLink('Add Field Trip');
$I->see('Welcome, admin');
$I->dontsee('filling in all mandatory fields.');
$I->dontseeLink('finish filling in your full profile');
$I->click('Add Field Trip');
$I->fillField('title','health centers performance in the west');
$I->fillField('field_fieldtrip_internal_id[und][0][value]','12dew');
$I->selectOption('field_fieldtrip_fc_purpose[und][0][field_fieldtrip_fc_purpose_purps][und]','fieldwork');
$I->fillField('field_fieldtrip_fc_purpose[und][0][field_fieldtrip_purpose_percent][und][0][value]',100);
$I->amGoingTo('submit field trip form');
$I->click('Save');
$I->dontsee('Field Trip twenty has been created.');
$I->see('health centers performance in the west');
$I->see('Purpose(s) of the Fieldtrip');
$I->seeLink('Full Report');
$I->seeLink('Add a Site Report to the Field Trip.');
$I->amGoingTo('Add a Site Report to the Field Trip');
$I->click('Add a Site Report to the Field Trip.');
$I->dontsee('Add a Location');
$I->see('Select Location to visit for Field Trip');
$I->click('Submit');
$I->see('Create Location');
$I->fillField('title','health far in mbra');
$I->amGoingTo('Add click on the map');
$I->fillField('taxonomy_vocabulary_1[und][0][tid]',267);
$I->fillField('field_place_lat_long[und][0][geom]', 'POINT (33.346199035645 2.911979913712)');
$I->amGoingTo('add a place');
$I->click('Save');
$I->dontsee('Create Location');
$I->dontseeLink('Change at least one district for the Field Trip.');
$I->dontseeLink('Change the sectors of Human Interest Story at health centers performance in the west.');
$I->dontseeLink('Change the images of Human Interest Story at health centers performance in the west');
$I->dontseeLink('Change the narrative of Human Interest Story at health centers performance in the west.');
$I->dontseeLink('Change the public summary of Human Interest Story at health centers performance in the west.');
$I->dontseeLink('Change the images of status report of health centers performance in the west.');
$I->dontseeLink('Change the sectors of status report of health centers performance in the west.');
$I->seeLink('Undefined Area');
$I->seeLink('Change the sectors of Human Interest Story at health far in mbra.');
$I->dontseeLink('Change the images of Human Interest Story at health far in mbra.');
$I->seeLink('Change the narrative of Human Interest Story at health far in mbra.');
$I->seeLink('Change the public summary of Human Interest Story at health far in mbra.');
$I->seeLink('Site Reports');
$I->seeLink('Comments');
$I->click('Site Reports');
$I->dontseeLink('Undefined Area');
$I->seeLink('Report Type');
$I->seeLink('Site Report');





