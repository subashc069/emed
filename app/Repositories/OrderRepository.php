<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    /**
     * Get's a order by it's ID
     *
     * @param int
     */
    public function get($orderId)
    {
        return Order::find($orderId);
    }

    /**
     * Get's paginated orders
     *
     * @param int
     * @param int
     */
    public function paginate($perPage = 25)
    {
        return Order::paginate($perPage);
    }

    /**
     * Get's all order.
     *
     * @return mixed
     */
    public function all()
    {
        return Order::with('prescriptions')->get();
    }

    /**
     * Saves a order.
     *
     * @param array
     */
    public function save(array $orderData)
    {
        Order::create($orderData);
    }

    /**
     * Deletes a order.
     *
     * @param int
     */
    public function delete($orderId)
    {
        Order::destroy($orderId);
    }

    /**
     * Updates a order.
     *
     * @param int
     * @param array
     */
    public function update($orderId, array $orderData)
    {
        Order::find($orderId)->update($orderData);
    }
}
