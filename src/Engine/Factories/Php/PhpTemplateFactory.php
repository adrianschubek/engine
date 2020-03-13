<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Engine\Factories\Php;

use adrianschubek\Engine\Factories\TemplateFactory;
use adrianschubek\Engine\Renderer\Php\PhpTemplateRenderer;
use adrianschubek\Engine\Renderer\TemplateRenderer;
use adrianschubek\Engine\Templates\PageTemplate;
use adrianschubek\Engine\Templates\Php\PhpBasicPageTemplate;
use adrianschubek\Engine\Templates\Php\PhpTitleTemplate;
use adrianschubek\Engine\Templates\TitleTemplate;

class PhpTemplateFactory implements TemplateFactory
{
    public function createPageTemplate(): PageTemplate
    {
        return new PhpBasicPageTemplate($this->createTitleTemplate());
    }

    public function createTitleTemplate(): TitleTemplate
    {
        return new PhpTitleTemplate();
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PhpTemplateRenderer();
    }
}