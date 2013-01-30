.. Mail/Protocol/Smtp.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Protocol\\Smtp
==========================

SMTP implementation of Zend\Mail\Protocol\AbstractProtocol

Minimum implementation according to RFC2821: EHLO, MAIL FROM, RCPT TO, DATA, RSET, NOOP, QUIT

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.
    
    The first argument may be an array of all options. If so, it must include
    the 'host' and 'port' keys in order to ensure that all required values
    are present.

    :param string|array: 
    :param null|integer: 
    :param null|array: 

    :throws Exception\InvalidArgumentException: 



connect
+++++++

.. function:: connect()


    Connect to the server with the parameters given in the constructor.

    :rtype: bool 



helo
++++

.. function:: helo()


    Initiate HELO/EHLO sequence and set flag to indicate valid smtp session

    :param string: The client hostname or IP address (default: 127.0.0.1)

    :throws Exception\RuntimeException: 



hasSession
++++++++++

.. function:: hasSession()


    Returns the perceived session status

    :rtype: boolean 



_ehlo
+++++

.. function:: _ehlo()


    Send EHLO or HELO depending on capabilities of smtp host

    :param string: The client hostname or IP address (default: 127.0.0.1)

    :throws \Exception|Exception\ExceptionInterface: 



mail
++++

.. function:: mail()


    Issues MAIL command

    :param string: Sender mailbox

    :throws Exception\RuntimeException: 



rcpt
++++

.. function:: rcpt()


    Issues RCPT command

    :param string: Receiver(s) mailbox

    :throws Exception\RuntimeException: 



data
++++

.. function:: data()


    Issues DATA command

    :param string: 

    :throws Exception\RuntimeException: 



rset
++++

.. function:: rset()


    Issues the RSET command end validates answer
    
    Can be used to restore a clean smtp communication state when a transaction has been cancelled or commencing a new transaction.



noop
++++

.. function:: noop()


    Issues the NOOP command end validates answer
    
    Not used by Zend_Mail, could be used to keep a connection alive or check if it is still open.



vrfy
++++

.. function:: vrfy()


    Issues the VRFY command end validates answer
    
    Not used by Zend_Mail.

    :param string: User Name or eMail to verify



quit
++++

.. function:: quit()


    Issues the QUIT command and clears the current session



auth
++++

.. function:: auth()


    Default authentication method
    
    This default method is implemented by AUTH adapters to properly authenticate to a remote host.




disconnect
++++++++++

.. function:: disconnect()


    Closes connection



_startSession
+++++++++++++

.. function:: _startSession()


    Start mail session



_stopSession
++++++++++++

.. function:: _stopSession()


    Stop mail session



