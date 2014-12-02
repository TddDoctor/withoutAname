<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Ensure that frontpage works');
$I->amOnPage('/'); 
$I->dontsee('Nyoko etak');
$I->see('Site Reports');
$I->see('© 2014');
$I->see('Originally developed for');
$I->see('Built by');
// checking that home links actually exist
$I->dontseeLink('Login');
$I->dontseeLink('sitereports');
$I->seeLink('Site Reports');
$I->seeLink('Statistics');
$I->seeLink('Admin Units');
$I->seeLink('Locations');
$I->seeLink('Unicef Uganda');
$I->seeLink('Mountbatten Ltd');
$I->click(['id' => 'logo']);

