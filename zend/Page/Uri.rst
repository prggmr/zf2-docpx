.. Navigation/Page/Uri.php generated using docpx on 01/30/13 03:32am


Zend\\Navigation\\Page\\Uri
===========================

Represents a page that is defined by specifying a URI

Methods
+++++++

setUri
------

.. function:: setUri()


    Sets page URI

    :param string: page URI, must a string or null

    :rtype: Uri fluent interface, returns self

    :throws: Exception\InvalidArgumentException if $uri is invalid



getUri
------

.. function:: getUri()


    Returns URI

    :rtype: string 



getHref
-------

.. function:: getHref()


    Returns href for this page
    
    Includes the fragment identifier if it is set.

    :rtype: string 



toArray
-------

.. function:: toArray()


    Returns an array representation of the page

    :rtype: array 



