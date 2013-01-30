.. Ldap/Collection.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Ldap\\Collection
======================

Zend\Ldap\Collection wraps a list of LDAP entries.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.

    :param Collection\DefaultIterator: 



__destruct
++++++++++

.. function:: __destruct()



close
+++++

.. function:: close()


    Closes the current result set

    :rtype: bool 



toArray
+++++++

.. function:: toArray()


    Get all entries as an array

    :rtype: array 



getFirst
++++++++

.. function:: getFirst()


    Get first entry

    :rtype: array 



getInnerIterator
++++++++++++++++

.. function:: getInnerIterator()


    Returns the underlying iterator

    :rtype: Collection\DefaultIterator 



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

    :throws: Exception\LdapException 



createEntry
+++++++++++

.. function:: createEntry()


    Creates the data structure for the given entry data

    :param array: 

    :rtype: array 



dn
++

.. function:: dn()


    Return the current result item DN

    :rtype: string|null 



key
+++

.. function:: key()


    Return the current result item key
    Implements Iterator

    :rtype: int|null 



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



