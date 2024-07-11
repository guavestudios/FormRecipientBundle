<?php

declare(strict_types=1);

namespace Guave\FormRecipientBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Guave\FormRecipientBundle\GuaveFormRecipientBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(GuaveFormRecipientBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
