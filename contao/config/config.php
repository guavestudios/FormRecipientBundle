<?php

use Guave\FormRecipientBundle\EventListener\PrepareFormDataListener;

$GLOBALS['TL_HOOKS']['prepareFormData'][] = [PrepareFormDataListener::class, '__invoke'];
