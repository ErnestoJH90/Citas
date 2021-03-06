<?php
/** Ovrimos SQL Functions.

See: {@link http://www.php.net/manual/en/ref.ovrimos.php}
@package ovrimossql
*/



/*. int .*/ function ovrimos_connect(/*. string .*/ $host, /*. string .*/ $db, /*. string .*/ $user, /*. string .*/ $password){}
/*. void .*/ function ovrimos_close(/*. int .*/ $connection){}
/*. bool .*/ function ovrimos_longreadlen(/*. int .*/ $result_id, /*. int .*/ $length){}
/*. int .*/ function ovrimos_prepare(/*. int .*/ $connection_id, /*. string .*/ $query){}
/*. bool .*/ function ovrimos_execute(/*. int .*/ $result_id /*., args .*/){}
/*. string .*/ function ovrimos_cursor(/*. int .*/ $result_id){}
/*. int .*/ function ovrimos_exec(/*. int .*/ $connection_id, /*. string .*/ $query){}
/*. bool .*/ function ovrimos_fetch_into(/*. int .*/ $result_id, /*. array .*/ $result_array /*., args .*/){}
/*. bool .*/ function ovrimos_fetch_row(/*. int .*/ $result_id /*., args .*/){}
/*. string .*/ function ovrimos_result(/*. int .*/ $result_id, /*. mixed .*/ $field){}
/*. int .*/ function ovrimos_result_all(/*. int .*/ $result_id /*., args .*/){}
/*. bool .*/ function ovrimos_free_result(/*. int .*/ $result_id){}
/*. int .*/ function ovrimos_num_rows(/*. int .*/ $result_id){}
/*. int .*/ function ovrimos_num_fields(/*. int .*/ $result_id){}
/*. string .*/ function ovrimos_field_name(/*. int .*/ $result_id, /*. int .*/ $field_number){}
/*. int .*/ function ovrimos_field_type(/*. int .*/ $result_id, /*. int .*/ $field_number){}
/*. int .*/ function ovrimos_field_len(/*. int .*/ $result_id, /*. int .*/ $field_number){}
/*. int .*/ function ovrimos_field_num(/*. int .*/ $result_id, /*. string .*/ $field_name){}
/*. int .*/ function ovrimos_autocommit(/*. int .*/ $connection_id, /*. int .*/ $OnOff){}
/*. bool .*/ function ovrimos_commit(/*. int .*/ $connection_id){}
/*. bool .*/ function ovrimos_rollback(/*. int .*/ $connection_id){}
/*. int .*/ function ovrimos_setoption(/*. args .*/){}
