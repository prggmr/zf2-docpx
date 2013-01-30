.. Mail/Protocol/Pop3.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Protocol\\Pop3
==========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Public constructor

    :param string: hostname or IP address of POP3 server, if given connect() is called
    :param int|null: port of POP3 server, null for default (110 or 995 for ssl)
    :param bool|string: use ssl? 'SSL', 'TLS' or false



__destruct
++++++++++

.. function:: __destruct()


    Public destructor



connect
+++++++

.. function:: connect()


    Open connection to POP3 server

    :param string: hostname or IP address of POP3 server
    :param int|null: of POP3 server, default is 110 (995 for ssl)
    :param string|bool: use 'SSL', 'TLS' or false

    :throws Exception\RuntimeException: 

    :rtype: string welcome message



sendRequest
+++++++++++

.. function:: sendRequest()


    Send a request

    :param string: your request without newline

    :throws Exception\RuntimeException: 



readResponse
++++++++++++

.. function:: readResponse()


    read a response

    :param bool: response has multiple lines and should be read until "<nl>.<nl>"

    :throws Exception\RuntimeException: 

    :rtype: string response



request
+++++++

.. function:: request()


    Send request and get response


    :param string: request
    :param bool: multiline response?

    :rtype: string result from readResponse()



logout
++++++

.. function:: logout()


    End communication with POP3 server (also closes socket)



capa
++++

.. function:: capa()


    Get capabilities from POP3 server

    :rtype: array list of capabilities



login
+++++

.. function:: login()


    Login to POP3 server. Can use APOP

    :param string: username
    :param string: password
    :param bool: should APOP be tried?



status
++++++

.. function:: status()


    Make STAT call for message count and size sum

    :param int: out parameter with count of messages
    :param int: out parameter with size in octets of messages



getList
+++++++

.. function:: getList()


    Make LIST call for size of message(s)

    :param int|null: number of message, null for all

    :rtype: int|array size of given message or list with array(num => size)



uniqueid
++++++++

.. function:: uniqueid()


    Make UIDL call for getting a uniqueid

    :param int|null: number of message, null for all

    :rtype: string|array uniqueid of message or list with array(num => uniqueid)



top
+++

.. function:: top()


    Make TOP call for getting headers and maybe some body lines
    This method also sets hasTop - before it it's not known if top is supported
    
    The fallback makes normal RETR call, which retrieves the whole message. Additional
    lines are not removed.

    :param int: number of message
    :param int: number of wanted body lines (empty line is inserted after header lines)
    :param bool: fallback with full retrieve if top is not supported

    :throws Exception\RuntimeException: 
    :throws Exception\ExceptionInterface: 

    :rtype: string message headers with wanted body lines



retrieve
++++++++

.. function:: retrieve()


    Make a RETR call for retrieving a full message with headers and body

    :param int: message number

    :rtype: string message



noop
++++

.. function:: noop()


    Make a NOOP call, maybe needed for keeping the server happy



delete
++++++

.. function:: delete()


    Make a DELE count to remove a message

    :param $msgno: 



undelete
++++++++

.. function:: undelete()


    Make RSET call, which rollbacks delete requests





Constants
---------

TIMEOUT_CONNECTION
++++++++++++++++++

Default timeout in seconds for initiating session

