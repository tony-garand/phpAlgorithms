<?php
//
/** @var \Wheelhouse\Product\Block\TierPricing */
//
// Displays the lowest and Current tier price to users
//
// Current 2D associative Array from $product->getData('tier_price')
//
// Array
// (
//     [0] => Array
//         (
//             [price_id] => 56772
//             [website_id] => 0
//             [all_groups] => 0
//             [cust_group] => 23
//             [price] => 8.210000
//             [price_qty] => 1.0000
//             [percentage_value] =>
//             [website_price] => 8.210000
//         )


public static function getTierProductPricing($_product){
        $_tierPrice = $_product->getData('tier_price');
        // Create empty array to transfer values to
        $_prices = array();
        // Iterate over the array
        if (!empty($_tierPrice))
        {
            foreach($_tierPrice as $_row){
                // Iterate over the inner array
                foreach($_row as $_key => $_value){
                    // Extract price value and push into our empty price array
                    if ($_key == 'price'){
                        array_push($_prices, $_value);
                    }
                }
            }
            $_minArrPrice = min($_prices);
            // if product has advanced pricing format and display
            //Format for currency
            $_formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
            $_lowestPrice = $_formatter->formatCurrency($_minArrPrice, 'USD');
            return $_lowestPrice;
        }
    }

?>
