<?php

namespace App\Helpers;

use App\Models\Order;

class CountDikerjakanCustomersHelper
{
    /**
     * Counts the number of new customers in the last month.
     *
     * @return int The number of new customers in the last month.
     */
    public static function countDikerjakanCustomers(): int
    {
        // Get the number of unique customer IDs that have placed an order in the last month.
        $dikerjakanOrdersCount = Order::where('status', 'Dikerjakan')->count();
        return $dikerjakanOrdersCount;
    }
}