<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        echo "ExampleTest:setUpBeforeClass\n";
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        echo "ExampleTest:testBasicExample\n";
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
        echo "ExampleTest:testBasicerExample\n";
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
        echo "ExampleTest:testBasicestExample\n";
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
}
