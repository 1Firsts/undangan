<?php

namespace App\Helpers;

use App\Models\Order;

class CountJumlahCustomersHelper
{
    /**
     * Counts the number of new customers in the last month.
     *
     * @return int The number of new customers in the last month.
     */
    public static function countJumlahCustomers(): int
    {
        // Get the number of unique customer IDs that have placed an order in the last month.
         $jumlahOrdersCount = Order::sum('jumlah');
        return $jumlahOrdersCount;
    }
}