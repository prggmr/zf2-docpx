.. Cache/Pattern/ClassCache.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Pattern\\ClassCache
================================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Set options

    :param PatternOptions: 

    :rtype: ClassCache 

    :throws: Exception\InvalidArgumentException if missing 'class' or 'storage' options



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


    Calling a method of the entity.

    :param string: Method name to call
    :param array: Method arguments

    :rtype: mixed 

    :throws: Exception\RuntimeException 
    :throws: \Exception 



__set
+++++

.. function:: __set()


    Set a static property

    :param string: 
    :param mixed: 

    :rtype: void 

    :see:  



__get
+++++

.. function:: __get()


    Get a static property

    :param string: 

    :rtype: mixed 

    :see:  



__isset
+++++++

.. function:: __isset()


    Is a static property exists.

    :param string: 

    :rtype: bool 



__unset
+++++++

.. function:: __unset()


    Unset a static property

    :param string: 

    :rtype: void 



