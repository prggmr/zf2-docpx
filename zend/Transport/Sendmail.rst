.. Mail/Transport/Sendmail.php generated using docpx on 01/30/13 03:32am


Zend\\Mail\\Transport\\Sendmail
===============================

Class for sending email via the PHP internal mail() function

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor.

    :param null|string|array|Traversable: OPTIONAL (Default: null)



setParameters
-------------

.. function:: setParameters()


    Set sendmail parameters
    
    Used to populate the additional_parameters argument to mail()

    :param null|string|array|Traversable: 

    :throws \Zend\Mail\Exception\InvalidArgumentException: 

    :rtype: Sendmail 



setCallable
-----------

.. function:: setCallable()


    Set callback to use for mail
    
    Primarily for testing purposes, but could be used to curry arguments.

    :param callable: 

    :throws \Zend\Mail\Exception\InvalidArgumentException: 

    :rtype: Sendmail 



send
----

.. function:: send()


    Send a message

    :param \Zend\Mail\Message: 



prepareRecipients
-----------------

.. function:: prepareRecipients()


    Prepare recipients list

    :param \Zend\Mail\Message: 

    :throws \Zend\Mail\Exception\RuntimeException: 

    :rtype: string 



prepareSubject
--------------

.. function:: prepareSubject()


    Prepare the subject line string

    :param \Zend\Mail\Message: 

    :rtype: string 



prepareBody
-----------

.. function:: prepareBody()


    Prepare the body string

    :param \Zend\Mail\Message: 

    :rtype: string 



prepareHeaders
--------------

.. function:: prepareHeaders()


    Prepare the textual representation of headers

    :param \Zend\Mail\Message: 

    :rtype: string 



prepareParameters
-----------------

.. function:: prepareParameters()


    Prepare additional_parameters argument
    
    Basically, overrides the MAIL FROM envelope with either the Sender or
    From address.

    :param \Zend\Mail\Message: 

    :rtype: string 



mailHandler
-----------

.. function:: mailHandler()


    Send mail using PHP native mail()

    :param string: 
    :param string: 
    :param string: 
    :param string: 
    :param $parameters: 

    :throws \Zend\Mail\Exception\RuntimeException: 



handleMailErrors
----------------

.. function:: handleMailErrors()


    Temporary error handler for PHP native mail().

    :param int: 
    :param string: 
    :param string: 
    :param string: 
    :param array: 

    :rtype: bool always true



isWindowsOs
-----------

.. function:: isWindowsOs()


    Is this a windows OS?

    :rtype: bool 



