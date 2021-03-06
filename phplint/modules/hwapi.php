<?php
/** Hyperwave Functions.

This module is available from the PECL project.
<p>

See: {@link http://www.php.net/manual/en/ref.hw.php}
@package hwapi
*/


# FIXME: all these '1' are dummy values
const HW_API_REMOVE_NORMAL = 1,
	HW_API_REMOVE_PHYSICAL = 1,
	HW_API_REMOVE_REMOVELINKS = 1,
	HW_API_REMOVE_NONRECURSIVE = 1,
	HW_API_REPLACE_NORMAL = 1,
	HW_API_REPLACE_FORCE_VERSION_CONTROL = 1,
	HW_API_REPLACE_AUTOMATIC_CHECKOUT = 1,
	HW_API_REPLACE_AUTOMATIC_CHECKIN = 1,
	HW_API_REPLACE_PLAIN = 1,
	HW_API_REPLACE_REVERT_IF_NOT_CHANGED = 1,
	HW_API_REPLACE_KEEP_TIME_MODIFIED = 1,
	HW_API_INSERT_NORMAL = 1,
	HW_API_INSERT_FORCE_VERSION_CONTROL = 1,
	HW_API_INSERT_AUTOMATIC_CHECKOUT = 1,
	HW_API_INSERT_PLAIN = 1,
	HW_API_INSERT_KEEP_TIME_MODIFIED = 1,
	HW_API_INSERT_DELAY_INDEXING = 1,
	HW_API_LOCK_NORMAL = 1,
	HW_API_LOCK_RECURSIVE = 1,
	HW_API_LOCK_SESSION = 1,
	HW_API_CONTENT_ALLLINKS = 1,
	HW_API_CONTENT_REACHABLELINKS = 1,
	HW_API_CONTENT_PLAIN = 1,
	HW_API_REASON_ERROR = 1,
	HW_API_REASON_WARNING = 1,
	HW_API_REASON_MESSAGE = 1;

/*. bool .*/ function hwapi_init(/*. string .*/ $hostname, /*. int .*/ $port){}
/*. string .*/ function hwapi_hgcsp(/*. string .*/ $hostname, /*. int .*/ $port){}
/*. object .*/ function hwapi_object(/*. array .*/ $object_in){}
/*. array .*/ function hwapi_mychildren(/*. string .*/ $parameters){}
/*. object .*/ function hwapi_children(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_parents(/*. array .*/ $parameters){}
/*. array .*/ function hwapi_find(/*. array .*/ $parameters){}
/*. bool .*/ function hwapi_identify(/*. array .*/ $parameters){}
/*. bool .*/ function hwapi_remove(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_content(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_copy(/*. array .*/ $parameters){}
/*. bool .*/ function hwapi_link(/*. array .*/ $parameters){}
/*. bool .*/ function hwapi_move(/*. array .*/ $parameters){}
/*. bool .*/ function hwapi_lock(/*. array .*/ $parameters){}
/*. bool .*/ function hwapi_unlock(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_replace(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_insert(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_insertdocument(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_insertcollection(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_insertanchor(/*. array .*/ $parameters){}
/*. array .*/ function hwapi_srcanchors(/*. array .*/ $parameters){}
/*. array .*/ function hwapi_dstanchors(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_objectbyanchor(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_dstofsrcanchor(/*. array .*/ $parameters){}
/*. array .*/ function hwapi_srcsofdst(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_checkin(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_checkout(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_setcommittedversion(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_revert(/*. array .*/ $parameters){}
/*. array .*/ function hwapi_history(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_removeversion(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_freeversion(/*. array .*/ $parameters){}
/*. array .*/ function hwapi_configurationhistory(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_saveconfiguration(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_restoreconfiguration(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_mergeconfiguration(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_removeconfiguration(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_user(/*. array .*/ $parameters){}
/*. array .*/ function hwapi_userlist(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_hwstat(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_dcstat(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_dbstat(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_ftstat(/*. array .*/ $parameters){}
/*. array .*/ function hwapi_info(/*. array .*/ $parameters){}
/*. object .*/ function hwapi_object_new(){}
/*. int .*/ function hwapi_object_count(){}
/*. string .*/ function hwapi_object_title(/*. string .*/ $language){}
/*. bool .*/ function hwapi_object_attreditable(/*. int .*/ $attr, /*. string .*/ $username, /*. bool .*/ $is_system){}
/*. bool .*/ function hwapi_object_assign(/*. int .*/ $object_){}
/*. object .*/ function hwapi_object_attribute(/*. int .*/ $index, /*. object .*/ &$attribute){}
/*. bool .*/ function hwapi_object_insert(/*. object .*/ $attr){}
/*. bool .*/ function hwapi_object_remove(/*. string .*/ $name){}
/*. string .*/ function hwapi_object_value(/*. string .*/ $name){}
/*. object .*/ function hwapi_attribute_new( /*. args .*/){}
/*. string .*/ function hwapi_attribute_key(){}
/*. string .*/ function hwapi_attribute_value(){}
/*. array .*/ function hwapi_attribute_values(){}
/*. string .*/ function hwapi_attribute_langdepvalue(/*. string .*/ $language){}
/*. object .*/ function hwapi_content_new( /*. args .*/){}
/*. int .*/ function hwapi_content_read(/*. string .*/ $buffer, /*. int .*/ $length){}
/*. string .*/ function hwapi_content_mimetype(){}
/*. int .*/ function hwapi_error_count(){}
/*. object .*/ function hwapi_error_reason(/*. int .*/ $index){}
/*. int .*/ function hwapi_reason_type(){}
/*. string .*/ function hwapi_reason_description(/*. string .*/ $language){}
