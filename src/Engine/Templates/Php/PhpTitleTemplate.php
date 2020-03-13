<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Engine\Templates\Php;


use adrianschubek\Engine\Templates\TitleTemplate;

class PhpTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title ?></h1>";
    }
}