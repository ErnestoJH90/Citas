<?php
/** IMAP, POP3 and NNTP Functions.

See: {@link http://www.php.net/manual/en/ref.imap.php}
@package imap
*/


# FIXME: all dummy values
const NIL = 1,
	IMAP_OPENTIMEOUT = 1,
	IMAP_READTIMEOUT = 1,
	IMAP_WRITETIMEOUT = 1,
	IMAP_CLOSETIMEOUT = 1,
	OP_DEBUG = 1,
	OP_READONLY = 1,
	OP_ANONYMOUS = 1,
	OP_SHORTCACHE = 1,
	OP_SILENT = 1,
	OP_PROTOTYPE = 1,
	OP_HALFOPEN = 1,
	OP_EXPUNGE = 1,
	OP_SECURE = 1,
	CL_EXPUNGE = 1,
	FT_UID = 1,
	FT_PEEK = 1,
	FT_NOT = 1,
	FT_INTERNAL = 1,
	FT_PREFETCHTEXT = 1,
	ST_UID = 1,
	ST_SILENT = 1,
	ST_SET = 1,
	CP_UID = 1,
	CP_MOVE = 1,
	SE_UID = 1,
	SE_FREE = 1,
	SE_NOPREFETCH = 1,
	SO_FREE = 1,
	SO_NOSERVER = 1,
	SA_MESSAGES = 1,
	SA_RECENT = 1,
	SA_UNSEEN = 1,
	SA_UIDNEXT = 1,
	SA_UIDVALIDITY = 1,
	SA_ALL = 1,
	LATT_NOINFERIORS = 1,
	LATT_NOSELECT = 1,
	LATT_MARKED = 1,
	LATT_UNMARKED = 1,
	LATT_REFERRAL = 1,
	LATT_HASCHILDREN = 1,
	LATT_HASNOCHILDREN = 1,
	SORTDATE = 1,
	SORTARRIVAL = 1,
	SORTFROM = 1,
	SORTSUBJECT = 1,
	SORTTO = 1,
	SORTCC = 1,
	SORTSIZE = 1,
	TYPETEXT = 1,
	TYPEMULTIPART = 1,
	TYPEMESSAGE = 1,
	TYPEAPPLICATION = 1,
	TYPEAUDIO = 1,
	TYPEIMAGE = 1,
	TYPEVIDEO = 1,
	TYPEMODEL = 1,
	TYPEOTHER = 1,
	ENC7BIT = 1,
	ENC8BIT = 1,
	ENCBINARY = 1,
	ENCBASE64 = 1,
	ENCQUOTEDPRINTABLE = 1,
	ENCOTHER = 1;

/*. resource .*/ function imap_open(/*. string .*/ $mailbox, /*. string .*/ $user, /*. string .*/ $password, $options = 0, $n_retries = 0, $params = array()){}
/*. bool .*/ function imap_reopen(/*. resource .*/ $imap_stream, /*. string .*/ $mailbox, $options = 0, $n_retries = 0){}
/*. bool .*/ function imap_append(/*. resource .*/ $imap_stream, /*. string .*/ $folder, /*. string .*/ $message, /*. string .*/ $options = NULL, /*. string .*/ $internal_date = NULL){}
/*. int .*/ function imap_num_msg(/*. resource .*/ $imap_stream){}
/*. bool .*/ function imap_ping(/*. resource .*/ $imap_stream){}
/*. int .*/ function imap_num_recent(/*. resource .*/ $imap_stream){}
/*. mixed .*/ function imap_get_quota(/*. resource .*/ $imap_stream, /*. string .*/ $quota_root){}
/*. mixed .*/ function imap_get_quotaroot(/*. resource .*/ $imap_stream, /*. string .*/ $quota_root){}
/*. bool .*/ function imap_set_quota(/*. resource .*/ $imap_stream, /*. string .*/ $quota_root, /*. int .*/ $quota_limit){}
/*. bool .*/ function imap_setacl(/*. resource .*/ $imap_stream, /*. string .*/ $mailbox, /*. string .*/ $id, /*. string .*/ $rights){}
/*. array[string]string .*/ function imap_getacl(/*. resource .*/ $imap_stream, /*. string .*/ $mailbox){}
/*. bool .*/ function imap_expunge(/*. resource .*/ $imap_stream){}
/*. bool .*/ function imap_close(/*. resource .*/ $imap_stream /*., args .*/){}
/*. array[int]string .*/ function imap_headers(/*. resource .*/ $imap_stream){}
/*. string .*/ function imap_body(/*. resource .*/ $imap_stream, /*. int .*/ $msg_no /*., args .*/){}
/*. bool .*/ function imap_mail_copy(/*. resource .*/ $imap_stream, /*. string .*/ $msglist, /*. string .*/ $mailbox, $options = 0){}
/*. bool .*/ function imap_mail_move(/*. resource .*/ $imap_stream, /*. string .*/ $msglist, /*. string .*/ $mailbox, $options = 0){}
/*. bool .*/ function imap_createmailbox(/*. resource .*/ $imap_stream, /*. string .*/ $mailbox){}
/*. bool .*/ function imap_renamemailbox(/*. resource .*/ $imap_stream, /*. string .*/ $old_name, /*. string .*/ $new_name){}
/*. bool .*/ function imap_deletemailbox(/*. resource .*/ $imap_stream, /*. string .*/ $mailbox){}
/*. array[int]string .*/ function imap_list(/*. resource .*/ $imap_stream, /*. string .*/ $ref, /*. string .*/ $pattern){}
/*. array[int]string .*/ function imap_listmailbox(/*. resource .*/ $imap_stream, /*. string .*/ $ref, /*. string .*/ $pattern){}

