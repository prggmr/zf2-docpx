.. Stdlib/Hydrator/ClassMethods.php generated using docpx on 01/30/13 03:32am


Zend\\Stdlib\\Hydrator\\ClassMethods
====================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Define if extract values will use camel case or name with underscore

    :param bool|array: 



setOptions
----------

.. function:: setOptions()


    @param  array|\Traversable                 $options

    :rtype: ClassMethods 

    :throws: Exception\InvalidArgumentException 



setUnderscoreSeparatedKeys
--------------------------

.. function:: setUnderscoreSeparatedKeys()


    @param  boolean      $underscoreSeparatedKeys

    :rtype: ClassMethods 



getUnderscoreSeparatedKeys
--------------------------

.. function:: getUnderscoreSeparatedKeys()


    @return boolean



extract
-------

.. function:: extract()


    Extract values from an object with class methods
    
    Extracts the getter/setter of the given $object.

    :param object: 

    :rtype: array 

    :throws: Exception\BadMethodCallException for a non-object $object



hydrate
-------

.. function:: hydrate()


    Hydrate an object by populating getter/setter methods
    
    Hydrates an object by getter/setter methods of the object.

    :param array: 
    :param object: 

    :rtype: object 

    :throws: Exception\BadMethodCallException for a non-object $object



