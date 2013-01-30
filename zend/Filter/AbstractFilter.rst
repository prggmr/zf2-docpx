.. Ldap/Filter/AbstractFilter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Ldap\\Filter\\AbstractFilter
==================================

Zend\Ldap\Filter\AbstractFilter provides a base implementation for filters.

Methods
-------

toString
++++++++

.. function:: toString()


    Returns a string representation of the filter.

    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    Returns a string representation of the filter.


    :rtype: string 



negate
++++++

.. function:: negate()


    Negates the filter.

    :rtype: AbstractFilter 



addAnd
++++++

.. function:: addAnd()


    Creates an 'and' filter.

    :param AbstractFilter: 

    :rtype: AndFilter 



addOr
+++++

.. function:: addOr()


    Creates an 'or' filter.

    :param AbstractFilter: 

    :rtype: OrFilter 



escapeValue
+++++++++++

.. function:: escapeValue()


    Escapes the given VALUES according to RFC 2254 so that they can be safely used in LDAP filters.
    
    Any control characters with an ACII code < 32 as well as the characters with special meaning in
    LDAP filters "*", "(", ")", and "\" (the backslash) are converted into the representation of a
    backslash followed by two hex digits representing the hexadecimal value of the character.




    :param string|array: Array of values to escape

    :rtype: array Array $values, but escaped



unescapeValue
+++++++++++++

.. function:: unescapeValue()


    Undoes the conversion done by {@link escapeValue()}.
    
    Converts any sequences of a backslash followed by two hex digits into the corresponding character.




    :param string|array: Array of values to escape

    :rtype: array Array $values, but unescaped



