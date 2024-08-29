<?php
/**
 * Plugin Name: WooCommerce Payment Webhook
 * Description: A WooCommerce plugin to trigger a webhook when an order is marked as processing.
 * Version: 1.0
 * Author: Amir676080
 * Author URI: https://amir676080.ir
 * Text Domain: woocommerce-payment-webhook
 */

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit;
}

// Register the webhook trigger
add_action('woocommerce_order_status_changed', 'wc_payment_webhook_trigger', 10, 4);

function wc_payment_webhook_trigger($order_id, $old_status, $new_status, $order) {
    // Only trigger if the new status is "processing"
    if ($new_status !== 'processing') {
        return;
    }

    // Retrieve active webhooks
    $webhooks = WC_Webhooks::get_webhooks();

    if (empty($webhooks)) {
        return; // No webhooks to process
    }

    foreach ($webhooks as $webhook) {
        // Check if the webhook is active and its topic is 'order.updated'
        if ($webhook->get_status() === 'active' && $webhook->get_topic() === 'order.updated') {
            $webhook_url = $webhook->get_delivery_url();

            // Get the order details
            $order_data = $order->get_data();

            // Include line items
            $order_data['line_items'] = array();
            foreach ($order->get_items() as $item_id => $item) {
                $order_data['line_items'][] = $item->get_data();
            }

            // Include shipping lines
            $order_data['shipping_lines'] = array();
            foreach ($order->get_shipping_methods() as $shipping_item_id => $shipping_item) {
                $order_data['shipping_lines'][] = $shipping_item->get_data();
            }

            // Include meta data
            $order_data['meta_data'] = array();
            foreach ($order->get_meta_data() as $meta_id => $meta) {
                $order_data['meta_data'][] = $meta->get_data();
            }

            // Convert the data to JSON format
            $webhook_data_json = wp_json_encode($order_data);

            // Set up the arguments for the POST request
            $args = array(
                'body'        => $webhook_data_json,
                'headers'     => array('Content-Type' => 'application/json'),
                'timeout'     => 60,
            );

            // Send the webhook via HTTP POST
            $response = wp_remote_post($webhook_url, $args);

            // Optionally, log the response or handle errors
            if (is_wp_error($response)) {
                error_log('Webhook Error: ' . $response->get_error_message());
            } else {
                error_log('Webhook Response: ' . wp_remote_retrieve_body($response));
            }
        }
    }
}