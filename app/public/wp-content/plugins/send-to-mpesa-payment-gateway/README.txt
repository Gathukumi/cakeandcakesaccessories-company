===Send to Mpesa Payment Gateway ===
Contributors: Njengah
Donate link: https://njengah.com/contact/ 
Tags: woocommerce, mpesa, woocommerce mpesa payment gateway, mpesa woocommmerce payment 
Requires at least: 4.3
Tested up to: 6.2.2
Stable tag: 1.0.12
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple Mpesa WooCommerce payment gateway that allows customers to send the shop owner the payments on the mobile phone number. 
It's useful for those vendors without the Safaricom Paybill or Till Number or those who have not intergrated the MPESA payment API. 

== Description ==

Most WooCommerce users who want to receive payment via Mpesa do not have the PayBill or Till number. &nbsp;

This plugin is designed to allow such users to receive  payment from customers who want to send the payment to the business or personal phone number.

In the settings page you can add the instructions to your customers to allow them to make payments by sending to the store number or your Safaricom number. 

The checkout provides the three important fields (customer name, customer mobile number and the Mpesa transaction code ) for MANUAL confirmation of the payment.&nbsp;

**Note:** This is a MANUAL - Send Money to Mpesa as a payment method. This plugin does not have the API verification 

== Installation ==

Instructions on how to install the plugin and get it working:

1. Upload `send-to-mpesa-payment.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to the WooCommerce Settings > Payments tab and set the default values for your Mpesa number and the name that customers see on the transaction. 

== Frequently Asked Questions ==

= Does this plugin work with WooCommerce only?  =

 Yes, this is a custom WooCommerce payment gateway that will not work without WooCommerce. 
 
= How do you change the phone number displayed on the checkout form ?  =

 You can change the phone number displayed on checkout from by editing Mpesa Recipient Number in the settings 

= Does it support Mpesa Till and Paybill API ? =

 No, this is a plugin for direct payments by sending money from one customer number to the store owner number or business phone number. The most basic way to send payment from one person to another using Mpesa send money feature. 

== Disclaimer ==
This plugin does not have any relation with WooCommerce or M-PESA trademarks or brands. It is provided for the sole purpose of connecting WooCommerce to the Mpesa payment.  

== Screenshots ==
1. Checkout Send Payment to Mpesa frontend -  details and form. 
2. Send to Mpesa payment gateway enable settings page. 
3. Customizable options for Send to Mpesa payment gateway. 
4. Validation errors for empty fields for the Mpesa payment. 
5. Disabled option for the Send to Mpesa payment gateway on payments gateway page. 
6. Frontend illustration of payment gateway
7. Order page with the payment details from Mpesa Transaction. 

== Changelog ==

= 1.0.1 =
Tested with WooCommerce Version 7.7.2 and updated to version 1.0.1

= 1.0.0 =
Initial release

