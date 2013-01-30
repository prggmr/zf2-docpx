.. Ldap/Node/Schema/AbstractItem.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Ldap\\Node\\Schema\\AbstractItem
======================================

This class provides a base implementation for managing schema
items like objectClass and attributeType.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.

    :param array: 



setData
+++++++

.. function:: setData()


    Sets the data

    :param array: 

    :rtype: AbstractItem Provides a fluid interface



getData
+++++++

.. function:: getData()


    Gets the data

    :rtype: array 



__get
+++++

.. function:: __get()


    Gets a specific attribute from this item

    :param string: 

    :rtype: mixed 



__isset
+++++++

.. function:: __isset()


    Checks whether a specific attribute exists.

    :param string: 

    :rtype: bool 



offsetSet
+++++++++

.. function:: offsetSet()


    Always throws Zend\Ldap\Exception\BadMethodCallException
    Implements ArrayAccess.
    
    This method is needed for a full implementation of ArrayAccess

    :param string: 
    :param mixed: 

    :throws \Zend\Ldap\Exception\BadMethodCallException: 



offsetGet
+++++++++

.. function:: offsetGet()


    Gets a specific attribute from this item

    :param string: 

    :rtype: mixed 



offsetUnset
+++++++++++

.. function:: offsetUnset()


    Always throws Zend\Ldap\Exception\BadMethodCallException
    Implements ArrayAccess.
    
    This method is needed for a full implementation of ArrayAccess

    :param string: 

    :throws \Zend\Ldap\Exception\BadMethodCallException: 



offsetExists
++++++++++++

.. function:: offsetExists()


    Checks whether a specific attribute exists.

    :param string: 

    :rtype: bool 



count
+++++

.. function:: count()


    Returns the number of attributes.
    Implements Countable

    :rtype: int 



