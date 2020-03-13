<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Engine\Templates;


interface PageTemplate
{
    public function getTemplateString(): string;
}