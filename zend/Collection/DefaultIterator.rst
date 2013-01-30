.. Ldap/Collection/DefaultIterator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Ldap\\Collection\\DefaultIterator
=======================================

Zend\Ldap\Collection\DefaultIterator is the default collection iterator implementation
using ext/ldap

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.

    :param \Zend\Ldap\Ldap: 
    :param resource: 

    :throws \Zend\Ldap\Exception\LdapException: if no entries was found.

    :rtype: DefaultIterator 



__destruct
++++++++++

.. function:: __destruct()



close
+++++

.. function:: close()


    Closes the current result set

    :rtype: bool 



getLDAP
+++++++

.. function:: getLDAP()


    Gets the current LDAP connection.

    :rtype: \Zend\Ldap\Ldap 



setAttributeNameTreatment
+++++++++++++++++++++++++

.. function:: setAttributeNameTreatment()


    Sets the attribute name treatment.
    
    Can either be one of the following constants
    - Zend\Ldap\Collection\DefaultIterator::ATTRIBUTE_TO_LOWER
    - Zend\Ldap\Collection\DefaultIterator::ATTRIBUTE_TO_UPPER
    - Zend\Ldap\Collection\DefaultIterator::ATTRIBUTE_NATIVE
    or a valid callback accepting the attribute's name as it's only
    argument and returning the new attribute's name.

    :param integer|callable: 

    :rtype: DefaultIterator Provides a fluent interface



getAttributeNameTreatment
+++++++++++++++++++++++++

.. function:: getAttributeNameTreatment()


    Returns the currently set attribute name treatment

    :rtype: integer|callable 



count
+++++

.. function:: count()


    Returns the number of items in current result
    Implements Countable

    :rtype: int 



current
+++++++

.. function:: current()


    Return the current result item
    Implements Iterator

    :rtype: array|null 

    :throws: \Zend\Ldap\Exception\LdapException 



key
+++

.. function:: key()


    Return the result item key
    Implements Iterator


    :rtype: string|null 



next
++++

.. function:: next()


    Move forward to next result item
    Implements Iterator




rewind
++++++

.. function:: rewind()


    Rewind the Iterator to the first result item
    Implements Iterator




valid
+++++

.. function:: valid()


    Check if there is a current result item
    after calls to rewind() or next()
    Implements Iterator

    :rtype: bool 





Constants
---------

ATTRIBUTE_TO_LOWER
++++++++++++++++++

ATTRIBUTE_TO_UPPER
++++++++++++++++++

ATTRIBUTE_NATIVE
++++++++++++++++

