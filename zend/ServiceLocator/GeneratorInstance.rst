.. Di/ServiceLocator/GeneratorInstance.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Di\\ServiceLocator\\GeneratorInstance
===========================================

Container for methods and parameters used by by Di to create a particular instance

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param string|null $class

    :param string|null: 
    :param mixed: 
    :param array: 



getName
+++++++

.. function:: getName()


    Retrieves the best available name for this instance (instance alias first then class name)

    :rtype: string|null 



getClass
++++++++

.. function:: getClass()


    Class of the instance. Null if class is unclear (such as when the instance is produced by a callback)

    :rtype: string|null 



getAlias
++++++++

.. function:: getAlias()


    Alias for the instance (if any)

    :rtype: string|null 



setClass
++++++++

.. function:: setClass()


    Set class name
    
    In the case of an instance created via a callback, we need to set the
    class name after creating the generator instance.

    :param string: 

    :rtype: GeneratorInstance 



setAlias
++++++++

.. function:: setAlias()


    Set instance alias

    :param string: 

    :rtype: GeneratorInstance 



getConstructor
++++++++++++++

.. function:: getConstructor()


    Get instantiator

    :rtype: mixed constructor method name or callable responsible for generating instance



getParams
+++++++++

.. function:: getParams()


    Parameters passed to the instantiator as an ordered list of parameters. Each parameter that refers to another
    instance fetched recursively is a GeneratorInstance itself

    :rtype: array 



setMethods
++++++++++

.. function:: setMethods()


    Set methods

    :param array: 

    :rtype: GeneratorInstance 



addMethod
+++++++++

.. function:: addMethod()


    Add a method called on the instance

    :param $method: 

    :rtype: GeneratorInstance 



getMethods
++++++++++

.. function:: getMethods()


    Retrieves a list of methods that are called on the instance in their call order. Each returned element has form
    array('method' => 'methodName', 'params' => array( ... ordered list of call parameters ... ), where every call
    parameter that is a recursively fetched instance is a GeneratorInstance itself

    :rtype: array 



setShared
+++++++++

.. function:: setShared()


    @param bool $shared



isShared
++++++++

.. function:: isShared()


    Retrieves whether the instance is shared or not

    :rtype: bool 



