.. Server/Reflection/AbstractFunction.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Server\\Reflection\\AbstractFunction
==========================================

Function/Method Reflection

Decorates a ReflectionFunction. Allows setting and retrieving an alternate
'service' name (i.e., the name to be used when calling via a service),
setting and retrieving the description (originally set using the docblock
contents), retrieving the callback and callback type, retrieving additional
method invocation arguments, and retrieving the
method {@link \Zend\Server\Reflection\Prototype prototypes}.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param ReflectionFunctionAbstract: 
    :param null|string: 
    :param null|array: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\RuntimeException: 



addTree
+++++++

.. function:: addTree()


    Create signature node tree
    
    Recursive method to build the signature node tree. Increments through
    each array in {@link $sigParams}, adding every value of the next level
    to the current value (unless the current value is null).

    :param \Zend\Server\Reflection\Node: 
    :param int: 

    :rtype: void 



buildTree
+++++++++

.. function:: buildTree()


    Build the signature tree
    
    Builds a signature tree starting at the return values and descending
    through each method argument. Returns an array of
    {@link \Zend\Server\Reflection\Node}s.

    :rtype: array 



buildSignatures
+++++++++++++++

.. function:: buildSignatures()


    Build method signatures
    
    Builds method signatures using the array of return types and the array of
    parameters types

    :param array: Array of return types
    :param string: Return value description
    :param array: Array of arguments (each an array of types)
    :param array: Array of parameter descriptions

    :rtype: array 



reflect
+++++++

.. function:: reflect()


    Use code reflection to create method signatures
    
    Determines the method help/description text from the function DocBlock
    comment. Determines method signatures using a combination of
    ReflectionFunction and parsing of DocBlock @param and @return values.


    :rtype: array 



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



setNamespace
++++++++++++

.. function:: setNamespace()


    Set method's namespace

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



getNamespace
++++++++++++

.. function:: getNamespace()


    Return method's namespace

    :rtype: string 



setDescription
++++++++++++++

.. function:: setDescription()


    Set the description

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



getDescription
++++++++++++++

.. function:: getDescription()


    Retrieve the description

    :rtype: string 



getPrototypes
+++++++++++++

.. function:: getPrototypes()


    Retrieve all prototypes as array of
    {@link \Zend\Server\Reflection\Prototype}s

    :rtype: Prototype[] 



getInvokeArguments
++++++++++++++++++

.. function:: getInvokeArguments()


    Retrieve additional invocation arguments

    :rtype: array 



__wakeup
++++++++

.. function:: __wakeup()


    Wakeup from serialization
    
    Reflection needs explicit instantiation to work correctly. Re-instantiate
    reflection object on wakeup.

    :rtype: void 



