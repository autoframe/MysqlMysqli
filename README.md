# MysqlMysqli
# mySQL legacy library in PHP7

https://github.com/autoframe

Version :		1.0.3
Build time: 	2021-06-20

## SCOPE:
Redefine the legacy depracaded mySQL functions using mysqli

## USE:

use Autoframe\MysqlMysqli\CompatibilityMySQL;

## COMPATIBILITY: 

&gt;= PHP7

## USAGE:
composer require autoframe/mysql-mysqli
OR require_once($_SERVER['DOCUMENT_ROOT']."compatibilityMySQL.php");
OR require_once("/full/server/path/compatibilityMySQL.php");

For local include without composer, the namespace can be removed if needed


## KNOWN ISSUES:
mysql_list_processes() reurns incomplete data (precess id is returned but no database,table,time or other data )
mysql_field_type() can return some bad filed type descriptions, depending on the mysql server version
mysql_fetch_field() can return some types, depending on the mysql server version

## TO IMPROVE:
sqli_h_type2txt() acording to mysql server version => it may fix the filed type issues

## COMPLETE FUNCTION LIST:

    mysql_affected_rows — Get number of affected rows in previous MySQL operation
    mysql_client_encoding — Returns the name of the character set
    mysql_close — Close MySQL connection
    mysql_connect — Open a connection to a MySQL Server
    mysql_create_db — Create a MySQL database
    mysql_data_seek — Move internal result pointer
    mysql_db_name — Retrieves database name from the call to mysql_list_dbs
    mysql_db_query — Selects a database and executes a query on it
    mysql_drop_db — Drop (delete) a MySQL database
    mysql_errno — Returns the numerical value of the error message from previous MySQL operation
    mysql_error — Returns the text of the error message from previous MySQL operation
    mysql_escape_string — Escapes a string for use in a mysql_query
    mysql_fetch_array — Fetch a result row as an associative array, a numeric array, or both
    mysql_fetch_assoc — Fetch a result row as an associative array
    mysql_fetch_field — Get column information from a result and return as an object
    mysql_fetch_lengths — Get the length of each output in a result
    mysql_fetch_object — Fetch a result row as an object
    mysql_fetch_row — Get a result row as an enumerated array
    mysql_field_flags — Get the flags associated with the specified field in a result
    mysql_field_len — Returns the length of the specified field
    mysql_field_name — Get the name of the specified field in a result
    mysql_field_seek — Set result pointer to a specified field offset
    mysql_field_table — Get name of the table the specified field is in
    mysql_field_type — Get the type of the specified field in a result
    mysql_free_result — Free result memory
    mysql_get_client_info — Get MySQL client info
    mysql_get_host_info — Get MySQL host info
    mysql_get_proto_info — Get MySQL protocol info
    mysql_get_server_info — Get MySQL server info
    mysql_info — Get information about the most recent query
    mysql_insert_id — Get the ID generated in the last query
    mysql_list_dbs — List databases available on a MySQL server
    mysql_list_fields — List MySQL table fields
    mysql_listfields — Alias for mysql_list_fields; List MySQL table fields
    mysql_list_processes — List MySQL processes
    mysql_list_tables — List tables in a MySQL database
    mysql_listtables — Alias for mysql_list_tables; List tables in a MySQL database
    mysql_num_fields — Get number of fields in result
    mysql_num_rows — Get number of rows in result
    mysql_pconnect — Open a persistent connection to a MySQL server
    mysql_ping — Ping a server connection or reconnect if there is no connection
    mysql_query — Send a MySQL query
    mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    mysql_result — Get result data
    mysql_select_db — Select a MySQL database
    mysql_set_charset — Sets the client character set
    mysql_stat — Get current system status
    mysql_tablename — Get table name of field
    mysql_thread_id — Return the current thread ID
    mysql_unbuffered_query — Send an SQL query to MySQL without fetching and buffering the result rows.
    sqli_h_type2txt - parses the mysqli types depending on mysql server version
    sqli_h_flags2txt - parses the mysqli flags
