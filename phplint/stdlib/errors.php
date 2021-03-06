<?php

/*.
	require_module 'core';
	require_module 'phpinfo';
	require_module 'file';
	pragma 'error_throws_exception' 'ErrorException';
.*/

require_once __DIR__ . "/InternalException.php";

/**
 * Transforms any runtime error into exception and adds safety and security checks.
 * By requiring this package, error handling of a program radically changes
 * whenever an error occurs. Hopefully, all this shall make the program safer
 * and simpler.
 * 
 * <p><b>Check proper php.ini be loaded</b>
 * <br>A run-time check is performed on the actual php.ini configuration file in use.
 * A fatal error is triggered if either the wrong configuration file was read or
 * no configuration file has been read at all. Different php.ini files can be set
 * depending on the current SAPI the interpreter is running under. By default,
 * the php.ini used for the CLI and CGI SAPI is those provided by PHPLint under
 * this same directory. If the web server PHP module is used instead, the
 * specific path of the php.ini file MUST be set by hand in the code of this module,
 * see the phplint_check_php_ini() function.
 * 
 * <p><b>Maximum error level</b>
 * <br>All the possible errors that the PHP engine or the application may
 * trigger are enabled, so that even the smallest notice which normally PHP
 * programmers ignore is now thrown as exception.
 * 
 * <p><b>Errors become ErrorException</b>
 * <br>Second, every function and method, be it PHP built-in or defined by the
 * user, that may trigger an error (here including E_NOTICE) now may throw
 * {@link ErrorException}. PHPLint is made aware of these important changes.
 * This is the case, for example, of functions like
 * fopen() and all the I/O functions, unserialize(), hex2bin(),
 * parse_url(), array_chunk(), array_fill(),
 * and many others which now may fail throwing this exception.
 * Note that ErrorException is checked, so you have
 * the choice to either capture it with try/catch, or declare it as thrown by your
 * function or method using the <tt>@throws</tt> line tag, but you cannot ignore
 * it. The error silencer operator <tt>@</tt> cannot be used anymore, as errors
 * must now be handled as exceptions. The usual code:
 * 
 * <blockquote><pre>
 * $f = @fopen("afile.txt", "r");
 * if( $f === FALSE )
 *     die($(string) error_get_last()['message']);
 * </pre></blockquote>
 * 
 * now becomes:
 * 
 * <blockquote><pre>
 * try {
 *     $f = fopen("afile.txt", "r");
 * } catch(ErrorException $e){
 *     die($e-&gt;getMessage());
 * }
 * </pre></blockquote>
 * 
 * <p><b>Core errors become unchecked InternalException</b>
 * <br>The last important difference is that errors triggered by the PHP engine
 * are now translated to the unchecked {@link InternalException} exception.
 * Being unchecked, you should not try to handle it as it normally indicates
 * a bug internal to the program the program itself cannot address (and should
 * not generate, in the first place).
 * A partial list of the engine errors that throw InternalException follows:
 * 
 * <ul>
 * <li>Division by zero, or remainder modulus zero. PHP7 introduced a specific
 * DivisionByZeroError exception, but an E_WARNING is generated first anyway and
 * then caught by this module, so resulting in a InternalException instead.</li>
 * <li>Accessing an element of an array that does not exist. For example:
 * <tt>$a = [1,2,3]; echo $a[999];</tt></li>
 * <li>Accessing a property through an null variable. For example:
 * <tt>$obj = NULL; $obj-&gt;p;</tt></li>
 * <li>Failure to include a source with include() or include_once().</li>
 * <li>Calling a core function like {@link call_user_func()}.</li>
 * </ul>
 * 
 * <p>Several other errors the engine may generate cannot happen once the source
 * had been validated with PHPLint:
 * missing mandatory arguments in function or method call;
 * accessing an array using a key that cannot be converted to int or string;
 * using the value of an undefined variable;
 * implicit conversion to string of an object that does not implement __toString();
 * implicit conversion to string of array;
 * defining a constant already defined.
 * 
 * <p><b>Fatal errors are still... fatal</b>
 * <br>Many other errors are fatal and cannot be handled by the program at all:
 * <tt>$a=NULL; $a-&gt;m();</tt>, require() and require_once() failure; memory
 * exausted; invalid type for the argument of a function as in ord(array()),
 * ...
 * 
 * <p><b>The silencer operator @ cannot be used anymore</b>
 * <br>The usual programming style (that is, performing error detection using the
 * error silencer operator and checking the returned value) cannot be mixed with
 * this new behavior anymore. Most of the PHPLint Standard Library includes this
 * file. PHPLint warns with an error if this package gets included after a possible
 * error condition has been detected before in the code.
 * 
 * <p><b>Uncaught exceptions are reported on standard error</b>
 * <br>Uncaught exceptions are reported on standard error along with the call
 * stack trace, and the program terminates with exit code of 1.
 * 
 * @package errors.php
 * @author Umberto Salsi <salsi@icosaedro.it>
 * @version $Date: 2019/01/08 09:36:32 $
 */

