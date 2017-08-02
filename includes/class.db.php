<?php
/*------------------------------------------------------------------------------
** File:		class.db.php
** Class:       Simply MySQLi
** Description:	PHP MySQLi wrapper class to handle common database queries and operations 
** Version:		1.0
** Updated:     18-Feb-2013
** Author:		Bennett Stone
** Homepage:	www.phpdevtips.com 
**------------------------------------------------------------------------------
** COPYRIGHT (c) 2012 - 2013 BENNETT STONE
**
** The source code included in this package is free software; you can
** redistribute it and/or modify it under the terms of the GNU General Public
** License as published by the Free Software Foundation. This license can be
** read at:
**
** http://www.opensource.org/licenses/gpl-license.php
**
** This program is distributed in the hope that it will be useful, but WITHOUT 
** ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS 
** FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. 
**------------------------------------------------------------------------------ */

class DB
{
    private $link;
    public $filter;
    
    /**
     * Allow the class to send admins a message alerting them to errors
     * on production sites
     */
    public function log_db_errors( $error, $query, $severity )
    {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'To: Admin <'.SEND_ERRORS_TO.'>' . "\r\n";
        $headers .= 'From: Yoursite <system@your-site.com>' . "\r\n";
    
        $message = '<p>An error has occurred:</p>';

        $message .= '<p>Error at '. date('Y-m-d H:i:s').': ';
        $message .= 'Query: '. htmlentities( $query ).'<br />';
        $message .= '</p>';
        $message .= '<p>Severity: '. $severity .'</p>';

        mail( SEND_ERRORS_TO, 'Database Error', $message, $headers);

        if( DISPLAY_DEBUG )
        {
            echo $message;   
        }
    }
    
    
	public function __construct()
	{
	    global $connection;
		mb_internal_encoding( 'UTF-8' );
		mb_regex_encoding( 'UTF-8' );
		$this->link = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
		
        if( mysqli_connect_errno() )
        {
            $this->log_db_errors( "Connect failed: %s\n", mysqli_connect_error(), 'Fatal' );
            exit();
        }
	}
	
	public function __destruct()
	{
		$this->disconnect();
	}
	
	/**
     * Sanitize user data
     *
     * @access public
     * @param string, array
     * @return string, array
     *
     */
    public function filter( $data )
    {
        if( !is_array( $data ) )
        {
            $data = trim( htmlentities( $data ) );
        	$data = mysqli_real_escape_string( $this->link, $data );
        }
        else
        {
            //Self call function to sanitize array data
            $data = array_map( array( 'DB', 'filter' ), $data );
        }
    	return $data;
    }
    
    /**
     * Perform queries
     * All following functions run through this function
     * All data run through this function is automatically sanitized using the filter function
     *
     * @access public
     * @param string
     * @return string
     * @return array
     * @return bool
     *
     */
    public function query( $query )
    {
        $query = $this->link->query( $query );
        if( mysqli_error( $this->link ) )
        {
            $this->log_db_errors( mysqli_error( $this->link ), $query, 'Fatal' );
            return false; 
        }
        else
        {
            return true;
        }
        mysqli_free_result( $query );
    }
    
    /**
     * Count number of rows found matching a specific query
     *
     * @access public
     * @param string
     * @return int
     *
     */
    public function num_rows( $query )
    {
        $query = $this->link->query( $query );
        if( mysqli_error( $this->link ) )
        {
            $this->log_db_errors( mysqli_error( $this->link ), $query, 'Fatal' );
            return mysqli_error( $this->link );
        }
        else
        {
            return mysqli_num_rows( $query );
        }
        mysqli_free_result( $query );
    }
    
    /**
     * Run check to see if value exists, returns true or false
     *
     * Example Usage:
     * $check_user = array(
     *    'user_email' => 'someuser@gmail.com', 
     *    'user_id' => 48
     * );
     * $exists = exists( 'your_table', 'user_id', $check_user );
     *
     * @access public
     * @param string database table name
     * @param string field to check (i.e. 'user_id' or COUNT(user_id))
     * @param array column name => column value to match
     * @return bool
     *
     */
    public function exists( $table = '', $check_val = '', $params = array() )
    {
        if( empty($table) || empty($check_val) || empty($params) )
        {
            return false;
            exit;
        }
        $check = array();
        foreach( $params as $field => $value )
        {
            
            if( !empty( $field ) && !empty( $value ) )
            {
                //Check for frequently used mysql commands and prevent encapsulation of them
                if( $this->db_common( $value ) )
                {
                    $check[] = "$field = $value";   
                }
                else
                {
                    $check[] = "$field = '$value'";   
                }
            }

        }
        $check = implode(' AND ', $check);

        $rs_check = "SELECT $check_val FROM ".$table." WHERE $check";
    	$number = $this->num_rows( $rs_check );
        if( $number === 0 )
        {
            return false;
        }
        else
        {
            return true;
        }
        exit;
    }
    
    /**
     * Return specific row based on db query
     *
     * @access public
     * @param string
     * @return array
     *
     */
    public function get_row( $query )
    {
        $query = $this->link->query( $query );
        if( mysqli_error( $this->link ) )
        {
            $this->log_db_errors( mysqli_error( $this->link ), $query, 'Fatal' );
            return false;
        }
        else
        {
            $r = mysqli_fetch_row( $query );
            mysqli_free_result( $query );
            return $r;   
        }
    }
    
    /**
     * Perform query to retrieve array of associated results
     *
     * @access public
     * @param string
     * @return array
     *
     */
    public function get_results( $query )
    {
        $row = array();
        $query = $this->link->query( $query );
        if( mysqli_error( $this->link ) )
        {
            $this->log_db_errors( mysqli_error( $this->link ), $query, 'Fatal' );
            return false;
        }
        else
        {
            while( $r = mysqli_fetch_array( $query, MYSQLI_ASSOC ) )
            {
                $row[] = $r;
            }
            mysqli_free_result( $query );
            return $row;   
        }
    }
        
    /**
    * Insert data KNOWN TO BE SECURE into database table
    * Ensure that this function is only used with safe data
    * No class-side sanitizing is performed on values found to contain common sql commands
    * As dictated by the db_common function
    * All fields are assumed to be properly encapsulated before initiating this function
    *
    * @access public
    * @param string table name
    * @param array table column => column value
    * @return bool
    */
    public function insert_safe( $table, $variables = array() )
    {
        $sql = "INSERT INTO ". $table;
        $fields = array();
        $values = array();
        foreach( $variables as $field => $value )
        {
            $fields[] = $this->filter( $field );
            //Check for frequently used mysql commands and prevent encapsulation of them
            $values[] = $value; 
        }
        $fields = ' (' . implode(', ', $fields) . ')';
        $values = '('. implode(', ', $values) .')';
        
        $sql .= $fields .' VALUES '. $values;
        $query = mysqli_query( $this->link, $sql );
        
        if( mysqli_error( $this->link ) )
        {
            $this->log_db_errors( mysqli_error( $this->link ), $sql, 'Fatal' );
            return false;
        }
        else
        {
            return true;
        }
    }    
    
    /**
     * Disconnect from db server
     * Called automatically from __destruct function
     */
    public function disconnect()
    {
		mysqli_close( $this->link );
	}

}