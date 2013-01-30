.. Cache/Storage/TaggableInterface.php generated using docpx on 01/30/13 03:26pm


Function
********

Zend\\Cache\\Storage\\setTags
=============================

.. function:: Zend\Cache\Storage\setTags()


    Set tags to an item by given key.
    An empty array will remove all tags.

    :param string: 
    :param string[]: 

    :rtype: bool 



Function
********

Zend\\Cache\\Storage\\getTags
=============================

.. function:: Zend\Cache\Storage\getTags()


    Get tags of an item by given key

    :param string: 

    :rtype: string[]|FALSE 



Function
********

Zend\\Cache\\Storage\\clearByTags
=================================

.. function:: Zend\Cache\Storage\clearByTags()


    Remove items matching given tags.
    
    If $disjunction only one of the given tags must match
    else all given tags must match.

    :param string[]: 
    :param bool: 

    :rtype: bool 



