<?php

namespace App\Helpers;

use App\Models\Order;

class CountNewCustomersHelper
{
    /**
     * Counts the number of new customers in the last month.
     *
     * @return int The number of new customers in the last month.
     */
    public static function countNewCustomersInLastMonth(): int
    {
        // Get the number of unique customer IDs that have placed an order in the last month.
        $newCustomerCount = Order::where('created_at', '>=', now()->subMonth())
            ->distinct('customer')
            ->count();

        return $newCustomerCount;
    }
}