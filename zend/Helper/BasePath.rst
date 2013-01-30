.. View/Helper/BasePath.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\BasePath
============================

Helper for retrieving the base path.

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Returns site's base path, or file with base path prepended.
    
    $file is appended to the base path for simplicity.

    :param string|null: 

    :throws Exception\RuntimeException: 

    :rtype: string 



setBasePath
+++++++++++

.. function:: setBasePath()


    Set the base path.

    :param string: 

    :rtype: self 