// Turn on any error, warning, notice:
error_reporting(PHP_INT_MAX);

// Never send errors to the client, as stack traces may disclose too much!
ini_set("display_errors", "0");

/**
 * Checks the proper php.ini be really loaded or die. This adds extra safety,
 * we should never to run if unaware of which environment is currently set.
 * Users should set here the list of their expected php.ini files, which are
 * selected based on the SAPI we are currently running under.
 * @access private
 */
function phplint_check_php_ini()
{
	switch( PHP_SAPI ){
	
	case "apache2handler":
		// Apache module SAPI.
		$expected = "C:\\wamp\\bin\\apache\\apache2.4.27\\bin\\php.ini"; break;
	
	case "cgi-fcgi":
	case "cli":
	case "cli-server":
		// CGI SAPI. Use our internal php.ini:
		$expected = __DIR__ . DIRECTORY_SEPARATOR ."php.ini";  break;
	
	default:
		die("FATAL ERROR in ". __FILE__ .": unexpected SAPI ". PHP_SAPI);
	}
	$actual = php_ini_loaded_file();
	if( $actual === FALSE )
		die("FATAL ERROR in ". __FILE__ .": no php.ini file loaded; expected $expected with SAPI " . PHP_SAPI);
	if( $actual !== $expected )
		die("FATAL ERROR in ". __FILE__ .": unexpected php.ini loaded: $actual, expected: $expected with SAPI ". PHP_SAPI);
}

phplint_check_php_ini();

/**
 * Uncaught exceptions ends here and the program is terminated. The message of
 * the exception and the call stack trace are sent to standard error then the
 * program terminates with exit code 1.
 * @access private
 * @param Exception $e
 * @return void
 */
function phplint_exception_handler($e)
{
	error_log( "Uncaught ". addcslashes($e->__toString(), "\x00..\x08\x0b\x0c\x0e..\x1f\x7f") . "\n");
	exit(1);
}


set_exception_handler("phplint_exception_handler");


/**
 * Maps a PHP engine error code into its constant name E_*.
 * @access private
 * @param int $errno PHP engine error code.
 * @return string Constant name of the code.
 */
function phplint_error_level($errno)
{
	switch( $errno ){
		/* These can't be handled: E_ERROR E_PARSE E_CORE_ERROR
			E_CORE_WARNING E_COMPILE_WARNING E_COMPILE_ERROR */
		case E_WARNING:     return "E_WARNING";
		case E_NOTICE:      return "E_NOTICE";
		case E_STRICT:      return "E_STRICT";
		case E_USER_ERROR:  return "E_USER_ERROR";
		case E_USER_WARNING:return "E_USER_WARNING";
		case E_USER_NOTICE: return "E_USER_NOTICE";
		case E_RECOVERABLE_ERROR: return "E_RECOVERABLE_ERROR";
		case E_DEPRECATED:  return "E_DEPRECATED";
		case E_USER_DEPRECATED: return "E_USER_DEPRECATED";
		default:            return "E_$errno";
	}
}


/**
 * @access private
 * @param int $errno
 * @param string $message
 * @param string $filename
 * @param int $lineno
 * @return boolean
 * @throws ErrorException Error coming from a user's defined, built-in or
 * extension function.
 * @throws InternalException Error coming from the PHP core engine.
 */
function phplint_error_handler($errno, $message, $filename, $lineno)
{
	$bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
	// Errors generated by the engine are reported coming from the user's code,
	// then a "file" entry is available. Errors generated from built-in functions
	// lacks this entry. This allows to distinguish between core and non-core
	// errors.
	$is_core_exception = isset($bt[0]["file"]);
	if( $is_core_exception )
		throw new InternalException(phplint_error_level($errno) . ": $message", 0, $errno, $filename, $lineno); 
	else
		throw new ErrorException(phplint_error_level($errno) . ": $message", 0, $errno, $filename, $lineno); 
}


set_error_handler("phplint_error_handler");


/**
 * Logs to standard error a captured exception, including stack trace and previous
 * exception (this latter displayed first).
 * @param Exception $e
 * @return void
 */
function logCapturedException($e) {
	error_log( "Caught ". addcslashes($e->__toString(), "\x00..\x08\x0b\x0c\x0e..\x1f\x7f") . "\n");
}
