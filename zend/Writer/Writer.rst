.. Feed/Writer/Writer.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\Writer\\Writer
==========================



Methods
-------

setExtensionManager
+++++++++++++++++++

.. function:: setExtensionManager()


    Set plugin loader for use with Extensions

    :param ExtensionManager: 



getExtensionManager
+++++++++++++++++++

.. function:: getExtensionManager()


    Get plugin manager for use with Extensions

    :rtype: ExtensionManager 



registerExtension
+++++++++++++++++

.. function:: registerExtension()


    Register an Extension by name

    :param string: 

    :rtype: void 

    :throws: Exception\RuntimeException if unable to resolve Extension class



isRegistered
++++++++++++

.. function:: isRegistered()


    Is a given named Extension registered?

    :param string: 

    :rtype: bool 



getExtensions
+++++++++++++

.. function:: getExtensions()


    Get a list of extensions

    :rtype: array 



reset
+++++

.. function:: reset()


    Reset class state to defaults

    :rtype: void 



registerCoreExtensions
++++++++++++++++++++++

.. function:: registerCoreExtensions()


    Register core (default) extensions

    :rtype: void 



lcfirst
+++++++

.. function:: lcfirst()





Constants
---------

NAMESPACE_ATOM_03
+++++++++++++++++

Namespace constants

NAMESPACE_ATOM_10
+++++++++++++++++

NAMESPACE_RDF
+++++++++++++

NAMESPACE_RSS_090
+++++++++++++++++

NAMESPACE_RSS_10
++++++++++++++++

TYPE_ANY
++++++++

Feed type constants

TYPE_ATOM_03
++++++++++++

TYPE_ATOM_10
++++++++++++

TYPE_ATOM_ANY
+++++++++++++

TYPE_RSS_090
++++++++++++

TYPE_RSS_091
++++++++++++

TYPE_RSS_091_NETSCAPE
+++++++++++++++++++++

TYPE_RSS_091_USERLAND
+++++++++++++++++++++

TYPE_RSS_092
++++++++++++

TYPE_RSS_093
++++++++++++

TYPE_RSS_094
++++++++++++

TYPE_RSS_10
+++++++++++

TYPE_RSS_20
+++++++++++

TYPE_RSS_ANY
++++++++++++

