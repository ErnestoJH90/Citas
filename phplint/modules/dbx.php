<?php
/** dbx Functions.

See: {@link http://www.php.net/manual/en/ref.dbx.php}

@package dbx
*/


class dbx_link_object{}
class dbx_result_object{}
class dbx_row{}
class dbx_query_object{}
/*. dbx_link_object .*/ function dbx_connect(/*. string .*/ $module_name, /*. string .*/ $host, /*. string .*/ $db, /*. string .*/ $username, /*. string .*/ $password /*., args .*/){}
/*. int .*/ function dbx_close(/*. dbx_link_object .*/ $dbx_link){}
/*. dbx_result_object .*/ function dbx_query(/*. dbx_link_object .*/ $dbx_link, /*. string .*/ $sql_statement /*., args .*/){}
/*. dbx_row .*/ function dbx_fetch_row(/*. dbx_query_object .*/ $dbx_q){}
/*. string .*/ function dbx_error(/*. dbx_link_object .*/ $dbx_link){}
/*. string .*/ function dbx_escape_string(/*. dbx_link_object .*/ $dbx_link, /*. string .*/ $sz){}
/*. int .*/ function dbx_compare(/*. array .*/ $row_x, /*. array .*/ $row_y, /*. string .*/ $columnname /*., args .*/){}
/*. int .*/ function dbx_sort(/*. object .*/ $dbx_result, /*. string .*/ $compare_function_name){}
