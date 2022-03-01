<?php

namespace Database\Factories;

use App\Exceptions\InvalidSourceValueException;
use App\Services\CsvTransactions;
use App\Services\DatabaseTransactions;
use App\Services\TransactionsSourceInterface;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionsSourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function build(string $source): TransactionsSourceInterface
    {
        switch ($source) {
            case 'db':
                return new DatabaseTransactions();
            case 'csv':
                return new CsvTransactions();
            default:
                throw new InvalidSourceValueException($source);
        }
    }
}
