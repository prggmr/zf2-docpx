.. View/Resolver/TemplateMapResolver.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Resolver\\TemplateMapResolver
=========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Instantiate and optionally populate template map.

    :param array|Traversable: 



getIterator
+++++++++++

.. function:: getIterator()


    IteratorAggregate: return internal iterator

    :rtype: Traversable 



setMap
++++++

.. function:: setMap()


    Set (overwrite) template map
    
    Maps should be arrays or Traversable objects with name => path pairs

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: TemplateMapResolver 



add
+++

.. function:: add()


    Add an entry to the map

    :param string|array|Traversable: 
    :param null|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: TemplateMapResolver 



merge
+++++

.. function:: merge()


    Merge internal map with provided map

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: TemplateMapResolver 



has
+++

.. function:: has()


    Does the resolver contain an entry for the given name?

    :param string: 

    :rtype: bool 



get
+++

.. function:: get()


    Retrieve a template path by name

    :param string: 

    :rtype: false|string 

    :throws: Exception\DomainException if no entry exists



getMap
++++++

.. function:: getMap()


    Retrieve the template map

    :rtype: array 



resolve
+++++++

.. function:: resolve()


    Resolve a template/pattern name to a resource the renderer can consume

    :param string: 
    :param null|Renderer: 

    :rtype: string 



