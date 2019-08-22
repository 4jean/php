<?php declare(strict_types=1);

namespace wbs\solution\yours;

class FizzBuzz
{
    /**
     * @var int
     */
    private $from, $to;

    public function __construct(int $from = 1, int $to = 100)
    {
        $this->from = $from;
        $this->to = $to;
    }

    protected function showFizzForMultiplesOf3($number): string
    {
        return ($number % 3 === 0) ? 'Fizz' : '';
    }

    protected function showBuzzForMultiplesOf5(int $number): string
    {
        return ($number % 5 === 0) ? 'Buzz' : '';
    }

    protected function showNumberOnEmptyString(int $number): string
    {
        return (string)$number;
    }

    protected function changeNumbersToStrings(int $from, int $to): array
    {
        $result = [];
        for ($i = $from; $i <= $to; $i++) {
            $result[] =
                $this->showFizzForMultiplesOf3($i).$this->showBuzzForMultiplesOf5($i) ?:
                $this->showNumberOnEmptyString($i);
        }
        return $result;
    }

    public function getNumbersAsHtml(): string
    {
        return implode('<br />' . PHP_EOL, $this->changeNumbersToStrings($this->from, $this->to)) . '<br />' . PHP_EOL;
    }

}