.. /Cache/Storage/TaggableInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\setTags
=============================

.. function:: Zend\Cache\Storage\setTags()


    Set tags to an item by given key.
    An empty array will remove all tags.

    :param string $key: 
    :param string[] $tags: 

    :rtype: bool 



Zend\\Cache\\Storage\\getTags
=============================

.. function:: Zend\Cache\Storage\getTags()


    Get tags of an item by given key

    :param string $key: 

    :rtype: string[]|FALSE 



Zend\\Cache\\Storage\\clearByTags
=================================

.. function:: Zend\Cache\Storage\clearByTags()


    Remove items matching given tags.
    
    If $disjunction only one of the given tags must match
    else all given tags must match.

    :param string[] $tags: 
    :param bool $disjunction: 

    :rtype: bool 



