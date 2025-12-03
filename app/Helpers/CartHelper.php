<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartHelper
{
    /**
     * Get total item count in cart
     */
    public static function count()
    {
        $cart = Session::get('cart', []);
        $count = 0;

        foreach ($cart as $item) {
            $count += $item['quantity'] ?? 0;
        }

        return $count;
    }

    /**
     * Get cart items
     */
    public static function items()
    {
        return Session::get('cart', []);
    }

    /**
     * Check if cart is empty
     */
    public static function isEmpty()
    {
        return self::count() === 0;
    }

    /**
     * Calculate cart total
     */
    public static function total()
    {
        $cart = self::items();
        $total = 0;

        foreach ($cart as $item) {
            // Note: This assumes price is stored in session
            // For accurate calculation, you might need to load menu items
            $total += ($item['price'] ?? 0) * ($item['quantity'] ?? 0);
        }

        return $total;
    }

    /**
     * Clear cart
     */
    public static function clear()
    {
        Session::forget('cart');
        return true;
    }

    /**
     * Add item to cart
     */
    public static function add($menuItemId, $quantity = 1, $customizations = [])
    {
        $cart = Session::get('cart', []);

        // Find if item already exists
        $itemIndex = -1;
        foreach ($cart as $index => $item) {
            if ($item['menu_item_id'] == $menuItemId) {
                $itemIndex = $index;
                break;
            }
        }

        if ($itemIndex >= 0) {
            // Update quantity
            $cart[$itemIndex]['quantity'] += $quantity;
        } else {
            // Add new item
            $cart[] = [
                'menu_item_id' => $menuItemId,
                'quantity' => $quantity,
                'customizations' => $customizations,
                'added_at' => now()->toDateTimeString()
            ];
        }

        Session::put('cart', $cart);

        return self::count();
    }

    /**
     * Update item quantity
     */
    public static function update($menuItemId, $quantity)
    {
        $cart = Session::get('cart', []);

        foreach ($cart as $index => $item) {
            if ($item['menu_item_id'] == $menuItemId) {
                if ($quantity <= 0) {
                    array_splice($cart, $index, 1);
                } else {
                    $cart[$index]['quantity'] = $quantity;
                }
                break;
            }
        }

        Session::put('cart', $cart);

        return self::count();
    }

    /**
     * Remove item from cart
     */
    public static function remove($menuItemId)
    {
        $cart = Session::get('cart', []);

        foreach ($cart as $index => $item) {
            if ($item['menu_item_id'] == $menuItemId) {
                array_splice($cart, $index, 1);
                break;
            }
        }

        Session::put('cart', $cart);

        return self::count();
    }

    /**
     * Get cart summary for quick display
     */
    public static function summary()
    {
        return [
            'count' => self::count(),
            'total' => self::total(),
            'items' => self::items()
        ];
    }
}
