.. Stdlib/Hydrator/Strategy/ClosureStrategy.php generated using docpx on 01/30/13 03:32am


Zend\\Stdlib\\Hydrator\\Strategy\\ClosureStrategy
=================================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    You can describe how your values will extract and hydrate, like this:
    $hydrator->addStrategy('category', new ClosureStrategy(
        function(Category $value) {
            return (int)$value->id;
        },
        function($value) {
            return new Category((int)$value);
        }
    ));

    :param callable: - anonymous function, that extract values
from object
    :param callable: - anonymous function, that hydrate values
into object



extract
-------

.. function:: extract()


    Converts the given value so that it can be extracted by the hydrator.

    :param mixed: The original value.

    :rtype: mixed Returns the value that should be extracted.



hydrate
-------

.. function:: hydrate()


    Converts the given value so that it can be hydrated by the hydrator.

    :param mixed: The original value.

    :rtype: mixed Returns the value that should be hydrated.



