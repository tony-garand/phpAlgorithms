/**
 * Transforms an associative array of key/value pairs to html attributes.
 *
 * @param array $attr HTML attributes as key/value pairs.
 * @return string Html attributes
 */
protected function array_to_attr( $attr = array() ) {
	$call = function ( $key, $value ) {
		if ( $value && is_bool( $value ) ) {
			return sanitize_key( $key ) . '="' . esc_attr( $key ) . '"';
		}
		return sanitize_key( $key ) . '="' . esc_attr( $value ) . '"';
	};

	if ( $attr ) {
		return ' ' . join( ' ', array_map( $call, array_keys( $attr ), $attr ) );
	}
}
