//  Filtering over a large multi dimensional array to find:
//  'cust_group' == 5
//
//  then get the associated price within the array
//
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


/**
* Get pro price on product
*
* @param Product $product
* @return string
*/

public static function getProProductPricing($_product){
    $_tierPrice = $_product->getData('tier_price');
    // Create empty array to transfer values to
    $_prices = array();
    // check if array is empty
    if (!empty($_tierPrice))
    {
        // assign variable for array search
        $_group = array_column($_tierPrice, 'cust_group');
        // assign index from array search
        $_proPriceIndex = array_search('5', $_group);
        // iterate over array with correct cust_group
        foreach($_tierPrice[$_proPriceIndex] as $_key => $_value){
            // Extract price value and push into our empty price array
            if ($_key == 'price'){
                array_push($_prices, $_value);
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
