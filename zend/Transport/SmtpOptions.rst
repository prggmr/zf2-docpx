.. Mail/Transport/SmtpOptions.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Transport\\SmtpOptions
==================================

Methods
-------

getName
+++++++

.. function:: getName()


    Return the local client hostname

    :rtype: string 



setName
+++++++

.. function:: setName()


    Set the local client hostname or IP


    :param string: 

    :throws \Zend\Mail\Exception\InvalidArgumentException: 

    :rtype: SmtpOptions 



getConnectionClass
++++++++++++++++++

.. function:: getConnectionClass()


    Get connection class
    
    This should be either the class Zend\Mail\Protocol\Smtp or a class
    extending it -- typically a class in the Zend\Mail\Protocol\Smtp\Auth
    namespace.

    :rtype: string 



setConnectionClass
++++++++++++++++++

.. function:: setConnectionClass()


    Set connection class

    :param string: the value to be set

    :throws \Zend\Mail\Exception\InvalidArgumentException: 

    :rtype: SmtpOptions 



getConnectionConfig
+++++++++++++++++++

.. function:: getConnectionConfig()


    Get connection configuration array

    :rtype: array 



setConnectionConfig
+++++++++++++++++++

.. function:: setConnectionConfig()


    Set connection configuration array

    :param array: 

    :rtype: SmtpOptions 



getHost
+++++++

.. function:: getHost()


    Get the host name

    :rtype: string 



setHost
+++++++

.. function:: setHost()


    Set the SMTP host


    :param string: 

    :rtype: SmtpOptions 



getPort
+++++++

.. function:: getPort()


    Get the port the SMTP server runs on

    :rtype: int 



setPort
+++++++

.. function:: setPort()


    Set the port the SMTP server runs on

    :param int: 

    :throws \Zend\Mail\Exception\InvalidArgumentException: 

    :rtype: SmtpOptions 



