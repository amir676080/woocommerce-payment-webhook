=== WooCommerce Payment Webhook ===
Contributors: amir676080
Donate link: https://amir676080.ir
Tags: woocommerce, webhook, order processing, payment
Requires at least: 5.0
Tested up to: 6.6
Requires PHP: 7.2
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

This plugin triggers a webhook when an order is marked as "processing" in WooCommerce. It is designed to help developers and store owners who need to integrate WooCommerce with external services.

== Installation ==

1. Upload the `woocommerce-payment-webhook` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Configure your webhooks in the WooCommerce settings.

== Frequently Asked Questions ==

= How do I set up the webhook? =

Go to WooCommerce > Settings > Advanced > Webhooks, and create a new webhook. Select the topic "Order updated" and provide the URL for your webhook endpoint.

== Changelog ==

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.0 =
Initial release.

== Screenshots ==

== License ==

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