/**
 *  PHP does not declare this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_1
{
	public /*. string .*/ $name;
	public /*. string .*/ $delimiter;
	public /*. int .*/ $attributes = 0;
}

/**
 *  PHP does not declares this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_2
{
	public /*. string .*/ $Date;
	public /*. string .*/ $Driver;
	public /*. string .*/ $Mailbox;
	public /*. int .*/ $Nmsgs = 0;
	public /*. int .*/ $Recent = 0;
}

/**
 *  PHP does not declare this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_3
{
	public /*. string .*/ $personal, $adl, $mailbox, $host;
}

/**
 *  PHP does not declare this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_4
{
	public /*. string .*/ $toaddress;
	public /*. array[int]imap_anonymous_class_3 .*/ $to;
	public /*. string .*/ $fromaddress;
	public /*. array[int]imap_anonymous_class_3 .*/ $from;
	public /*. string .*/ $ccaddress;
	public /*. array[int]imap_anonymous_class_3 .*/ $cc;
	public /*. string .*/ $bccaddress;
	public /*. array[int]imap_anonymous_class_3 .*/ $bcc;
	public /*. string .*/ $reply_toaddress;
	public /*. array[int]imap_anonymous_class_3 .*/ $reply_to;
	public /*. string .*/ $senderaddress;
	public /*. array[int]imap_anonymous_class_3 .*/ $sender;
	public /*. string .*/ $return_pathaddress;
	public /*. array[int]imap_anonymous_class_3 .*/ $return_path;
	public /*. string .*/ $remail;
	public /*. string .*/ $date;
	public /*. string .*/ $Date;
	public /*. string .*/ $subject;
	public /*. string .*/ $Subject;
	public /*. string .*/ $in_reply_to;
	public /*. string .*/ $message_id;
	public /*. string .*/ $newsgroups;
	public /*. string .*/ $followup_to;
	public /*. string .*/ $references;
	public /*. string .*/ $Recent;
	public /*. string .*/ $Unseen;
	public /*. string .*/ $Flagged;
	public /*. string .*/ $Answered;
	public /*. string .*/ $Deleted;
	public /*. string .*/ $Draft;
	public /*. int .*/ $Msgno = 0;
	public /*. string .*/ $MailDate;
	public /*. int .*/ $Size = 0;
	public /*. int .*/ $udate = 0;
	public /*. string .*/ $fetchfrom;
	public /*. string .*/ $fetchsubject;
}

/**
 *  PHP does not declare this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_5
{
	public /*. string .*/ $attribute;
	public /*. string .*/ $value;
}

/**
 *  PHP does not declare this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_6
{
	public /*. int    .*/ $type = 0;
	public /*. int    .*/ $encoding = 0;
	public /*. bool   .*/ $ifsubtype = FALSE;
	public /*. string .*/ $subtype;
	public /*. bool   .*/ $ifdescription = FALSE;
	public /*. string .*/ $description;
	public /*. bool   .*/ $ifid = FALSE;
	public /*. string .*/ $id;
	public /*. int    .*/ $lines = 0;
	public /*. int    .*/ $bytes = 0;
	public /*. bool   .*/ $ifdisposition = FALSE;
	public /*. string .*/ $disposition;
	public /*. bool   .*/ $ifdparameters = FALSE;
	public /*. array[int]imap_anonymous_class_5 .*/ $dparameters;
	public /*. bool   .*/ $ifparameters = FALSE;
	public /*. array[int]imap_anonymous_class_5 .*/ $parameters;
	public /*. array[int]imap_anonymous_class_6 .*/ $parts;
}

