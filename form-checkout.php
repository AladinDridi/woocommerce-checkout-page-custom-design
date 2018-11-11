<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<style>
.fusion-mobile-menu-design-modern .fusion-header>.fusion-row {
    position: relative;
    display: none;
}
.fusion-header-wrapper {
    position: relative;
    z-index: 10010;
    display: none;
}
</style>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>
<div class="additionelcustomwidget">
<img class="auteurimage" src="https://i0.wp.com/sevenfiguresolo.com/wp-content/uploads/2018/08/michaelparker00-1.jpg?fit=432%2C427&ssl=1"  />  
<p>
Everyone faces the same challenges in life, but some people have discovered how to overcome them. They’re the top 1%. And you’re about to join their ranks Can’t wait to see you inside.</p> 
<img class="signaturedauteur" src="https://s3.amazonaws.com/cdn.earn1k.com/sales-images/checkout-page/images/ramits-signature.png"/>
    
 <img class="imagesecret" src="https://s3.amazonaws.com/cdn.earn1k.com/sales-images/checkout-page/images/60-day-guarantee.png" />

    
</div>    
    
<style>
    nav{
        display: none;
    }
    .fusion-footer{
    display: none;
    }
</style>
<div class="securisedetail">
<img class="nortonclass" src="https://sevenfiguresolo.com/wp-content/uploads/2018/11/authorize-dot-net.png"/>
<img class="mcafeeconfirm" src="https://sevenfiguresolo.com/wp-content/uploads/2018/11/mc-afee.png"/>
<p class ="textconfirm">
I authorize I Will Teach You To Be Rich to charge me for the order total. I further affirm that the name and personal information provided on this form are true and correct. I further declare that I have read, understand and accept I Will Teach You To Be Rich's business terms as published on their website. By pressing the order button, I agree to pay I Will Teach You To Be Rich.    
</p>
</div>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
