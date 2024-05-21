<?php

declare(strict_types=1);

namespace Guave\FormRecipientBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GuaveFormRecipientBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
