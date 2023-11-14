# Laravel Learnings...

    Laravel is an php web framework to develop an application which provide integrated
service of routing, migrating, validating, queuing for an modern application. It is 
an open source application to develop software development lifecycle. To provide more
security and make efficient to build the application.

    To Run: php artisan Serve (host the application)

# Environment Configuration

    We can make use of configuration to access config method that can be used to access
the variables and files available on it.

    I Clear Config Cache: php artisan config:clear

# Directory Structure

    App Folder -> Console, Exceptions, Http, Controllers, Models, Providers

    Controller -> To load logic of our application which control entire application that
    make validation of data.

    Bootstrap -> Had Essential part to run the application which has app.php -> To work 
    as core of the applcation || cache Folder -> which has packages and services to provide 
    path of class for increasing performance.

    Config -> To load the basic details of the project. which as app.php -> To provide app
    details Eg: App Name, Debug..Etc || auth.php -> Hold the configuration of authentication 
    and login for the application. || database.php -> An opt to access database of the app.

    Database -> To hold blueprint of the database. Migrations -> For load application 
    details format of database with datas and their types. || seeders -> To fetch information
    available in the database.

    Public -> which hold index.php file to initiate our project that provide path to access
    application which enhance the service of bootstrap and cache to load the application.

    Resource -> which hold the manditory fields to load css, javascript and views to load
    the application frontend view and that can be enhanced as resource.

    Routes -> Which used to routing from one to another file based on usage of url. To 
    instruct the action need to be perform for the route url. Make easy interation of api
    and web application route.

    Storage -> To load the user details who access the application. Which has framework 
    folder that holds cache, session, testing and view of the application.

    Logs -> To load application details and mistakes that load for developer to upgrade
    the application.

    tests -> To configure and test the application which developed.

    Vendor -> Which consist of folders that said to be projects that is an 3rd party app
    for provide details (Eg: Laravel application details as default).

# Routing 

    Make moment of application from on to another. Can also used for api transition too.

    Route::get(url,function(){values}) <- Closure to make route and user to transfer or 
    route the application.

    cmd: php artisan route:list -> To View that which route are enable int the application.

    

