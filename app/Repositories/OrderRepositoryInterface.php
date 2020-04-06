<?php

namespace App\Repositories;

interface OrderRepositoryInterface
{
    /**
     * Get's a order by it's ID
     *
     * @param int
     */
    public function get($orderId);

    /**
     * Get's paginated orders
     *
     * @param int
     * @param int
     */
    public function paginate($perPage);

    /**
     * Get's all orders.
     *
     * @return mixed
     */
    public function all();

    /**
     * Saves a order.
     *
     * @param array
     */
    public function save(array $orderData);

    /**
     * Deletes a order.
     *
     * @param int
     */
    public function delete($orderId);

    /**
     * Updates a order.
     *
     * @param int
     * @param array
     */
    public function update($orderId, array $postData);
}
