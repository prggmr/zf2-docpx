.. /Cache/Pattern/ObjectCache.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Pattern\\ObjectCache
*********************************


@category   Zend



Methods
=======

setOptions
----------

.. function:: setOptions($options)


    Set options

    :param PatternOptions $options: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



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

.. function:: generateCallbackKey($callback, [$args = false])


    Generate a unique key in base of a key representing the callback part
    and a key representing the arguments part.

    :param callable $callback: A valid callback
    :param array $args: Callback arguments

    :rtype: string 

    :throws: Exception\RuntimeException 



__call
------

.. function:: __call($method, $args)


    Class method call handler

    :param string $method: Method name to call
    :param array $args: Method arguments

    :rtype: mixed 

    :throws: Exception\RuntimeException 
    :throws: \Exception 



__set
-----

.. function:: __set($name, $value)


    Writing data to properties.
    
    NOTE:
    Magic properties will be cached too if the option cacheMagicProperties
    is enabled and the property doesn't exist in real. If so it calls __set
    and removes cached data of previous __get and __isset calls.

    :param string $name: 
    :param mixed $value: 

    :rtype: void 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: h h



__get
-----

.. function:: __get($name)


    Reading data from properties.
    
    NOTE:
    Magic properties will be cached too if the option cacheMagicProperties
    is enabled and the property doesn't exist in real. If so it calls __get.

    :param string $name: 

    :rtype: mixed 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: h h



__isset
-------

.. function:: __isset($name)


    Checking existing properties.
    
    NOTE:
    Magic properties will be cached too if the option cacheMagicProperties
    is enabled and the property doesn't exist in real. If so it calls __get.

    :param string $name: 

    :rtype: bool 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: h h



__unset
-------

.. function:: __unset($name)


    Unseting a property.
    
    NOTE:
    Magic properties will be cached too if the option cacheMagicProperties
    is enabled and the property doesn't exist in real. If so it removes
    previous cached __isset and __get calls.

    :param string $name: 

    :rtype: void 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: h h



__toString
----------

.. function:: __toString()


    Handle casting to string

    :rtype: string 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: h h



__invoke
--------

.. function:: __invoke()


    Handle invoke calls

    :rtype: mixed 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: h h





