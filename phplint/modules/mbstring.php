<?php
/** Multibyte String Functions.

See: {@link http://www.php.net/manual/en/ref.mbstring.php}
@package mbstring
*/


const MB_OVERLOAD_MAIL = 1,
	MB_OVERLOAD_STRING = 2,
	MB_OVERLOAD_REGEX = 4,
	MB_CASE_UPPER = 0,
	MB_CASE_LOWER = 1,
	MB_CASE_TITLE = 2;

/*. bool .*/ function mb_check_encoding(/*. args .*/){}
/*. string .*/ function mb_convert_case(/*. string .*/ $sourcestring, /*. int .*/ $mode /*., args .*/){}
/*. string .*/ function mb_strtoupper(/*. string .*/ $sourcestring /*., args .*/){}
/*. string .*/ function mb_strtolower(/*. string .*/ $sourcestring /*., args .*/){}
/*. string .*/ function mb_language( /*. args .*/){}
/*. string .*/ function mb_internal_encoding( /*. args .*/){}
/*. mixed .*/ function mb_http_input( /*. args .*/){}
/*. string .*/ function mb_http_output( /*. args .*/){}
/*. mixed .*/ function mb_detect_order( /*. args .*/){}
/*. mixed .*/ function mb_substitute_character( /*. args .*/){}
/*. bool .*/ function mb_parse_str(/*. string .*/ $encoded_string /*., args .*/){}
/*. string .*/ function mb_output_handler(/*. string .*/ $contents, /*. int .*/ $status){}
/*. string .*/ function mb_preferred_mime_name(/*. string .*/ $encoding){}
/*. int .*/ function mb_strlen(/*. string .*/ $str /*., args .*/){}
/*. int .*/ function mb_strpos(/*. string .*/ $haystack, /*. string .*/ $needle /*., args .*/){}
/*. int .*/ function mb_strrpos(/*. string .*/ $haystack, /*. string .*/ $needle /*., args .*/){}
/*. int .*/ function mb_substr_count(/*. string .*/ $haystack, /*. string .*/ $needle /*., args .*/){}
/*. string .*/ function mb_substr(/*. string .*/ $str, /*. int .*/ $start /*., args .*/){}
/*. string .*/ function mb_strcut(/*. string .*/ $str, /*. int .*/ $start /*., args .*/){}
/*. int .*/ function mb_strwidth(/*. string .*/ $str /*., args .*/){}
/*. string .*/ function mb_strimwidth(/*. string .*/ $str, /*. int .*/ $start, /*. int .*/ $width /*., args .*/){}
/**
 * @triggers E_WARNING Invalid/unsupported encoding.
 */
/*. string .*/ function mb_convert_encoding(/*. string .*/ $str, /*. string .*/ $to_encoding /*., args .*/){}
/*. string .*/ function mb_detect_encoding(/*. string .*/ $str /*., args .*/){}
/*. string[int] .*/ function mb_list_encodings(){}
/*. string .*/ function mb_convert_kana(/*. string .*/ $str /*., args .*/){}
/*. string .*/ function mb_encode_mimeheader(/*. string .*/ $str /*., args .*/){}
/*. string .*/ function mb_decode_mimeheader(/*. string .*/ $string_){}
/*. string .*/ function mb_convert_variables(/*. string .*/ $to_encoding, /*. mixed .*/ $from_encoding /*., args .*/){}
/*. string .*/ function mb_encode_numericentity(/*. string .*/ $string_, /*. array .*/ $convmap /*., args .*/){}
/*. string .*/ function mb_decode_numericentity(/*. string .*/ $string_, /*. array .*/ $convmap /*., args .*/){}
/*. int .*/ function mb_send_mail(/*. string .*/ $to, /*. string .*/ $subject, /*. string .*/ $message /*., args .*/){}
/*. string .*/ function mb_get_info( /*. args .*/){}
/*. string .*/ function mb_regex_encoding( /*. args .*/){}
/*. string .*/ function mb_regex_set_options( /*. args .*/){}
/*. int .*/ function mb_ereg(/*. string .*/ $pattern, /*. string .*/ $string_ /*., args .*/){}
/*. int .*/ function mb_eregi(/*. string .*/ $pattern, /*. string .*/ $string_ /*., args .*/){}
/*. string .*/ function mb_ereg_replace(/*. string .*/ $pattern, /*. string .*/ $replacement, /*. string .*/ $string_ /*., args .*/){}
/*. string .*/ function mb_eregi_replace(/*. string .*/ $pattern, /*. string .*/ $replacement, /*. string .*/ $string_){}
/*. array .*/ function mb_split(/*. string .*/ $pattern, /*. string .*/ $string_ /*., args .*/){}
/*. bool .*/ function mb_ereg_match(/*. string .*/ $pattern, /*. string .*/ $string_ /*., args .*/){}
/*. bool .*/ function mb_ereg_search( /*. args .*/){}
/*. array .*/ function mb_ereg_search_pos( /*. args .*/){}
/*. array .*/ function mb_ereg_search_regs( /*. args .*/){}
/*. bool .*/ function mb_ereg_search_init(/*. string .*/ $string_ /*., args .*/){}
/*. array .*/ function mb_ereg_search_getregs(){}
/*. int .*/ function mb_ereg_search_getpos(){}
/*. bool .*/ function mb_ereg_search_setpos(/*. int .*/ $position){}

/*. if_php_ver_7 .*/

/**
 * @param int $cp
 * @param string $encoding
 * @return mixed Binary representation of the codepoint, or FALSE if invalid
 * codepoint for the encoding.
 * @triggers E_WARNING Invalid $encoding.
 */
function mb_chr($cp, $encoding = NULL){}

/**
 * @param string $str
 * @param string $encoding
 * @return int Codepoint.
 * @triggers E_WARNING Invalid $encoding. Empty string.
 */
function mb_ord($str, $encoding = NULL){}

/*. string .*/ function mb_scrub(/*. string .*/ $str, /*. string .*/ $encoding  = NULL){}

/*. end_if_php_ver .*/
