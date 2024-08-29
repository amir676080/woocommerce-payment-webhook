"This WooCommerce plugin allows you to trigger a webhook whenever an order status changes to 'processing.' It is designed for businesses and developers who need to send real-time order data to external services. The plugin integrates seamlessly with WooCommerce, allowing you to configure and manage webhooks directly from the WooCommerce settings page."


"این پلاگین WooCommerce به شما اجازه می‌دهد تا یک وب‌هوک را هنگامی که وضعیت سفارش به 'در حال انجام' (processing) تغییر می‌کند، فعال کنید. این پلاگین برای کسب‌وکارها و توسعه‌دهندگانی که نیاز دارند داده‌های سفارشات خود را به‌صورت آنی به سرویس‌های خارجی ارسال کنند، طراحی شده است. این پلاگین به‌سادگی با ووکامرس یکپارچه می‌شود و امکان پیکربندی و مدیریت وب‌هوک‌ها را از طریق بخش تنظیمات ووکامرس فراهم می‌کند."

Install and Activate the Plugin:

Upload the woocommerce-payment-webhook folder to the /wp-content/plugins/ directory.
Go to the WordPress admin area and activate the plugin through the 'Plugins' menu.
Configure the Webhook:

Navigate to "WooCommerce > Settings > Advanced > Webhooks."
Create a new webhook.
In the "Topic" section, select order.updated.
Enter the destination webhook URL and activate the webhook.
From now on, whenever an order status changes to "processing," the order data will be sent to the specified URL.

نصب و فعال‌سازی پلاگین:

پوشه woocommerce-payment-webhook را در مسیر /wp-content/plugins/ آپلود کنید.
به بخش مدیریت وردپرس بروید و پلاگین را از منوی 'افزونه‌ها' فعال کنید.
تنظیم وب‌هوک:

به بخش "ووکامرس > پیکربندی > پیشرفته > وب‌هوک" بروید.
یک وب‌هوک جدید ایجاد کنید.
در قسمت "موضوع" (Topic)، گزینه order.updated را انتخاب کنید.
URL وب‌هوک مقصد را وارد کرده و وب‌هوک را فعال کنید.
از این پس، هر زمان وضعیت یک سفارش به "در حال انجام" تغییر کند، اطلاعات سفارش به URL مشخص‌شده ارسال می‌شود.
