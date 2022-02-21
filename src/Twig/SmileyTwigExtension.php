<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SmileyTwigExtension extends AbstractExtension {

    public function getFilters(): array {
        return [
            new TwigFilter('smiley', [$this, 'transformSmiley']),
        ];
    }

    public function transformSmiley(string $text): string {
        $textSmiley = [":-)", ";-)", ":-O", ":-|", ":-D"];
        $coolSmiley = ["🙂", "😉", "😮", "😐", "😀"];

        return str_replace($textSmiley, $coolSmiley, $text);
    }

}