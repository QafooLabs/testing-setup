<?php

namespace Qafoo;

class WikipediaTest extends FeatureTest
{
    public function testSearchOnFrontpage()
    {
        $page = $this->visit('/');

        $this->find('#searchInput')->setValue('Kore');
        $this->find('#searchButton')->press();

        $content = $this->find('#content');
        $this->assertContains('Kore may refer to:', $content->getText());
    }

    public function testFollowRedirectLink()
    {
        $page = $this->visit('/');

        $this->find('#searchInput')->setValue('Kore');
        $this->find('#searchButton')->press();

        $this->find('a[title=\'Kore (energy drink)\']')->click();

        $title = $this->find('h1');
        $this->assertSame('GNC (store)', $title->getText());
    }
}
