<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Engine\Renderer;


interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}