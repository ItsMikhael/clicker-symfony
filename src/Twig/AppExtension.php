<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension {
    public function getFunctions()
    {
        return [
            new TwigFunction('generate_table', [$this, 'generateTable']),
        ];
    }

    public function generateTable($gold) {
        foreach($gold as $row) {
            echo '<tr>
                <td>' .  $row->getAmount() . '</td>
                <td>' . $row->getUsername() . '</td>
            </tr>';
        }
    }
}