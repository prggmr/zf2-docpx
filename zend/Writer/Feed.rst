.. Feed/Writer/Feed.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\Writer\\Feed
========================



Methods
-------

createEntry
+++++++++++

.. function:: createEntry()


    Creates a new Zend\Feed\Writer\Entry data container for use. This is NOT
    added to the current feed automatically, but is necessary to create a
    container with some initial values preset based on the current feed data.

    :rtype: \Zend\Feed\Writer\Entry 



addTombstone
++++++++++++

.. function:: addTombstone()


    Appends a Zend\Feed\Writer\Deleted object representing a new entry tombstone
    to the feed data container's internal group of entries.

    :param Deleted: 

    :rtype: void 



createTombstone
+++++++++++++++

.. function:: createTombstone()


    Creates a new Zend\Feed\Writer\Deleted data container for use. This is NOT
    added to the current feed automatically, but is necessary to create a
    container with some initial values preset based on the current feed data.

    :rtype: Deleted 



addEntry
++++++++

.. function:: addEntry()


    Appends a Zend\Feed\Writer\Entry object representing a new entry/item
    the feed data container's internal group of entries.

    :param Entry: 

    :rtype: Feed 



removeEntry
+++++++++++

.. function:: removeEntry()


    Removes a specific indexed entry from the internal queue. Entries must be
    added to a feed container in order to be indexed.

    :param int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Feed 



getEntry
++++++++

.. function:: getEntry()


    Retrieve a specific indexed entry from the internal queue. Entries must be
    added to a feed container in order to be indexed.

    :param int: 

    :throws Exception\InvalidArgumentException: 



orderByDate
+++++++++++

.. function:: orderByDate()


    Orders all indexed entries by date, thus offering date ordered readable
    content where a parser (or Homo Sapien) ignores the generic rule that
    XML element order is irrelevant and has no intrinsic meaning.
    
    Using this method will alter the original indexation.

    :rtype: Feed 



count
+++++

.. function:: count()


    Get the number of feed entries.
    Required by the Iterator interface.

    :rtype: int 



current
+++++++

.. function:: current()


    Return the current entry

    :rtype: Entry 



key
+++

.. function:: key()


    Return the current feed key

    :rtype: mixed 



next
++++

.. function:: next()


    Move the feed pointer forward

    :rtype: void 



rewind
++++++

.. function:: rewind()


    Reset the pointer in the feed object

    :rtype: void 



valid
+++++

.. function:: valid()


    Check to see if the iterator is still valid

    :rtype: bool 



export
++++++

.. function:: export()


    Attempt to build and return the feed resulting from the data set

    :param string: The feed type "rss" or "atom" to export as
    :param bool: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



