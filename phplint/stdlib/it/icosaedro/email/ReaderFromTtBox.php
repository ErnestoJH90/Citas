<?php

namespace it\icosaedro\email;

require_once __DIR__ . "/../../../autoload.php";
require_once __DIR__ . "/../../../errors.php";

use it\icosaedro\io\IOException;
use it\icosaedro\io\InputStream;
use it\icosaedro\io\LineInputWrapper;
use it\icosaedro\utils\Strings;

/**
 * Implements the ReaderFromMboxInterface to scan the messages from a "tt"
 * mailbox. The "tt" format is generated by the tt program
 * {@link http://www.icosaedro.it/tt}, a very rudimentary terminal based, e-mail
 * and newsgroups client. Nobody may want to use it but me, but it is interesting
 * the implementation of the format it use, very simple and effective:
 * e-mails are stored in the file one next to the other, each e-mail terminated
 * by a single dot "."; lines that begins with a dot, have that dot duplicated;
 * lines are terminated by a single LF code rather than CRLF.
 * Readers for other mbox formats that mark the end of each message could be
 * easily implemented starting from this code taken as a skeleton.
 * Example to read the full content of a tt mbox file:
 * 
 * <blockquote><pre>
 * use it\icosaedro\io\FileInputStream;
 * use it\icosaedro\io\File;
 * use it\icosaedro\email\ReaderFromTtMbox;
 * use it\icosaedro\email\EmlParser;
 * ...
 * $mbox = new ReaderFromTtBox( new FileInputStream( File::fromLocaleEncoded("C:/path/to/ttmbox/2018") ) );
 * while( $mbox-&gt;next() ){
 *     $email = EmlParser::parse($mbox, NULL);
 *     ...
 * }
 * $mbox-&gt;close();
 * </pre></blockquote>
 * 
 * <p>A getLine() just after a next() will return the empty string "".
 * 
 * <p>Please read the documentation about the implemented interface for further
 * details and examples.
 *
 * @author Umberto Salsi <salsi@icosaedro.it>
 * @version $Date: 2018/07/16 07:32:19 $
 */
class ReaderFromTtBox implements ReaderFromMboxInterface {
	
	/**
	 * @var LineInputWrapper
	 */
	private $in;
	
	/**
	 * Latest line read from the source. NULL at the EOF.
	 * This is the "look-ahead" line: once either the termination line "."
	 * or the EOF has been reached, the next returned line to the client will be
	 * NULL to indicate the end of the message.
	 * @var string
	 */
	private $next_line;
	
	/**
	 * Latest line read by the client. NULL at the EOF.
	 * @var string
	 */
	private $curr_line;
	
	/**
	 * Line number of the next line, starting from 0 rather that from 1 as usual.
	 * This way the current line will take the correct number: the first line of
	 * the mbox will be 1.
	 * @var int
	 */
	private $line_no = 0;
	
	/**
	 * Tells if the current line is the end of the message marker ".".
	 * @var boolean
	 */
	private $next_line_is_end_marker = FALSE;
	
	function __toString()
	{
		return "line " . $this->line_no;
	}
	
	/**
	 * Read the next line, remove EOL marker, detect end of the message, updates
	 * line number, un-quote the "." marker.
	 * @return void
	 * @throws IOException
	 */
	private function readLineLowLevel()
	{
		$line = $this->in->readLine();
		if( $line === NULL ){
			$this->next_line = NULL;
			$this->next_line_is_end_marker = FALSE;
			return;
		}
		$this->line_no++;

		// Remove trailing end-of-line:
		if( Strings::endsWith($line, "\r\n") )
			$line = substr($line, 0, strlen($line) - 2);
		else if( Strings::endsWith($line, "\n") )
			$line = substr($line, 0, strlen($line) - 1);
		
		// Detect message end marker:
		$this->next_line_is_end_marker = $line === ".";
		
		// Un-quote marker lines:
		if( strlen($line) > 0 && $line[0] === "." )
			$line = substr($line, 1);
		
		$this->next_line = $line;
	}

	/**
	 * Initializes the mbox reader. The next() method should be invoked to detect
	 * the presence of the first message.
	 * @param InputStream $in
	 * @throws IOException
	 */
	function __construct($in)
	{
		$this->in = new LineInputWrapper($in);
		$this->line_no = -1;
		$this->curr_line = NULL;
		$this->next_line = "";
		$this->next_line_is_end_marker = TRUE;
	}
	
	/**
	 * Move to the beginning of the next message, so that readLine() will
	 * read the first line of that message.
	 * @return boolean True if a next message does really exist, possibly even
	 * empty (zero lines); false at EOF.
	 * @throws IOException
	 */
	function next()
	{
		// Skip lines of the current message up to end of msg marker or EOF:
		while( $this->next_line !== NULL && ! $this->next_line_is_end_marker )
			$this->readLineLowLevel();
		if( $this->next_line === NULL )
			return FALSE;
		$this->readLineLowLevel();
		return $this->next_line !== NULL;
			
	}
	
	/**
	 * @return void
	 * @throws IOException
	 */
	function readLine()
	{
		if( $this->next_line === NULL || $this->next_line_is_end_marker ){
			$this->curr_line = NULL;
		} else {
			$this->curr_line = $this->next_line;
			$this->readLineLowLevel();
		}
	}
	
	/**
	 * @return string
	 */
	function getLine()
	{
		return $this->curr_line;
	}
	
	/**
	 * @return void
	 * @throws IOException
	 */
	function close()
	{
		if( $this->in === NULL )
			return;
		$in = $this->in;
		$this->in = NULL;
		$in->close();
	}
	
}