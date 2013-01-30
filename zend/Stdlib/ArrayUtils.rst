.. Stdlib/ArrayUtils.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Stdlib\\ArrayUtils
========================

Utility class for testing and manipulation of PHP arrays.

Declared abstract, as we have no need for instantiation.

Methods
-------

hasStringKeys
+++++++++++++

.. function:: hasStringKeys()


    Test whether an array contains one or more string keys

    :param mixed: 
    :param bool: Should an empty array() return true

    :rtype: bool 



hasIntegerKeys
++++++++++++++

.. function:: hasIntegerKeys()


    Test whether an array contains one or more integer keys

    :param mixed: 
    :param bool: Should an empty array() return true

    :rtype: bool 



hasNumericKeys
++++++++++++++

.. function:: hasNumericKeys()


    Test whether an array contains one or more numeric keys.
    
    A numeric key can be one of the following:
    - an integer 1,
    - a string with a number '20'
    - a string with negative number: '-1000'
    - a float: 2.2120, -78.150999
    - a string with float:  '4000.99999', '-10.10'

    :param mixed: 
    :param bool: Should an empty array() return true

    :rtype: bool 



isList
++++++

.. function:: isList()


    Test whether an array is a list
    
    A list is a collection of values assigned to continuous integer keys
    starting at 0 and ending at count() - 1.
    
    For example:
    <code>
    $list = array( 'a','b','c','d' );
    $list = array(
        0 => 'foo',
        1 => 'bar',
        2 => array( 'foo' => 'baz' ),
    );
    </code>

    :param mixed: 
    :param bool: Is an empty list a valid list?

    :rtype: bool 



isHashTable
+++++++++++

.. function:: isHashTable()


    Test whether an array is a hash table.
    
    An array is a hash table if:
    
    1. Contains one or more non-integer keys, or
    2. Integer keys are non-continuous or misaligned (not starting with 0)
    
    For example:
    <code>
    $hash = array(
        'foo' => 15,
        'bar' => false,
    );
    $hash = array(
        1995  => 'Birth of PHP',
        2009  => 'PHP 5.3.0',
        2012  => 'PHP 5.4.0',
    );
    $hash = array(
        'formElement,
        'options' => array( 'debug' => true ),
    );
    </code>

    :param mixed: 
    :param bool: Is an empty array() a valid hash table?

    :rtype: bool 



inArray
+++++++

.. function:: inArray()


    Checks if a value exists in an array.
    
    Due to "foo" == 0 === TRUE with in_array when strict = false, an option
    has been added to prevent this. When $strict = 0/false, the most secure
    non-strict check is implemented. if $strict = -1, the default in_array
    non-strict behaviour is used.

    :param mixed: 
    :param array: 
    :param int|bool: 

    :rtype: bool 



iteratorToArray
+++++++++++++++

.. function:: iteratorToArray()


    Convert an iterator to an array.
    
    Converts an iterator to an array. The $recursive flag, on by default,
    hints whether or not you want to do so recursively.

    :param array|Traversable: The array or Traversable object to convert
    :param bool: Recursively check all nested structures

    :throws Exception\InvalidArgumentException: if $iterator is not an array or a Traversable object

    :rtype: array 



merge
+++++

.. function:: merge()


    Merge two arrays together.
    
    If an integer key exists in both arrays, the value from the second array
    will be appended the the first array. If both values are arrays, they
    are merged together, else the value of the second array overwrites the
    one of the first array.

    :param array: 
    :param array: 

    :rtype: array 



