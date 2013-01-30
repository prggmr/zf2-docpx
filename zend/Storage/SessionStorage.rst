.. Session/Storage/SessionStorage.php generated using docpx on 01/30/13 03:32am


Zend\\Session\\Storage\\SessionStorage
======================================

Session storage in $_SESSION

Replaces the $_SESSION superglobal with an ArrayObject that allows for
property access, metadata storage, locking, and immutability.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Sets the $_SESSION superglobal to an ArrayObject, maintaining previous
    values if any discovered.

    :param array|null: 
    :param int: 
    :param string: 



__destruct
----------

.. function:: __destruct()


    Destructor
    
    Resets $_SESSION superglobal to an array, by casting object using
    getArrayCopy().

    :rtype: void 



fromArray
---------

.. function:: fromArray()


    Load session object from an existing array
    
    Ensures $_SESSION is set to an instance of the object when complete.

    :param array: 

    :rtype: SessionStorage 



markImmutable
-------------

.. function:: markImmutable()


    Mark object as isImmutable

    :rtype: SessionStorage 



isImmutable
-----------

.. function:: isImmutable()


    Determine if this object is isImmutable

    :rtype: bool 



