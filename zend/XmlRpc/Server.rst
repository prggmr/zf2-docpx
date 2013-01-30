.. XmlRpc/Server.php generated using docpx on 01/30/13 03:32am


Zend\\XmlRpc\\Server
====================

An XML-RPC server implementation

Example:
<code>
use Zend\XmlRpc;

// Instantiate server
$server = new XmlRpc\Server();

// Allow some exceptions to report as fault responses:
XmlRpc\Server\Fault::attachFaultException('My\\Exception');
XmlRpc\Server\Fault::attachObserver('My\\Fault\\Observer');

// Get or build dispatch table:
if (!XmlRpc\Server\Cache::get($filename, $server)) {

    // Attach Some_Service_Class in 'some' namespace
    $server->setClass('Some\\Service\\Class', 'some');

    // Attach Another_Service_Class in 'another' namespace
    $server->setClass('Another\\Service\\Class', 'another');

    // Create dispatch table cache file
    XmlRpc\Server\Cache::save($filename, $server);
}

$response = $server->handle();
echo $response;
</code>

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Creates system.* methods.



__call
------

.. function:: __call()


    Proxy calls to system object

    :param string: 
    :param array: 

    :rtype: mixed 

    :throws: Server\Exception\BadMethodCallException 



addFunction
-----------

.. function:: addFunction()


    Attach a callback as an XMLRPC method
    
    Attaches a callback as an XMLRPC method, prefixing the XMLRPC method name
    with $namespace, if provided. Reflection is done on the callback's
    docblock to create the methodHelp for the XMLRPC method.
    
    Additional arguments to pass to the function at dispatch may be passed;
    any arguments following the namespace will be aggregated and passed at
    dispatch time.

    :param string|array|callable: Valid callback
    :param string: Optional namespace prefix

    :throws Server\Exception\InvalidArgumentException: 

    :rtype: void 



setClass
--------

.. function:: setClass()


    Attach class methods as XMLRPC method handlers
    
    $class may be either a class name or an object. Reflection is done on the
    class or object to determine the available public methods, and each is
    attached to the server as an available method; if a $namespace has been
    provided, that namespace is used to prefix the XMLRPC method names.
    
    Any additional arguments beyond $namespace will be passed to a method at
    invocation.

    :param string|object: 
    :param string: Optional
    :param mixed: Optional arguments to pass to methods

    :rtype: void 

    :throws: Server\Exception\InvalidArgumentException on invalid input



fault
-----

.. function:: fault()


    Raise an xmlrpc server fault

    :param string|\Exception: 
    :param int: 

    :rtype: Server\Fault 



setReturnResponse
-----------------

.. function:: setReturnResponse()


    Set return response flag
    
    If true, {@link handle()} will return the response instead of
    automatically sending it back to the requesting client.
    
    The response is always available via {@link getResponse()}.

    :param bool: 

    :rtype: Server 



getReturnResponse
-----------------

.. function:: getReturnResponse()


    Retrieve return response flag

    :rtype: bool 



handle
------

.. function:: handle()


    Handle an xmlrpc call

    :param Request: Optional

    :rtype: Response|Fault 



loadFunctions
-------------

.. function:: loadFunctions()


    Load methods as returned from {@link getFunctions}
    
    Typically, you will not use this method; it will be called using the
    results pulled from {@link Zend\XmlRpc\Server\Cache::get()}.

    :param array|Definition: 

    :rtype: void 

    :throws: Server\Exception\InvalidArgumentException on invalid input



setEncoding
-----------

.. function:: setEncoding()


    Set encoding

    :param string: 

    :rtype: Server 



getEncoding
-----------

.. function:: getEncoding()


    Retrieve current encoding

    :rtype: string 



setPersistence
--------------

.. function:: setPersistence()


    Do nothing; persistence is handled via {@link Zend\XmlRpc\Server\Cache}

    :param mixed: 

    :rtype: void 



setRequest
----------

.. function:: setRequest()


    Set the request object

    :param string|Request: 

    :rtype: Server 

    :throws: Server\Exception\InvalidArgumentException on invalid request class or object



getRequest
----------

.. function:: getRequest()


    Return currently registered request object

    :rtype: null|Request 



getResponse
-----------

.. function:: getResponse()


    Last response.

    :rtype: Response 



setResponseClass
----------------

.. function:: setResponseClass()


    Set the class to use for the response

    :param string: 

    :throws Server\Exception\InvalidArgumentException: if invalid response class

    :rtype: bool True if class was set, false if not



getResponseClass
----------------

.. function:: getResponseClass()


    Retrieve current response class

    :rtype: string 



getDispatchTable
----------------

.. function:: getDispatchTable()


    Retrieve dispatch table

    :rtype: array 



getFunctions
------------

.. function:: getFunctions()


    Returns a list of registered methods
    
    Returns an array of dispatchables (Zend\Server\Reflection\ReflectionFunction,
    ReflectionMethod, and ReflectionClass items).

    :rtype: array 



getSystem
---------

.. function:: getSystem()


    Retrieve system object

    :rtype: Server\System 



sendArgumentsToAllMethods
-------------------------

.. function:: sendArgumentsToAllMethods()


    Send arguments to all methods?
    
    If setClass() is used to add classes to the server, this flag defined
    how to handle arguments. If set to true, all methods including constructor
    will receive the arguments. If set to false, only constructor will receive the
    arguments



_fixType
--------

.. function:: _fixType()


    Map PHP type to XML-RPC type

    :param string: 

    :rtype: string 



handleRequest
-------------

.. function:: handleRequest()


    Handle an xmlrpc call (actual work)

    :param Request: 

    :rtype: Response 

    :throws: Server\Exception\RuntimeException Zend\XmlRpc\Server\Exceptions are thrown for internal errors; otherwise,
any other exception may be thrown by the callback



registerSystemMethods
---------------------

.. function:: registerSystemMethods()


    Register system methods with the server

    :rtype: void 



isSubclassOf
------------

.. function:: isSubclassOf()


    Checks if the object has this class as one of its parents


    :param string: 
    :param string: 

    :rtype: bool 



