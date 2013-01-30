.. Stdlib/Hydrator/ObjectProperty.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Stdlib\\Hydrator\\ObjectProperty
======================================

Methods
-------

extract
+++++++

.. function:: extract()


    Extract values from an object
    
    Extracts the accessible non-static properties of the given $object.

    :param object: 

    :rtype: array 

    :throws: Exception\BadMethodCallException for a non-object $object



hydrate
+++++++

.. function:: hydrate()


    Hydrate an object by populating public properties
    
    Hydrates an object by setting public properties of the object.

    :param array: 
    :param object: 

    :rtype: object 

    :throws: Exception\BadMethodCallException for a non-object $object



