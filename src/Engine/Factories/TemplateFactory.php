<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Engine\Factories;


use adrianschubek\Engine\Renderer\TemplateRenderer;
use adrianschubek\Engine\Templates\PageTemplate;
use adrianschubek\Engine\Templates\TitleTemplate;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}