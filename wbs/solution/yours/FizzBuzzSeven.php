<?php declare(strict_types=1);

namespace wbs\solution\yours;

class FizzBuzzSeven extends FizzBuzz
{
    protected function changeNumbersToStrings(int $from, int $to): array
    {
        $result = [];
        for ($i = $from; $i <= $to; $i++) {
            $result[] =
                $this->showFizzForMultiplesOf3($i).$this->showBuzzForMultiplesOf5($i).$this->showSevenForMultiplesOf7($i) ?: $this->showNumberOnEmptyString($i);
        }
        return  $result;
    }

    private function showSevenForMultiplesOf7(int $number): string
    {
        return ($number % 7 === 0) ? 'Seven' : '' ;
    }
}