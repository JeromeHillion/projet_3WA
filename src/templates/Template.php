<?php

namespace App\templates;

class Template implements TemplateInterface
{

    private string $template;

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }


    public function render()
    {
        /*ob_start() démarre la temporisation de sortie. Tant qu'elle est enclenchée, aucune donnée, hormis les en-têtes,
         n'est envoyée au navigateur, mais temporairement mise en tampon. */
        ob_start();

        include ($this->getTemplate());

        /*ob_end_clean — Détruit les données du tampon de sortie et éteint la temporisation de sortie*/
        return ob_get_clean();
    }
}