.. XmlRpc/Server/Fault.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\XmlRpc\\Server\\Fault
===========================

XMLRPC Server Faults

Encapsulates an exception for use as an XMLRPC fault response. Valid
exception classes that may be used for generating the fault code and fault
string can be attached using {@link attachFaultException()}; all others use a
generic '404 Unknown error' response.

You may also attach fault observers, which would allow you to monitor
particular fault cases; this is done via {@link attachObserver()}. Observers
need only implement a static 'observe' method.

To allow method chaining, you may use the {@link getInstance()} factory
to instantiate a Zend_XmlRpc_Server_Fault.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param \Exception: 

    :rtype: Fault 



getInstance
+++++++++++

.. function:: getInstance()


    Return Zend\XmlRpc\Server\Fault instance

    :param \Exception: 

    :rtype: Fault 



attachFaultException
++++++++++++++++++++

.. function:: attachFaultException()


    Attach valid exceptions that can be used to define xmlrpc faults

    :param string|array: Class name or array of class names

    :rtype: void 



detachFaultException
++++++++++++++++++++

.. function:: detachFaultException()


    Detach fault exception classes

    :param string|array: Class name or array of class names

    :rtype: void 



attachObserver
++++++++++++++

.. function:: attachObserver()


    Attach an observer class
    
    Allows observation of xmlrpc server faults, thus allowing logging or mail
    notification of fault responses on the xmlrpc server.
    
    Expects a valid class name; that class must have a public static method
    'observe' that accepts an exception as its sole argument.

    :param string: 

    :rtype: bool 



detachObserver
++++++++++++++

.. function:: detachObserver()


    Detach an observer

    :param string: 

    :rtype: bool 



getException
++++++++++++

.. function:: getException()


    Retrieve the exception


    :rtype: \Exception 



