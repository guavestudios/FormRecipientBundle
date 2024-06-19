<?php

declare(strict_types=1);

namespace Guave\FormRecipientBundle\EventListener;

use Contao\Form;
use Contao\FormFieldModel;
use Contao\System;

class PrepareFormDataListener
{
    /**
     * @param array<string>         $submittedData
     * @param array<string>         $labels
     * @param array<FormFieldModel> $fields
     */
    public function __invoke(array &$submittedData, array $labels, array $fields, Form $form): void
    {
        if (!str_contains($form->recipient, '{{form::')) {
            return;
        }

        $form->recipient = System::getContainer()->get('contao.insert_tag.parser')->replaceInline(
            str_replace(
                array_map(
                    static fn ($a) => "{{form::$a}}",
                    array_keys($submittedData)
                ),
                $submittedData,
                $form->recipient
            )
        );
    }
}
