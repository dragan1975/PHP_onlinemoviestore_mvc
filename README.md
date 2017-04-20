# PHP_onlinemoviestore_mvc
-I have created a router in the index.php which presents the entry point to
 the application.
-Controller class is abstract and is extended by a controller that 
 can ne instatiated and used for controlling a site.
-Controller class is the engine of the system. Its loadview method is inherited
 by its child class. The method controlles the way the views are loaded.
-the methods of the controller that extends the main one will load the views.

-layout provides the main view of of the site and each individual view is then 
 added as a sub-view. 

-The whole application is structured in MVC pattern.
-controller folder contains controllers, view folder views etc.
-model folder contains the classes like System (active record pattern),
 Database (singleton) for connection.
-classes Movie, User, Rent extend System class and provide names of table 
 and id field through their respective static fields.

-The system has not incorporated the Session class (which I have used in 
 the other project PHP_onlinemoviestore) but it will once it has been finished.  
