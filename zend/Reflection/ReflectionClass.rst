.. Server/Reflection/ReflectionClass.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Server\\Reflection\\ReflectionClass
=========================================

Class/Object reflection

Proxies calls to a ReflectionClass object, and decorates getMethods() by
creating its own list of {@link Zend_Server_Reflection_Method}s.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Create array of dispatchable methods, each a
    {@link Zend\Server\Reflection\ReflectionMethod}. Sets reflection object property.

    :param PhpReflectionClass: 
    :param string: 
    :param mixed: 



__call
++++++

.. function:: __call()


    Proxy reflection calls

    :param string: 
    :param array: 

    :throws Exception\BadMethodCallException: 

    :rtype: mixed 



__get
+++++

.. function:: __get()


    Retrieve configuration parameters
    
    Values are retrieved by key from {@link $config}. Returns null if no
    value found.

    :param string: 

    :rtype: mixed 



__set
+++++

.. function:: __set()


    Set configuration parameters
    
    Values are stored by $key in {@link $config}.

    :param string: 
    :param mixed: 

    :rtype: void 



getMethods
++++++++++

.. function:: getMethods()


    Return array of dispatchable {@link \Zend\Server\Reflection\Method}s.


    :rtype: array 



getNamespace
++++++++++++

.. function:: getNamespace()


    Get namespace for this class

    :rtype: string 



setNamespace
++++++++++++

.. function:: setNamespace()


    Set namespace for this class

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



__wakeup
++++++++

.. function:: __wakeup()


    Wakeup from serialization
    
    Reflection needs explicit instantiation to work correctly. Re-instantiate
    reflection object on wakeup.

    :rtype: void 



