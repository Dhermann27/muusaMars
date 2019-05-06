<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExamplaryTest extends DuskTestCase
{

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        echo "ExamplaryTest:setUpBeforeClass\n";
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        echo "ExamplaryTest:testBasicExample\n";
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicerExample()
    {
        echo "ExamplaryTest:testBasicerExample\n";
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicestExample()
    {
        echo "ExamplaryTest:testBasicestExample\n";
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
}
