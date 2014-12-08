<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Create users with different roles');
$I->amOnPage('/user/login');
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