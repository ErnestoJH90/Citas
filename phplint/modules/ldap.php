<?php
/** LDAP Functions.

See: {@link http://www.php.net/manual/en/ref.ldap.php}
@package ldap
*/


# FIXME: all dummy values:
const LDAP_DEREF_NEVER = 1,
	LDAP_DEREF_SEARCHING = 2,
	LDAP_DEREF_FINDING = 3,
	LDAP_DEREF_ALWAYS = 4,
	LDAP_OPT_DEREF = 5,
	LDAP_OPT_SIZELIMIT = 6,
	LDAP_OPT_TIMELIMIT = 7,
	LDAP_OPT_PROTOCOL_VERSION = 8,
	LDAP_OPT_ERROR_NUMBER = 9,
	LDAP_OPT_REFERRALS = 10,
	LDAP_OPT_RESTART = 11,
	LDAP_OPT_HOST_NAME = 12,
	LDAP_OPT_ERROR_STRING = 13,
	LDAP_OPT_MATCHED_DN = 14,
	LDAP_OPT_SERVER_CONTROLS = 15,
	LDAP_OPT_CLIENT_CONTROLS = 16,
	LDAP_OPT_DEBUG_LEVEL = 17,
	GSLC_SSL_NO_AUTH = 18,
	GSLC_SSL_ONEWAY_AUTH = 19,
	GSLC_SSL_TWOWAY_AUTH = 20,
	LDAP_OPT_NETWORK_TIMEOUT = 21;

/*. resource .*/ function ldap_connect( /*. args .*/){}
/*. bool .*/ function ldap_bind(/*. resource .*/ $link /*., args .*/){}
/*. bool .*/ function ldap_sasl_bind(/*. resource .*/ $link){}
/*. bool .*/ function ldap_unbind(/*. resource .*/ $link){}
/*. resource .*/ function ldap_read(/*. resource .*/ $link, /*. string .*/ $base_dn, /*. string .*/ $filter /*., args .*/){}
/*. resource .*/ function ldap_list(/*. resource .*/ $link, /*. string .*/ $base_dn, /*. string .*/ $filter /*., args .*/){}
/*. resource .*/ function ldap_search(/*. resource .*/ $link, /*. string .*/ $base_dn, /*. string .*/ $filter /*., args .*/){}
/*. bool .*/ function ldap_free_result(/*. resource .*/ $result){}
/*. int .*/ function ldap_count_entries(/*. resource .*/ $link, /*. resource .*/ $result){}
/*. resource .*/ function ldap_first_entry(/*. resource .*/ $link, /*. resource .*/ $result){}
/*. resource .*/ function ldap_next_entry(/*. resource .*/ $link, /*. resource .*/ $result_entry){}
/*. array .*/ function ldap_get_entries(/*. resource .*/ $link, /*. resource .*/ $result){}
/*. string .*/ function ldap_first_attribute(/*. resource .*/ $link, /*. resource .*/ $result_entry, /*. int .*/ $ber){}
/*. string .*/ function ldap_next_attribute(/*. resource .*/ $link, /*. resource .*/ $result_entry, /*. resource .*/ $ber){}
/*. array .*/ function ldap_get_attributes(/*. resource .*/ $link, /*. resource .*/ $result_entry){}
/*. array .*/ function ldap_get_values(/*. resource .*/ $link, /*. resource .*/ $result_entry, /*. string .*/ $attribute){}
/*. array .*/ function ldap_get_values_len(/*. resource .*/ $link, /*. resource .*/ $result_entry, /*. string .*/ $attribute){}
/*. string .*/ function ldap_get_dn(/*. resource .*/ $link, /*. resource .*/ $result_entry){}
/*. array .*/ function ldap_explode_dn(/*. string .*/ $dn, /*. int .*/ $with_attrib){}
/*. string .*/ function ldap_dn2ufn(/*. string .*/ $dn){}
/*. bool .*/ function ldap_add(/*. resource .*/ $link, /*. string .*/ $dn, /*. array .*/ $entry){}
/*. bool .*/ function ldap_mod_replace(/*. resource .*/ $link, /*. string .*/ $dn, /*. array .*/ $entry){}
/*. bool .*/ function ldap_mod_add(/*. resource .*/ $link, /*. string .*/ $dn, /*. array .*/ $entry){}
/*. bool .*/ function ldap_mod_del(/*. resource .*/ $link, /*. string .*/ $dn, /*. array .*/ $entry){}
/*. bool .*/ function ldap_delete(/*. resource .*/ $link, /*. string .*/ $dn){}
/*. int .*/ function ldap_errno(/*. resource .*/ $link){}
/*. string .*/ function ldap_err2str(/*. int .*/ $errno){}
/*. string .*/ function ldap_error(/*. resource .*/ $link){}
/*. bool .*/ function ldap_compare(/*. resource .*/ $link, /*. string .*/ $dn, /*. string .*/ $attr, /*. string .*/ $value){}
/*. bool .*/ function ldap_sort(/*. resource .*/ $link, /*. resource .*/ $result, /*. string .*/ $sortfilter){}
/*. bool .*/ function ldap_get_option(/*. resource .*/ $link, /*. int .*/ $option, /*. mixed .*/ $retval){}
/*. bool .*/ function ldap_set_option(/*. resource .*/ $link, /*. int .*/ $option, /*. mixed .*/ $newval){}
/*. bool .*/ function ldap_parse_result(/*. resource .*/ $link, /*. resource .*/ $result, /*. int .*/ $errcode, /*. string .*/ $matcheddn, /*. string .*/ $errmsg, /*. array .*/ $referrals){}
/*. resource .*/ function ldap_first_reference(/*. resource .*/ $link, /*. resource .*/ $result){}
/*. resource .*/ function ldap_next_reference(/*. resource .*/ $link, /*. resource .*/ $reference_entry){}
/*. bool .*/ function ldap_parse_reference(/*. resource .*/ $link, /*. resource .*/ $reference_entry, /*. array .*/ $referrals){}
/*. bool .*/ function ldap_rename(/*. resource .*/ $link, /*. string .*/ $dn, /*. string .*/ $newrdn, /*. string .*/ $newparent, /*. bool .*/ $deleteoldrdn){}
/*. bool .*/ function ldap_start_tls(/*. resource .*/ $link){}
/*. bool .*/ function ldap_set_rebind_proc(/*. resource .*/ $link, /*. string .*/ $string_){}
/*. string .*/ function ldap_t61_to_8859(/*. string .*/ $value){}
/*. string .*/ function ldap_8859_to_t61(/*. string .*/ $value){}
