.. /Filter/RealPath.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\RealPath
**********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$existsOrOptions = true])


    Class constructor

    :param bool|Traversable $existsOrOptions: Options to set



setExists
---------

.. function:: setExists([$flag = true])


    Sets if the path has to exist
    TRUE when the path must exist
    FALSE when not existing paths can be given

    :param bool $flag: Path must exist

    :rtype: RealPath 



getExists
---------

.. function:: getExists()


    Returns true if the filtered path must exist

    :rtype: bool 



filter
------

.. function:: filter($value)


    Defined by Zend\Filter\FilterInterface
    
    Returns realpath($value)

    :param string $value: 

    :rtype: string 





