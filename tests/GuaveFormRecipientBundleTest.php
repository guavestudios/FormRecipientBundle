<?php

declare(strict_types=1);

namespace Guave\FormRecipientBundle\Tests;

use Guave\FormRecipientBundle\GuaveFormRecipientBundle;
use PHPUnit\Framework\TestCase;

class GuaveFormRecipientBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new GuaveFormRecipientBundle();

        $this->assertInstanceOf('Guave\FormRecipientBundle\GuaveFormRecipientBundle', $bundle);
    }
}
