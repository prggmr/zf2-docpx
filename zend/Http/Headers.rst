.. Http/Headers.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Http\\Headers
===================

Basic HTTP headers collection functionality
Handles aggregation of headers

Methods
-------

fromString
++++++++++

.. function:: fromString()


    Populates headers from string representation
    
    Parses a string for headers, and aggregates them, in order, in the
    current instance, primarily as strings until they are needed (they
    will be lazy loaded)

    :param string: 

    :rtype: Headers 

    :throws: Exception\RuntimeException 



setPluginClassLoader
++++++++++++++++++++

.. function:: setPluginClassLoader()


    Set an alternate implementation for the PluginClassLoader

    :param \Zend\Loader\PluginClassLocator: 

    :rtype: Headers 



getPluginClassLoader
++++++++++++++++++++

.. function:: getPluginClassLoader()


    Return an instance of a PluginClassLocator, lazyload and inject map if necessary

    :rtype: PluginClassLocator 



addHeaders
++++++++++

.. function:: addHeaders()


    Add many headers at once
    
    Expects an array (or Traversable object) of type/value pairs.

    :param array|Traversable: 

    :rtype: Headers 

    :throws: Exception\InvalidArgumentException 



addHeaderLine
+++++++++++++

.. function:: addHeaderLine()


    Add a raw header line, either in name => value, or as a single string 'name: value'
    
    This method allows for lazy-loading in that the parsing and instantiation of Header object
    will be delayed until they are retrieved by either get() or current()


    :param string: 
    :param string: optional

    :rtype: Headers 



addHeader
+++++++++

.. function:: addHeader()


    Add a Header to this container, for raw values @see addHeaderLine() and addHeaders()

    :param Header\HeaderInterface: 

    :rtype: Headers 



removeHeader
++++++++++++

.. function:: removeHeader()


    Remove a Header from the container

    :param Header\HeaderInterface: 

    :rtype: bool 



clearHeaders
++++++++++++

.. function:: clearHeaders()


    Clear all headers
    
    Removes all headers from queue

    :rtype: Headers 



get
+++

.. function:: get()


    Get all headers of a certain name/type

    :param string: 

    :rtype: bool|Header\HeaderInterface|ArrayIterator 



has
+++

.. function:: has()


    Test for existence of a type of header

    :param string: 

    :rtype: bool 



next
++++

.. function:: next()


    Advance the pointer for this object as an interator

    :rtype: void 



key
+++

.. function:: key()


    Return the current key for this object as an iterator

    :rtype: mixed 



valid
+++++

.. function:: valid()


    Is this iterator still valid?

    :rtype: bool 



rewind
++++++

.. function:: rewind()


    Reset the internal pointer for this object as an iterator

    :rtype: void 



current
+++++++

.. function:: current()


    Return the current value for this iterator, lazy loading it if need be

    :rtype: array|Header\HeaderInterface 



count
+++++

.. function:: count()


    Return the number of headers in this contain, if all headers have not been parsed, actual count could
    increase if MultipleHeader objects exist in the Request/Response.  If you need an exact count, iterate

    :rtype: int count of currently known headers



toString
++++++++

.. function:: toString()


    Render all headers at once
    
    This method handles the normal iteration of headers; it is up to the
    concrete classes to prepend with the appropriate status/request line.

    :rtype: string 



toArray
+++++++

.. function:: toArray()


    Return the headers container as an array


    :rtype: array 



forceLoading
++++++++++++

.. function:: forceLoading()


    By calling this, it will force parsing and loading of all headers, after this count() will be accurate

    :rtype: bool 



lazyLoadHeader
++++++++++++++

.. function:: lazyLoadHeader()


    @param $index

    :rtype: mixed|void 



createKey
+++++++++

.. function:: createKey()


    Create array key from header name

    :param string: 

    :rtype: string 



