<?php

if (!function_exists('calculate_average')) {
    /**
     * Calculate the average of numeric values in an array.
     * Also return numeric and non-numeric values separately.
     *
     * @param array $data
     * @return array
     */
    function calculate_average(array $data): array {
        $numeric_values = [];
        $non_numeric_values = [];

        foreach ($data as $number) {
            if (is_numeric($number)) {
                $numeric_values[] = $number;
            } else {
                $non_numeric_values[] = $number;
            }
        }

        $sum = array_sum($numeric_values);
        $count = count($numeric_values);
        $average = $count > 0 ? $sum / $count : 0;

        return [
            'numeric' => $numeric_values,
            'non_numeric' => $non_numeric_values,
            'average' => $average
        ];
    }
}
