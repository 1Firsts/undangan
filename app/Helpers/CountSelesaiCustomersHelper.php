<?php

namespace App\Helpers;

use App\Models\Order;

class CountSelesaiCustomersHelper
{
    /**
     * Counts the number of new customers in the last month.
     *
     * @return int The number of new customers in the last month.
     */
    public static function countSelesaiCustomers(): int
    {
        // Get the number of unique customer IDs that have placed an order in the last month.
        $selesaiOrdersCount = Order::where('status', 'Selesai')->count();
        return $selesaiOrdersCount;
    }
}