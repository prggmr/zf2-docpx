.. Stdlib/Parameters.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Stdlib\\Parameters
========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Enforces that we have an array, and enforces parameter access to array
    elements.

    :param array: 



fromArray
+++++++++

.. function:: fromArray()


    Populate from native PHP array

    :param array: 

    :rtype: void 



fromString
++++++++++

.. function:: fromString()


    Populate from query string

    :param string: 

    :rtype: void 



toArray
+++++++

.. function:: toArray()


    Serialize to native PHP array

    :rtype: array 



toString
++++++++

.. function:: toString()


    Serialize to query string

    :rtype: string 



offsetGet
+++++++++

.. function:: offsetGet()


    Retrieve by key
    
    Returns null if the key does not exist.

    :param string: 

    :rtype: mixed 



get
+++

.. function:: get()


    @param string $name

    :param mixed: optional default value

    :rtype: mixed 



set
+++

.. function:: set()


    @param string $name

    :param mixed: 

    :rtype: Parameters 



