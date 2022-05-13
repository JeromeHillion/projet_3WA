<?php

namespace App\templates;

class ListTemplate implements TemplateInterface
{
    protected array $templates;
    public function addTemplate(TemplateInterface $template): static
    {
        $this->templates[] = $template;
        return $this;
    }

    public function render()
    {
        $content = "";

        foreach ($this->templates as $template) {
            $content.= $template->render();
        }

        return $content;
    }
}