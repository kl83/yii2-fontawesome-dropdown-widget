<?php


class WidgetCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTestWidget(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }
}
