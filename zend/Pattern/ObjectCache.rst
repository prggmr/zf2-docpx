.. Cache/Pattern/ObjectCache.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Pattern\\ObjectCache
=================================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Set options

    :param PatternOptions: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



call
++++

.. function:: call()


    Call and cache a class method

    :param string: Method name to call
    :param array: Method arguments

    :rtype: mixed 

    :throws: Exception\RuntimeException 
    :throws: \Exception 



generateKey
+++++++++++

.. function:: generateKey()


    Generate a unique key in base of a key representing the callback part
    and a key representing the arguments part.

    :param string: The method
    :param array: Callback arguments

    :rtype: string 

    :throws: Exception\RuntimeException 



generateCallbackKey
+++++++++++++++++++

.. function:: generateCallbackKey()


    Generate a unique key in base of a key representing the callback part
    and a key representing the arguments part.

    :param callable: A valid callback
    :param array: Callback arguments

    :rtype: string 

    :throws: Exception\RuntimeException 



__call
++++++

.. function:: __call()


    Class method call handler

    :param string: Method name to call
    :param array: Method arguments

    :rtype: mixed 

    :throws: Exception\RuntimeException 
    :throws: \Exception 



__set
+++++

.. function:: __set()


    Writing data to properties.
    
    NOTE:
    Magic properties will be cached too if the option cacheMagicProperties
    is enabled and the property doesn't exist in real. If so it calls __set
    and removes cached data of previous __get and __isset calls.

    :param string: 
    :param mixed: 

    :rtype: void 

    :see:  



__get
+++++

.. function:: __get()


    Reading data from properties.
    
    NOTE:
    Magic properties will be cached too if the option cacheMagicProperties
    is enabled and the property doesn't exist in real. If so it calls __get.

    :param string: 

    :rtype: mixed 

    :see:  



__isset
+++++++

.. function:: __isset()


    Checking existing properties.
    
    NOTE:
    Magic properties will be cached too if the option cacheMagicProperties
    is enabled and the property doesn't exist in real. If so it calls __get.

    :param string: 

    :rtype: bool 

    :see:  



__unset
+++++++

.. function:: __unset()


    Unseting a property.
    
    NOTE:
    Magic properties will be cached too if the option cacheMagicProperties
    is enabled and the property doesn't exist in real. If so it removes
    previous cached __isset and __get calls.

    :param string: 

    :rtype: void 

    :see:  



__toString
++++++++++

.. function:: __toString()


    Handle casting to string

    :rtype: string 

    :see:  



__invoke
++++++++

.. function:: __invoke()


    Handle invoke calls

    :rtype: mixed 

    :see:  