/**
 *  PHP does not declare this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_7
{
	public /*. string .*/ $Date;
	public /*. string .*/ $Driver;
	public /*. string .*/ $Mailbox;
	public /*. int    .*/ $Nmsgs = 0;
	public /*. int    .*/ $Recent = 0;
	public /*. int    .*/ $Unread = 0;
	public /*. int    .*/ $Deleted = 0;
	public /*. int    .*/ $Size = 0;
}

/**
 *  PHP does not declare this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_8
{
	public /*. int .*/ $messages = 0;
	public /*. int .*/ $recent = 0;
	public /*. int .*/ $unseen = 0;
	public /*. int .*/ $uidnext = 0;
	public /*. int .*/ $uidvalidity = 0;
}

/**
 *  PHP does not declare this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_9
{
	public /*. string .*/ $subject;
	public /*. string .*/ $from;
	public /*. string .*/ $to;
	public /*. string .*/ $date;
	public /*. string .*/ $message_id;
	public /*. string .*/ $references;
	public /*. string .*/ $in_reply_to;
	public /*. int    .*/ $size = 0;
	public /*. int    .*/ $uid = 0;
	public /*. int    .*/ $msgno = 0;
	public /*. bool   .*/ $recent = FALSE;
	public /*. bool   .*/ $flagged = FALSE;
	public /*. bool   .*/ $answered = FALSE;
	public /*. bool   .*/ $deleted = FALSE;
	public /*. bool   .*/ $seen = FALSE;
	public /*. bool   .*/ $draft = FALSE;
	public /*. int    .*/ $udate = 0;
}

/**
 *  PHP does not declare this class explicitly, but it is required by
 *  PHPLint in order to access object's fields.
 */
class imap_anonymous_class_10
{
	public /*. string .*/ $charset;
	public /*. string .*/ $text;
}

/*. array[int]imap_anonymous_class_1 .*/ function imap_getmailboxes(/*. resource .*/ $imap_stream, /*. string .*/ $ref, /*. string .*/ $pattern){}
/*. array .*/ function imap_scan(/*. resource .*/ $imap_stream, /*. string .*/ $ref, /*. string .*/ $pattern, /*. string .*/ $content){}

/*. imap_anonymous_class_2 .*/ function imap_check(/*. resource .*/ $imap_stream){}
/*. bool .*/ function imap_delete(/*. resource .*/ $imap_stream, /*. int .*/ $msg_no, /*. int .*/ $options = 0){}
/*. bool .*/ function imap_undelete(/*. resource .*/ $imap_stream, /*. int .*/ $msg_no, $flags = 0){}


/*. imap_anonymous_class_4 .*/ function imap_header(
	/*. resource .*/ $imap_stream,
	/*. int .*/ $msg_no,
	/*. int .*/ $fromlength = 0,
	/*. int .*/ $subjectlength = 0,
	/*. string .*/ $defaulthost = NULL){}
/*. imap_anonymous_class_4 .*/ function imap_headerinfo(
	/*. resource .*/ $imap_stream,
	/*. int .*/ $msg_no,
	/*. int .*/ $fromlength = 0,
	/*. int .*/ $subjectlength = 0,
	/*. string .*/ $defaulthost = NULL){}
/*. imap_anonymous_class_4 .*/ function imap_rfc822_parse_headers(/*. string .*/ $headers, /*. string .*/ $defaulthost = "UNKNOWN"){}
/*. array[int]string .*/ function imap_lsub(/*. resource .*/ $imap_stream, /*. string .*/ $ref, /*. string .*/ $pattern){}
/*. array[int]string .*/ function imap_listsubscribed(/*. resource .*/ $imap_stream, /*. string .*/ $ref, /*. string .*/ $pattern){}
/*. array[int]imap_anonymous_class_1 .*/ function imap_getsubscribed(/*. resource .*/ $imap_stream, /*. string .*/ $ref, /*. string .*/ $pattern){}
/*. bool .*/ function imap_subscribe(/*. resource .*/ $imap_stream, /*. string .*/ $mailbox){}
/*. bool .*/ function imap_unsubscribe(/*. resource .*/ $imap_stream, /*. string .*/ $mailbox){}


/*. imap_anonymous_class_6 .*/ function imap_fetchstructure(/*. resource .*/ $imap_stream, /*. int .*/ $msg_no, /*. int .*/ $options = 0){}
/*. string .*/ function imap_fetchbody(/*. resource .*/ $imap_stream, /*. int .*/ $msg_no, /*. string .*/ $section, /*. int .*/ $options = 0){}
/*. string .*/ function imap_base64(/*. string .*/ $text){}
/*. string .*/ function imap_qprint(/*. string .*/ $text){}
/*. string .*/ function imap_8bit(/*. string .*/ $text){}
/*. string .*/ function imap_binary(/*. string .*/ $text){}

