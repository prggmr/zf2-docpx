.. Mail/Protocol/AbstractProtocol.php generated using docpx on 01/30/13 03:32am


Zend\\Mail\\Protocol\\AbstractProtocol
======================================

Provides low-level methods for concrete adapters to communicate with a remote mail server and track requests and responses.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor.

    :param string: OPTIONAL Hostname of remote connection (default: 127.0.0.1)
    :param integer: OPTIONAL Port number (default: null)

    :throws Exception\RuntimeException: 



__destruct
----------

.. function:: __destruct()


    Class destructor to cleanup open resources



setMaximumLog
-------------

.. function:: setMaximumLog()


    Set the maximum log size

    :param integer: Maximum log size



getMaximumLog
-------------

.. function:: getMaximumLog()


    Get the maximum log size

    :rtype: int the maximum log size



connect
-------

.. function:: connect()


    Create a connection to the remote host
    
    Concrete adapters for this class will implement their own unique connect scripts, using the _connect() method to create the socket resource.



getRequest
----------

.. function:: getRequest()


    Retrieve the last client request

    :rtype: string 



getResponse
-----------

.. function:: getResponse()


    Retrieve the last server response

    :rtype: array 



getLog
------

.. function:: getLog()


    Retrieve the transaction log

    :rtype: string 



resetLog
--------

.. function:: resetLog()


    Reset the transaction log



_addLog
-------

.. function:: _addLog()


    Add the transaction log

    :param string: new transaction



_connect
--------

.. function:: _connect()


    Connect to the server using the supplied transport and target
    
    An example $remote string may be 'tcp://mail.example.com:25' or 'ssh://hostname.com:2222'

    :param string: Remote

    :throws Exception\RuntimeException: 

    :rtype: bool 



_disconnect
-----------

.. function:: _disconnect()


    Disconnect from remote host and free resource



_send
-----

.. function:: _send()


    Send the given request followed by a LINEEND to the server.

    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: integer|bool Number of bytes written to remote host



_receive
--------

.. function:: _receive()


    Get a line from the stream.

    :param integer: Per-request timeout value if applicable

    :throws Exception\RuntimeException: 

    :rtype: string 



_expect
-------

.. function:: _expect()


    Parse server response for successful codes
    
    Read the response from the stream and check for expected return code.
    Throws a Zend_Mail_Protocol_Exception if an unexpected code is returned.

    :param string|array: One or more codes that indicate a successful response
    :param integer: Per-request timeout value if applicable

    :throws Exception\RuntimeException: 

    :rtype: string Last line of response string





Constants
+++++++++

EOL
===

Mail default EOL string

TIMEOUT_CONNECTION
==================

Default timeout in seconds for initiating session

