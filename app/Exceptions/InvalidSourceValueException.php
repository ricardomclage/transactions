<?php

namespace App\Exceptions;

use Exception;

class InvalidSourceValueException extends Exception
{
    private $source;

    public function __construct(string $source) {
        $this->source = $source;
    }

    public function render()
    {
        return response()->json([
            'error_message' => 'Invalid source value: `' . $this->source . '`. Must either be `db` or `csv`.'
        ]);
    }
}
