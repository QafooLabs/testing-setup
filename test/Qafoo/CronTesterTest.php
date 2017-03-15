<?php

namespace Qafoo;

class CronTesterTest extends FeatureTest
{
    public function testTestCronDefinition()
    {
        $page = $this->visit('/');

        $this->find('input[name="cron"]')->setValue('42 23 * * *');
        $this->find('input[name="test"]')->press();

        $content = $this->find('ol.cron');
        $this->assertContains('23:42:00', $content->getText());
    }
}
