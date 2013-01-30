.. Mvc/Controller/AbstractRestfulController.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Controller\\AbstractRestfulController
================================================

Abstract RESTful controller

Methods
-------

create
++++++

.. function:: create()


    Create a new resource

    :param mixed: 

    :rtype: mixed 



delete
++++++

.. function:: delete()


    Delete an existing resource

    :param mixed: 

    :rtype: mixed 



deleteList
++++++++++

.. function:: deleteList()


    Delete the entire resource collection
    
    Not marked as abstract, as that would introduce a BC break
    (introduced in 2.1.0); instead, raises an exception if not implemented.

    :rtype: mixed 

    :throws: Exception\RuntimeException 



get
+++

.. function:: get()


    Return single resource

    :param mixed: 

    :rtype: mixed 



getList
+++++++

.. function:: getList()


    Return list of resources

    :rtype: mixed 



head
++++

.. function:: head()


    Retrieve HEAD metadata for the resource
    
    Not marked as abstract, as that would introduce a BC break
    (introduced in 2.1.0); instead, raises an exception if not implemented.

    :param null|mixed: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



options
+++++++

.. function:: options()


    Respond to the OPTIONS method
    
    Typically, set the Allow header with allowed HTTP methods, and
    return the response.
    
    Not marked as abstract, as that would introduce a BC break
    (introduced in 2.1.0); instead, raises an exception if not implemented.

    :rtype: mixed 

    :throws: Exception\RuntimeException 



patch
+++++

.. function:: patch()


    Respond to the PATCH method
    
    Not marked as abstract, as that would introduce a BC break
    (introduced in 2.1.0); instead, raises an exception if not implemented.

    :rtype: mixed 

    :throws: Exception\RuntimeException 



replaceList
+++++++++++

.. function:: replaceList()


    Replace an entire resource collection
    
    Not marked as abstract, as that would introduce a BC break
    (introduced in 2.1.0); instead, raises an exception if not implemented.

    :param mixed: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



update
++++++

.. function:: update()


    Update an existing resource

    :param mixed: 
    :param mixed: 

    :rtype: mixed 



notFoundAction
++++++++++++++

.. function:: notFoundAction()


    Basic functionality for when a page is not available

    :rtype: array 



dispatch
++++++++

.. function:: dispatch()


    Dispatch a request
    
    If the route match includes an "action" key, then this acts basically like
    a standard action controller. Otherwise, it introspects the HTTP method
    to determine how to handle the request, and which method to delegate to.

    :param Request: 
    :param null|Response: 

    :rtype: mixed|Response 

    :throws: Exception\InvalidArgumentException 



onDispatch
++++++++++

.. function:: onDispatch()


    Handle the request

    :param MvcEvent: 

    :rtype: mixed 

    :throws: Exception\DomainException if no route matches in event or invalid HTTP method



processPostData
+++++++++++++++

.. function:: processPostData()


    Process post data and call create

    :param Request: 

    :rtype: mixed 



requestHasContentType
+++++++++++++++++++++

.. function:: requestHasContentType()


    Check if request has certain content type

    :rtype: boolean 



addHttpMethodHandler
++++++++++++++++++++

.. function:: addHttpMethodHandler()


    Register a handler for a custom HTTP method
    
    This method allows you to handle arbitrary HTTP method types, mapping
    them to callables. Typically, these will be methods of the controller
    instance: e.g., array($this, 'foobar'). The typical place to register
    these is in your constructor.
    
    Additionally, as this map is checked prior to testing the standard HTTP
    methods, this is a way to override what methods will handle the standard
    HTTP methods. However, if you do this, you will have to retrieve the
    identifier and any request content manually.
    
    Callbacks will be passed the current MvcEvent instance.
    
    To retrieve the identifier, you can use "$id =
    $this->getIdentifier($routeMatch, $request)",
    passing the appropriate objects.
    
    To retrive the body content data, use "$data = $this->processBodyContent($request)";
    that method will return a string, array, or, in the case of JSON, an object.

    :param string: 
    :param Callable: 

    :rtype: AbstractRestfulController 



getIdentifier
+++++++++++++

.. function:: getIdentifier()


    Retrieve the identifier, if any
    
    Attempts to see if an identifier was passed in either the URI or the
    query string, returning if if found. Otherwise, returns a boolean false.

    :param \Zend\Mvc\Router\RouteMatch: 
    :param Request: 

    :rtype: false|mixed 



processBodyContent
++++++++++++++++++

.. function:: processBodyContent()


    Process the raw body content
    
    If the content-type indicates a JSON payload, the payload is immediately
    decoded and the data returned. Otherwise, the data is passed to
    parse_str(). If that function returns a single-member array with a key
    of "0", the method assumes that we have non-urlencoded content and
    returns the raw content; otherwise, the array created is returned.

    :param mixed: 

    :rtype: object|string|array 





Constants
---------

CONTENT_TYPE_JSON
+++++++++++++++++

