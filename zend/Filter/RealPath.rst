.. Filter/RealPath.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\RealPath
======================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor

    :param bool|Traversable: Options to set



setExists
+++++++++

.. function:: setExists()


    Sets if the path has to exist
    TRUE when the path must exist
    FALSE when not existing paths can be given

    :param bool: Path must exist

    :rtype: RealPath 



getExists
+++++++++

.. function:: getExists()


    Returns true if the filtered path must exist

    :rtype: bool 



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\FilterInterface
    
    Returns realpath($value)

    :param string: 

    :rtype: string 



