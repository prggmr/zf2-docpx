.. /Cache/Pattern/ClassCache.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Pattern\\ClassCache
********************************


@category   Zend



Methods
=======

setOptions
----------

.. function:: setOptions($options)


    Set options

    :param PatternOptions $options: 

    :rtype: ClassCache 

    :throws: Exception\InvalidArgumentException if missing 'class' or 'storage' options



call
----

.. function:: call($method, [$args = false])


    Call and cache a class method

    :param string $method: Method name to call
    :param array $args: Method arguments

    :rtype: mixed 

    :throws: Exception\RuntimeException 
    :throws: \Exception 



generateKey
-----------

.. function:: generateKey($method, [$args = false])


    Generate a unique key in base of a key representing the callback part
    and a key representing the arguments part.

    :param string $method: The method
    :param array $args: Callback arguments

    :rtype: string 

    :throws: Exception\RuntimeException 



generateCallbackKey
-------------------

.. function:: generateCallbackKey($callback, $args)


    Generate a unique key in base of a key representing the callback part
    and a key representing the arguments part.

    :param callable $callback: A valid callback
    :param array $args: Callback arguments

    :rtype: string 

    :throws: Exception\RuntimeException 



__call
------

.. function:: __call($method, $args)


    Calling a method of the entity.

    :param string $method: Method name to call
    :param array $args: Method arguments

    :rtype: mixed 

    :throws: Exception\RuntimeException 
    :throws: \Exception 



__set
-----

.. function:: __set($name, $value)


    Set a static property

    :param string $name: 
    :param mixed $value: 

    :rtype: void 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: h h



__get
-----

.. function:: __get($name)


    Get a static property

    :param string $name: 

    :rtype: mixed 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: h h



__isset
-------

.. function:: __isset($name)


    Is a static property exists.

    :param string $name: 

    :rtype: bool 



__unset
-------

.. function:: __unset($name)


    Unset a static property

    :param string $name: 

    :rtype: void 





