.. /Di/ServiceLocator/DependencyInjectorProxy.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\ServiceLocator\\DependencyInjectorProxy
*************************************************


Proxy used to analyze how instances are created by a given Di. Overrides Zend\Di\Di to produce artifacts that
represent the process used to instantiate a particular instance



Methods
=======

__construct
-----------

.. function:: __construct($di)


    @param Di $di



get
---

.. function:: get($name, [$params = false])


    {@inheritDoc}

    :rtype: GeneratorInstance 



newInstance
-----------

.. function:: newInstance($name, [$params = false, [$isShared = true]])


    {@inheritDoc}

    :rtype: GeneratorInstance 



createInstanceViaConstructor
----------------------------

.. function:: createInstanceViaConstructor($class, $params, [$alias = false])


    {@inheritDoc}

    :rtype: GeneratorInstance 



createInstanceViaCallback
-------------------------

.. function:: createInstanceViaCallback($callback, $params, $alias)


    {@inheritDoc}


    :rtype: GeneratorInstance 



handleInjectionMethodForObject
------------------------------

.. function:: handleInjectionMethodForObject($class, $method, $params, $alias, $isRequired)


    {@inheritDoc}



resolveAndCallInjectionMethodForInstance
----------------------------------------

.. function:: resolveAndCallInjectionMethodForInstance($instance, $method, $params, $alias, $methodIsRequired, [$methodClass = false])


    {@inheritDoc}



getClass
--------

.. function:: getClass($instance)


    {@inheritDoc}





