.. Mail/Transport/Smtp.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Transport\\Smtp
===========================

SMTP connection object

Loads an instance of Zend\Mail\Protocol\Smtp and forwards smtp transactions

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.

    :param SmtpOptions: Optional



setOptions
++++++++++

.. function:: setOptions()


    Set options

    :param SmtpOptions: 

    :rtype: Smtp 



getOptions
++++++++++

.. function:: getOptions()


    Get options

    :rtype: SmtpOptions 



setPluginManager
++++++++++++++++

.. function:: setPluginManager()


    Set plugin manager for obtaining SMTP protocol connection

    :param Protocol\SmtpPluginManager: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Smtp 



getPluginManager
++++++++++++++++

.. function:: getPluginManager()


    Get plugin manager for loading SMTP protocol connection

    :rtype: Protocol\SmtpPluginManager 



setAutoDisconnect
+++++++++++++++++

.. function:: setAutoDisconnect()


    Set the automatic disconnection when destruct

    :param bool: 

    :rtype: Smtp 



getAutoDisconnect
+++++++++++++++++

.. function:: getAutoDisconnect()


    Get the automatic disconnection value

    :rtype: bool 



plugin
++++++

.. function:: plugin()


    Return an SMTP connection

    :param string: 
    :param array|null: 

    :rtype: Protocol\Smtp 



__destruct
++++++++++

.. function:: __destruct()


    Class destructor to ensure all open connections are closed



setConnection
+++++++++++++

.. function:: setConnection()


    Sets the connection protocol instance

    :param Protocol\AbstractProtocol: 



getConnection
+++++++++++++

.. function:: getConnection()


    Gets the connection protocol instance

    :rtype: Protocol\Smtp 



disconnect
++++++++++

.. function:: disconnect()


    Disconnect the connection protocol instance

    :rtype: void 



send
++++

.. function:: send()


    Send an email via the SMTP connection protocol
    
    The connection via the protocol adapter is made just-in-time to allow a
    developer to add a custom adapter if required before mail is sent.

    :param Message: 

    :throws Exception\RuntimeException: 



prepareFromAddress
++++++++++++++++++

.. function:: prepareFromAddress()


    Retrieve email address for envelope FROM

    :param Message: 

    :throws Exception\RuntimeException: 

    :rtype: string 



prepareRecipients
+++++++++++++++++

.. function:: prepareRecipients()


    Prepare array of email address recipients

    :param Message: 

    :rtype: array 



prepareHeaders
++++++++++++++

.. function:: prepareHeaders()


    Prepare header string from message

    :param Message: 

    :rtype: string 



prepareBody
+++++++++++

.. function:: prepareBody()


    Prepare body string from message

    :param Message: 

    :rtype: string 



lazyLoadConnection
++++++++++++++++++

.. function:: lazyLoadConnection()


    Lazy load the connection, and pass it helo

    :rtype: Protocol\Smtp 



connect
+++++++

.. function:: connect()


    Connect the connection, and pass it helo

    :rtype: Protocol\Smtp 



