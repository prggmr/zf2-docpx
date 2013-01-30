.. Mvc/Controller/Plugin/Params.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Controller\\Plugin\\Params
=====================================

Methods
+++++++

__invoke
--------

.. function:: __invoke()


    Grabs a param from route match by default.

    :param string: 
    :param mixed: 

    :rtype: mixed 



fromFiles
---------

.. function:: fromFiles()


    Return all files or a single file.

    :param string: File name to retrieve, or null to get all.
    :param mixed: Default value to use when the file is missing.

    :rtype: array|\ArrayAccess|null 



fromHeader
----------

.. function:: fromHeader()


    Return all header parameters or a single header parameter.

    :param string: Header name to retrieve, or null to get all.
    :param mixed: Default value to use when the requested header is missing.

    :rtype: null|\Zend\Http\Header\HeaderInterface 



fromPost
--------

.. function:: fromPost()


    Return all post parameters or a single post parameter.

    :param string: Parameter name to retrieve, or null to get all.
    :param mixed: Default value to use when the parameter is missing.

    :rtype: mixed 



fromQuery
---------

.. function:: fromQuery()


    Return all query parameters or a single query parameter.

    :param string: Parameter name to retrieve, or null to get all.
    :param mixed: Default value to use when the parameter is missing.

    :rtype: mixed 



fromRoute
---------

.. function:: fromRoute()


    Return all route parameters or a single route parameter.

    :param string: Parameter name to retrieve, or null to get all.
    :param mixed: Default value to use when the parameter is missing.

    :rtype: mixed 

    :throws: RuntimeException 



