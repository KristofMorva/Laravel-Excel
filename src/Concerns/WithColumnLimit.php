<?php

namespace Maatwebsite\Excel\Concerns;

interface WithColumnLimit
{
    /**
     * @return string
     */
    public function lastColumnName(): string;
}
