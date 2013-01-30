.. Stdlib/Hydrator/Reflection.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Stdlib\\Hydrator\\Reflection
==================================

Methods
-------

extract
+++++++

.. function:: extract()


    Extract values from an object

    :param object: 

    :rtype: array 



hydrate
+++++++

.. function:: hydrate()


    Hydrate $object with the provided $data.

    :param array: 
    :param object: 

    :rtype: object 



getReflProperties
+++++++++++++++++

.. function:: getReflProperties()


    Get a reflection properties from in-memory cache and lazy-load if
    class has not been loaded.


    :param string|object: 

    :throws Exception\InvalidArgumentException: 

    :rtype: array 