/*. imap_anonymous_class_7 .*/ function imap_mailboxmsginfo(/*. resource .*/ $imap_stream){}
/*. string .*/ function imap_rfc822_write_address(/*. string .*/ $mailbox, /*. string .*/ $host, /*. string .*/ $personal){}
/*. array[int]imap_anonymous_class_3 .*/ function imap_rfc822_parse_adrlist(/*. string .*/ $address, /*. string .*/ $default_host){}
/*. string .*/ function imap_utf8(/*. string .*/ $mime_encoded_text){}
/*. string .*/ function imap_utf7_decode(/*. string .*/ $text){}
/*. string .*/ function imap_utf7_encode(/*. string .*/ $data){}
/*. bool .*/ function imap_setflag_full(/*. resource .*/ $imap_stream, /*. string .*/ $sequence, /*. string .*/ $flag, $options = 0){}
/*. bool .*/ function imap_clearflag_full(/*. resource .*/ $imap_stream, /*. string .*/ $sequence, /*. string .*/ $flag /*., args .*/){}
/*. array[int]int .*/ function imap_sort(/*. resource .*/ $imap_stream, /*. int .*/ $criteria, /*. int .*/ $reverse, $options = 0, /*. string .*/ $search_criteria = NULL, /*. string .*/ $charset = NULL){}
/*. string .*/ function imap_fetchheader(/*. resource .*/ $imap_stream, /*. int .*/ $msg_no, /*. int .*/ $options = 0){}
/*. int .*/ function imap_uid(/*. resource .*/ $imap_stream, /*. int .*/ $msg_no){}
/*. int .*/ function imap_msgno(/*. resource .*/ $imap_stream, /*. int .*/ $uid){}

/*. imap_anonymous_class_8 .*/ function imap_status(/*. resource .*/ $imap_stream, /*. string .*/ $mailbox, /*. int .*/ $options){}
/*. imap_anonymous_class_6 .*/ function imap_bodystruct(/*. resource .*/ $imap_stream, /*. int .*/ $msg_no, /*. string .*/ $section){}


/*. array[int]imap_anonymous_class_9 .*/ function imap_fetch_(/*. resource .*/ $imap_stream, /*. string .*/ $sequence, /*. int .*/ $options = 0){}
/*. string .*/ function imap_mail_compose(/*. array .*/ $envelope, /*. array .*/ $body){}
/*. bool .*/ function imap_mail(
	/*. string .*/ $to,
	/*. string .*/ $subject,
	/*. string .*/ $message,
	/*. string .*/ $additional_headers = NULL,
	/*. string .*/ $cc = NULL,
	/*. string .*/ $bcc = NULL,
	/*. string .*/ $rpath = NULL){}
/*. array[int]int .*/ function imap_search(/*. resource .*/ $imap_stream, /*. string .*/ $criteria, $options = SE_FREE, /*. string .*/ $charset = NULL){}
/*. array[int]string .*/ function imap_alerts(){}
/*. array[int]string .*/ function imap_errors(){}
/*. mixed .*/ function imap_last_error(){}

/*. array[int]imap_anonymous_class_10 .*/ function imap_mime_header_decode(/*. string .*/ $str){}
/*. array[string]int .*/ function imap_thread(/*. resource .*/ $imap_stream, $options = SE_FREE){}
/*. mixed .*/ function imap_timeout(/*. int .*/ $timeout_type, $timeout = -1){}
/*. boolean .*/ function imap_gc(/*. resource .*/ $imap_stream, /*. int .*/ $caches){}
/*. array[int]string .*/ function imap_listscan(
	/*. resource .*/ $imap_stream,
	/*. string .*/ $ref,
	/*. string .*/ $pattern,
	/*. string .*/ $content){}
/*. array[int]string .*/ function imap_scanmailbox(
	/*. resource .*/ $imap_stream,
	/*. string .*/ $ref,
	/*. string .*/ $pattern,
	/*. string .*/ $content){}
/*. bool .*/ function imap_savebody(
	/*. resource .*/ $imap_stream,
	/*. mixed .*/ $file,
	/*. int .*/ $msg_number,
	/*. string .*/ $part_number = "",
	$options = 0){}
/*. string .*/ function imap_fetchmime(
	/*. resource .*/ $imap_stream,
	/*. int .*/ $msg_number,
	/*. string .*/ $section,
	/*. int .*/ $options = 0){}
