<?php

declare(strict_types=1);
function dateFormatter(string $date): string
{
    return date('F jS\, Y', strtotime($date));
}
