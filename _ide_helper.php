<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.2.41 on 2016-08-04.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {
    exit("This file should not be included, only analyzed by your IDE");

    class App extends \Illuminate\Support\Facades\App{
        
        /**
         * Get the version number of the application.
         *
         * @return string 
         * @static 
         */
        public static function version(){
            return \Illuminate\Foundation\Application::version();
        }
        
        /**
         * Run the given array of bootstrap classes.
         *
         * @param array $bootstrappers
         * @return void 
         * @static 
         */
        public static function bootstrapWith($bootstrappers){
            \Illuminate\Foundation\Application::bootstrapWith($bootstrappers);
        }
        
        /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function afterLoadingEnvironment($callback){
            \Illuminate\Foundation\Application::afterLoadingEnvironment($callback);
        }
        
        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function beforeBootstrapping($bootstrapper, $callback){
            \Illuminate\Foundation\Application::beforeBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function afterBootstrapping($bootstrapper, $callback){
            \Illuminate\Foundation\Application::afterBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool 
         * @static 
         */
        public static function hasBeenBootstrapped(){
            return \Illuminate\Foundation\Application::hasBeenBootstrapped();
        }
        
        /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return $this 
         * @static 
         */
        public static function setBasePath($basePath){
            return \Illuminate\Foundation\Application::setBasePath($basePath);
        }
        
        /**
         * Get the path to the application "app" directory.
         *
         * @return string 
         * @static 
         */
        public static function path(){
            return \Illuminate\Foundation\Application::path();
        }
        
        /**
         * Get the base path of the Laravel installation.
         *
         * @return string 
         * @static 
         */
        public static function basePath(){
            return \Illuminate\Foundation\Application::basePath();
        }
        
        /**
         * Get the path to the bootstrap directory.
         *
         * @return string 
         * @static 
         */
        public static function bootstrapPath(){
            return \Illuminate\Foundation\Application::bootstrapPath();
        }
        
        /**
         * Get the path to the application configuration files.
         *
         * @return string 
         * @static 
         */
        public static function configPath(){
            return \Illuminate\Foundation\Application::configPath();
        }
        
        /**
         * Get the path to the database directory.
         *
         * @return string 
         * @static 
         */
        public static function databasePath(){
            return \Illuminate\Foundation\Application::databasePath();
        }
        
        /**
         * Set the database directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */
        public static function useDatabasePath($path){
            return \Illuminate\Foundation\Application::useDatabasePath($path);
        }
        
        /**
         * Get the path to the language files.
         *
         * @return string 
         * @static 
         */
        public static function langPath(){
            return \Illuminate\Foundation\Application::langPath();
        }
        
        /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */
        public static function publicPath(){
            return \Illuminate\Foundation\Application::publicPath();
        }
        
        /**
         * Get the path to the storage directory.
         *
         * @return string 
         * @static 
         */
        public static function storagePath(){
            return \Illuminate\Foundation\Application::storagePath();
        }
        
        /**
         * Set the storage directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */
        public static function useStoragePath($path){
            return \Illuminate\Foundation\Application::useStoragePath($path);
        }
        
        /**
         * Get the path to the environment file directory.
         *
         * @return string 
         * @static 
         */
        public static function environmentPath(){
            return \Illuminate\Foundation\Application::environmentPath();
        }
        
        /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return $this 
         * @static 
         */
        public static function useEnvironmentPath($path){
            return \Illuminate\Foundation\Application::useEnvironmentPath($path);
        }
        
        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return $this 
         * @static 
         */
        public static function loadEnvironmentFrom($file){
            return \Illuminate\Foundation\Application::loadEnvironmentFrom($file);
        }
        
        /**
         * Get the environment file the application is using.
         *
         * @return string 
         * @static 
         */
        public static function environmentFile(){
            return \Illuminate\Foundation\Application::environmentFile();
        }
        
        /**
         * Get the fully qualified path to the environment file.
         *
         * @return string 
         * @static 
         */
        public static function environmentFilePath(){
            return \Illuminate\Foundation\Application::environmentFilePath();
        }
        
        /**
         * Get or check the current application environment.
         *
         * @param mixed
         * @return string|bool 
         * @static 
         */
        public static function environment(){
            return \Illuminate\Foundation\Application::environment();
        }
        
        /**
         * Determine if application is in local environment.
         *
         * @return bool 
         * @static 
         */
        public static function isLocal(){
            return \Illuminate\Foundation\Application::isLocal();
        }
        
        /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         * @return string 
         * @static 
         */
        public static function detectEnvironment($callback){
            return \Illuminate\Foundation\Application::detectEnvironment($callback);
        }
        
        /**
         * Determine if we are running in the console.
         *
         * @return bool 
         * @static 
         */
        public static function runningInConsole(){
            return \Illuminate\Foundation\Application::runningInConsole();
        }
        
        /**
         * Determine if we are running unit tests.
         *
         * @return bool 
         * @static 
         */
        public static function runningUnitTests(){
            return \Illuminate\Foundation\Application::runningUnitTests();
        }
        
        /**
         * Register all of the configured providers.
         *
         * @return void 
         * @static 
         */
        public static function registerConfiguredProviders(){
            \Illuminate\Foundation\Application::registerConfiguredProviders();
        }
        
        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param array $options
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */
        public static function register($provider, $options = array(), $force = false){
            return \Illuminate\Foundation\Application::register($provider, $options, $force);
        }
        
        /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return \Illuminate\Support\ServiceProvider|null 
         * @static 
         */
        public static function getProvider($provider){
            return \Illuminate\Foundation\Application::getProvider($provider);
        }
        
        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */
        public static function resolveProviderClass($provider){
            return \Illuminate\Foundation\Application::resolveProviderClass($provider);
        }
        
        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void 
         * @static 
         */
        public static function loadDeferredProviders(){
            \Illuminate\Foundation\Application::loadDeferredProviders();
        }
        
        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void 
         * @static 
         */
        public static function loadDeferredProvider($service){
            \Illuminate\Foundation\Application::loadDeferredProvider($service);
        }
        
        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string $service
         * @return void 
         * @static 
         */
        public static function registerDeferredProvider($provider, $service = null){
            \Illuminate\Foundation\Application::registerDeferredProvider($provider, $service);
        }
        
        /**
         * Resolve the given type from the container.
         * 
         * (Overriding Container::make)
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */
        public static function make($abstract, $parameters = array()){
            return \Illuminate\Foundation\Application::make($abstract, $parameters);
        }
        
        /**
         * Determine if the given abstract type has been bound.
         * 
         * (Overriding Container::bound)
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */
        public static function bound($abstract){
            return \Illuminate\Foundation\Application::bound($abstract);
        }
        
        /**
         * Determine if the application has booted.
         *
         * @return bool 
         * @static 
         */
        public static function isBooted(){
            return \Illuminate\Foundation\Application::isBooted();
        }
        
        /**
         * Boot the application's service providers.
         *
         * @return void 
         * @static 
         */
        public static function boot(){
            \Illuminate\Foundation\Application::boot();
        }
        
        /**
         * Register a new boot listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function booting($callback){
            \Illuminate\Foundation\Application::booting($callback);
        }
        
        /**
         * Register a new "booted" listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function booted($callback){
            \Illuminate\Foundation\Application::booted($callback);
        }
        
        /**
         * {@inheritdoc}
         *
         * @static 
         */
        public static function handle($request, $type = 1, $catch = true){
            return \Illuminate\Foundation\Application::handle($request, $type, $catch);
        }
        
        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool 
         * @static 
         */
        public static function shouldSkipMiddleware(){
            return \Illuminate\Foundation\Application::shouldSkipMiddleware();
        }
        
        /**
         * Determine if the application configuration is cached.
         *
         * @return bool 
         * @static 
         */
        public static function configurationIsCached(){
            return \Illuminate\Foundation\Application::configurationIsCached();
        }
        
        /**
         * Get the path to the configuration cache file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedConfigPath(){
            return \Illuminate\Foundation\Application::getCachedConfigPath();
        }
        
        /**
         * Determine if the application routes are cached.
         *
         * @return bool 
         * @static 
         */
        public static function routesAreCached(){
            return \Illuminate\Foundation\Application::routesAreCached();
        }
        
        /**
         * Get the path to the routes cache file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedRoutesPath(){
            return \Illuminate\Foundation\Application::getCachedRoutesPath();
        }
        
        /**
         * Get the path to the cached "compiled.php" file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedCompilePath(){
            return \Illuminate\Foundation\Application::getCachedCompilePath();
        }
        
        /**
         * Get the path to the cached services.php file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedServicesPath(){
            return \Illuminate\Foundation\Application::getCachedServicesPath();
        }
        
        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool 
         * @static 
         */
        public static function isDownForMaintenance(){
            return \Illuminate\Foundation\Application::isDownForMaintenance();
        }
        
        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @static 
         */
        public static function abort($code, $message = '', $headers = array()){
            \Illuminate\Foundation\Application::abort($code, $message, $headers);
        }
        
        /**
         * Register a terminating callback with the application.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function terminating($callback){
            return \Illuminate\Foundation\Application::terminating($callback);
        }
        
        /**
         * Terminate the application.
         *
         * @return void 
         * @static 
         */
        public static function terminate(){
            \Illuminate\Foundation\Application::terminate();
        }
        
        /**
         * Get the service providers that have been loaded.
         *
         * @return array 
         * @static 
         */
        public static function getLoadedProviders(){
            return \Illuminate\Foundation\Application::getLoadedProviders();
        }
        
        /**
         * Get the application's deferred services.
         *
         * @return array 
         * @static 
         */
        public static function getDeferredServices(){
            return \Illuminate\Foundation\Application::getDeferredServices();
        }
        
        /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */
        public static function setDeferredServices($services){
            \Illuminate\Foundation\Application::setDeferredServices($services);
        }
        
        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */
        public static function addDeferredServices($services){
            \Illuminate\Foundation\Application::addDeferredServices($services);
        }
        
        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool 
         * @static 
         */
        public static function isDeferredService($service){
            return \Illuminate\Foundation\Application::isDeferredService($service);
        }
        
        /**
         * Define a callback to be used to configure Monolog.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */
        public static function configureMonologUsing($callback){
            return \Illuminate\Foundation\Application::configureMonologUsing($callback);
        }
        
        /**
         * Determine if the application has a custom Monolog configurator.
         *
         * @return bool 
         * @static 
         */
        public static function hasMonologConfigurator(){
            return \Illuminate\Foundation\Application::hasMonologConfigurator();
        }
        
        /**
         * Get the custom Monolog configurator for the application.
         *
         * @return callable 
         * @static 
         */
        public static function getMonologConfigurator(){
            return \Illuminate\Foundation\Application::getMonologConfigurator();
        }
        
        /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            return \Illuminate\Foundation\Application::getLocale();
        }
        
        /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */
        public static function setLocale($locale){
            \Illuminate\Foundation\Application::setLocale($locale);
        }
        
        /**
         * Determine if application locale is the given locale.
         *
         * @param string $locale
         * @return bool 
         * @static 
         */
        public static function isLocale($locale){
            return \Illuminate\Foundation\Application::isLocale($locale);
        }
        
        /**
         * Register the core class aliases in the container.
         *
         * @return void 
         * @static 
         */
        public static function registerCoreContainerAliases(){
            \Illuminate\Foundation\Application::registerCoreContainerAliases();
        }
        
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Foundation\Application::flush();
        }
        
        /**
         * Get the application namespace.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */
        public static function getNamespace(){
            return \Illuminate\Foundation\Application::getNamespace();
        }
        
        /**
         * Define a contextual binding.
         *
         * @param string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder 
         * @static 
         */
        public static function when($concrete){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::when($concrete);
        }
        
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */
        public static function resolved($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolved($abstract);
        }
        
        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function isAlias($name){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isAlias($name);
        }
        
        /**
         * Register a binding with the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */
        public static function bind($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
        }
        
        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @return void 
         * @static 
         */
        public static function addContextualBinding($concrete, $abstract, $implementation){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */
        public static function bindIf($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * Register a shared binding in the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */
        public static function singleton($abstract, $concrete = null){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::singleton($abstract, $concrete);
        }
        
        /**
         * Wrap a Closure such that it is shared.
         *
         * @param \Closure $closure
         * @return \Closure 
         * @static 
         */
        public static function share($closure){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::share($closure);
        }
        
        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function extend($abstract, $closure){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::extend($abstract, $closure);
        }
        
        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return void 
         * @static 
         */
        public static function instance($abstract, $instance){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::instance($abstract, $instance);
        }
        
        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void 
         * @static 
         */
        public static function tag($abstracts, $tags){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::tag($abstracts, $tags);
        }
        
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return array 
         * @static 
         */
        public static function tagged($tag){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tagged($tag);
        }
        
        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void 
         * @static 
         */
        public static function alias($abstract, $alias){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::alias($abstract, $alias);
        }
        
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function rebinding($abstract, $callback){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::rebinding($abstract, $callback);
        }
        
        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed 
         * @static 
         */
        public static function refresh($abstract, $target, $method){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::refresh($abstract, $target, $method);
        }
        
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         * @return \Closure 
         * @static 
         */
        public static function wrap($callback, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::wrap($callback, $parameters);
        }
        
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array $parameters
         * @param string|null $defaultMethod
         * @return mixed 
         * @static 
         */
        public static function call($callback, $parameters = array(), $defaultMethod = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }
        
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param string $concrete
         * @param array $parameters
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */
        public static function build($concrete, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::build($concrete, $parameters);
        }
        
        /**
         * Register a new resolving callback.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */
        public static function resolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::resolving($abstract, $callback);
        }
        
        /**
         * Register a new after resolving callback for all types.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */
        public static function afterResolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::afterResolving($abstract, $callback);
        }
        
        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */
        public static function isShared($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isShared($abstract);
        }
        
        /**
         * Get the container's bindings.
         *
         * @return array 
         * @static 
         */
        public static function getBindings(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getBindings();
        }
        
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */
        public static function forgetInstance($abstract){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetInstance($abstract);
        }
        
        /**
         * Clear all of the instances from the container.
         *
         * @return void 
         * @static 
         */
        public static function forgetInstances(){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetInstances();
        }
        
        /**
         * Set the globally available instance of the container.
         *
         * @return static 
         * @static 
         */
        public static function getInstance(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getInstance();
        }
        
        /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setInstance($container){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::setInstance($container);
        }
        
        /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function offsetExists($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetExists($key);
        }
        
        /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function offsetGet($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetGet($key);
        }
        
        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($key, $value){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::offsetSet($key, $value);
        }
        
        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void 
         * @static 
         */
        public static function offsetUnset($key){
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::offsetUnset($key);
        }
        
    }


    class Artisan extends \Illuminate\Support\Facades\Artisan{
        
        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface $output
         * @return int 
         * @static 
         */
        public static function handle($input, $output = null){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::handle($input, $output);
        }
        
        /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         * @return void 
         * @static 
         */
        public static function terminate($input, $status){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::terminate($input, $status);
        }
        
        /**
         * Register the given command with the console application.
         *
         * @param \Symfony\Component\Console\Command\Command $command
         * @return void 
         * @static 
         */
        public static function registerCommand($command){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::registerCommand($command);
        }
        
        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @return int 
         * @static 
         */
        public static function call($command, $parameters = array()){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::call($command, $parameters);
        }
        
        /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return void 
         * @static 
         */
        public static function queue($command, $parameters = array()){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::queue($command, $parameters);
        }
        
        /**
         * Get all of the commands registered with the console.
         *
         * @return array 
         * @static 
         */
        public static function all(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::all();
        }
        
        /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */
        public static function output(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::output();
        }
        
        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void 
         * @static 
         */
        public static function bootstrap(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::bootstrap();
        }
        
    }


    class Auth extends \Illuminate\Support\Facades\Auth{
        
        /**
         * Attempt to get the guard from the local cache.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard 
         * @static 
         */
        public static function guard($name = null){
            return \Illuminate\Auth\AuthManager::guard($name);
        }
        
        /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */
        public static function createSessionDriver($name, $config){
            return \Illuminate\Auth\AuthManager::createSessionDriver($name, $config);
        }
        
        /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\TokenGuard 
         * @static 
         */
        public static function createTokenDriver($name, $config){
            return \Illuminate\Auth\AuthManager::createTokenDriver($name, $config);
        }
        
        /**
         * Get the default authentication driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }
        
        /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function shouldUse($name){
            \Illuminate\Auth\AuthManager::shouldUse($name);
        }
        
        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }
        
        /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return $this 
         * @static 
         */
        public static function viaRequest($driver, $callback){
            return \Illuminate\Auth\AuthManager::viaRequest($driver, $callback);
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */
        public static function userResolver(){
            return \Illuminate\Auth\AuthManager::userResolver();
        }
        
        /**
         * Set the callback to be used to resolve users.
         *
         * @param \Closure $userResolver
         * @return $this 
         * @static 
         */
        public static function resolveUsersUsing($userResolver){
            return \Illuminate\Auth\AuthManager::resolveUsersUsing($userResolver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }
        
        /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function provider($name, $callback){
            return \Illuminate\Auth\AuthManager::provider($name, $callback);
        }
        
        /**
         * Create the user provider implementation for the driver.
         *
         * @param string $provider
         * @return \Illuminate\Contracts\Auth\UserProvider 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function createUserProvider($provider){
            return \Illuminate\Auth\AuthManager::createUserProvider($provider);
        }
        
        /**
         * Get the currently authenticated user.
         *
         * @return \App\User|null 
         * @static 
         */
        public static function user(){
            return \Illuminate\Auth\SessionGuard::user();
        }
        
        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|null 
         * @static 
         */
        public static function id(){
            return \Illuminate\Auth\SessionGuard::id();
        }
        
        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */
        public static function once($credentials = array()){
            return \Illuminate\Auth\SessionGuard::once($credentials);
        }
        
        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */
        public static function validate($credentials = array()){
            return \Illuminate\Auth\SessionGuard::validate($credentials);
        }
        
        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */
        public static function basic($field = 'email', $extraConditions = array()){
            return \Illuminate\Auth\SessionGuard::basic($field, $extraConditions);
        }
        
        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */
        public static function onceBasic($field = 'email', $extraConditions = array()){
            return \Illuminate\Auth\SessionGuard::onceBasic($field, $extraConditions);
        }
        
        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         * @param bool $login
         * @return bool 
         * @static 
         */
        public static function attempt($credentials = array(), $remember = false, $login = true){
            return \Illuminate\Auth\SessionGuard::attempt($credentials, $remember, $login);
        }
        
        /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function attempting($callback){
            \Illuminate\Auth\SessionGuard::attempting($callback);
        }
        
        /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @param bool $remember
         * @return void 
         * @static 
         */
        public static function login($user, $remember = false){
            \Illuminate\Auth\SessionGuard::login($user, $remember);
        }
        
        /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \App\User 
         * @static 
         */
        public static function loginUsingId($id, $remember = false){
            return \Illuminate\Auth\SessionGuard::loginUsingId($id, $remember);
        }
        
        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return bool 
         * @static 
         */
        public static function onceUsingId($id){
            return \Illuminate\Auth\SessionGuard::onceUsingId($id);
        }
        
        /**
         * Log the user out of the application.
         *
         * @return void 
         * @static 
         */
        public static function logout(){
            \Illuminate\Auth\SessionGuard::logout();
        }
        
        /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory 
         * @throws \RuntimeException
         * @static 
         */
        public static function getCookieJar(){
            return \Illuminate\Auth\SessionGuard::getCookieJar();
        }
        
        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
         * @return void 
         * @static 
         */
        public static function setCookieJar($cookie){
            \Illuminate\Auth\SessionGuard::setCookieJar($cookie);
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getDispatcher(){
            return \Illuminate\Auth\SessionGuard::getDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */
        public static function setDispatcher($events){
            \Illuminate\Auth\SessionGuard::setDispatcher($events);
        }
        
        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Session\Store 
         * @static 
         */
        public static function getSession(){
            return \Illuminate\Auth\SessionGuard::getSession();
        }
        
        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider 
         * @static 
         */
        public static function getProvider(){
            return \Illuminate\Auth\SessionGuard::getProvider();
        }
        
        /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
         * @return void 
         * @static 
         */
        public static function setProvider($provider){
            \Illuminate\Auth\SessionGuard::setProvider($provider);
        }
        
        /**
         * Return the currently cached user.
         *
         * @return \App\User|null 
         * @static 
         */
        public static function getUser(){
            return \Illuminate\Auth\SessionGuard::getUser();
        }
        
        /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @return $this 
         * @static 
         */
        public static function setUser($user){
            return \Illuminate\Auth\SessionGuard::setUser($user);
        }
        
        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request 
         * @static 
         */
        public static function getRequest(){
            return \Illuminate\Auth\SessionGuard::getRequest();
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return $this 
         * @static 
         */
        public static function setRequest($request){
            return \Illuminate\Auth\SessionGuard::setRequest($request);
        }
        
        /**
         * Get the last user we attempted to authenticate.
         *
         * @return \App\User 
         * @static 
         */
        public static function getLastAttempted(){
            return \Illuminate\Auth\SessionGuard::getLastAttempted();
        }
        
        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string 
         * @static 
         */
        public static function getName(){
            return \Illuminate\Auth\SessionGuard::getName();
        }
        
        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string 
         * @static 
         */
        public static function getRecallerName(){
            return \Illuminate\Auth\SessionGuard::getRecallerName();
        }
        
        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool 
         * @static 
         */
        public static function viaRemember(){
            return \Illuminate\Auth\SessionGuard::viaRemember();
        }
        
        /**
         * Determine if the current user is authenticated.
         *
         * @return \App\User 
         * @throws \Illuminate\Auth\AuthenticationException
         * @static 
         */
        public static function authenticate(){
            return \Illuminate\Auth\SessionGuard::authenticate();
        }
        
        /**
         * Determine if the current user is authenticated.
         *
         * @return bool 
         * @static 
         */
        public static function check(){
            return \Illuminate\Auth\SessionGuard::check();
        }
        
        /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */
        public static function guest(){
            return \Illuminate\Auth\SessionGuard::guest();
        }
        
    }


    class Blade extends \Illuminate\Support\Facades\Blade{
        
        /**
         * Compile the view at the given path.
         *
         * @param string $path
         * @return void 
         * @static 
         */
        public static function compile($path = null){
            \Illuminate\View\Compilers\BladeCompiler::compile($path);
        }
        
        /**
         * Get the path currently being compiled.
         *
         * @return string 
         * @static 
         */
        public static function getPath(){
            return \Illuminate\View\Compilers\BladeCompiler::getPath();
        }
        
        /**
         * Set the path currently being compiled.
         *
         * @param string $path
         * @return void 
         * @static 
         */
        public static function setPath($path){
            \Illuminate\View\Compilers\BladeCompiler::setPath($path);
        }
        
        /**
         * Compile the given Blade template contents.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function compileString($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
        }
        
        /**
         * Compile the default values for the echo statement.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function compileEchoDefaults($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileEchoDefaults($value);
        }
        
        /**
         * Get the extensions used by the compiler.
         *
         * @return array 
         * @static 
         */
        public static function getExtensions(){
            return \Illuminate\View\Compilers\BladeCompiler::getExtensions();
        }
        
        /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
         * @return void 
         * @static 
         */
        public static function extend($compiler){
            \Illuminate\View\Compilers\BladeCompiler::extend($compiler);
        }
        
        /**
         * Register a handler for custom directives.
         *
         * @param string $name
         * @param callable $handler
         * @return void 
         * @static 
         */
        public static function directive($name, $handler){
            \Illuminate\View\Compilers\BladeCompiler::directive($name, $handler);
        }
        
        /**
         * Get the list of custom directives.
         *
         * @return array 
         * @static 
         */
        public static function getCustomDirectives(){
            return \Illuminate\View\Compilers\BladeCompiler::getCustomDirectives();
        }
        
        /**
         * Gets the raw tags used by the compiler.
         *
         * @return array 
         * @static 
         */
        public static function getRawTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getRawTags();
        }
        
        /**
         * Sets the raw tags used for the compiler.
         *
         * @param string $openTag
         * @param string $closeTag
         * @return void 
         * @static 
         */
        public static function setRawTags($openTag, $closeTag){
            \Illuminate\View\Compilers\BladeCompiler::setRawTags($openTag, $closeTag);
        }
        
        /**
         * Sets the content tags used for the compiler.
         *
         * @param string $openTag
         * @param string $closeTag
         * @param bool $escaped
         * @return void 
         * @static 
         */
        public static function setContentTags($openTag, $closeTag, $escaped = false){
            \Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
        }
        
        /**
         * Sets the escaped content tags used for the compiler.
         *
         * @param string $openTag
         * @param string $closeTag
         * @return void 
         * @static 
         */
        public static function setEscapedContentTags($openTag, $closeTag){
            \Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
        }
        
        /**
         * Gets the content tags used for the compiler.
         *
         * @return string 
         * @static 
         */
        public static function getContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getContentTags();
        }
        
        /**
         * Gets the escaped content tags used for the compiler.
         *
         * @return string 
         * @static 
         */
        public static function getEscapedContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getEscapedContentTags();
        }
        
        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         * @return void 
         * @static 
         */
        public static function setEchoFormat($format){
            \Illuminate\View\Compilers\BladeCompiler::setEchoFormat($format);
        }
        
        /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function getCompiledPath($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
        }
        
        /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function isExpired($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
        }
        
    }


    class Cache extends \Illuminate\Support\Facades\Cache{
        
        /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
         * @return mixed 
         * @static 
         */
        public static function store($name = null){
            return \Illuminate\Cache\CacheManager::store($name);
        }
        
        /**
         * Get a cache driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */
        public static function driver($driver = null){
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
        
        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository 
         * @static 
         */
        public static function repository($store){
            return \Illuminate\Cache\CacheManager::repository($store);
        }
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
        
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($events){
            \Illuminate\Cache\Repository::setEventDispatcher($events);
        }
        
        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Cache\Repository::has($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Cache\Repository::get($key, $default);
        }
        
        /**
         * Retrieve multiple items from the cache by key.
         * 
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array 
         * @static 
         */
        public static function many($keys){
            return \Illuminate\Cache\Repository::many($keys);
        }
        
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Cache\Repository::pull($key, $default);
        }
        
        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return void 
         * @static 
         */
        public static function put($key, $value, $minutes = null){
            \Illuminate\Cache\Repository::put($key, $value, $minutes);
        }
        
        /**
         * Store multiple items in the cache for a given number of minutes.
         *
         * @param array $values
         * @param int $minutes
         * @return void 
         * @static 
         */
        public static function putMany($values, $minutes){
            \Illuminate\Cache\Repository::putMany($values, $minutes);
        }
        
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return bool 
         * @static 
         */
        public static function add($key, $value, $minutes){
            return \Illuminate\Cache\Repository::add($key, $value, $minutes);
        }
        
        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function forever($key, $value){
            \Illuminate\Cache\Repository::forever($key, $value);
        }
        
        /**
         * Get an item from the cache, or store the default value.
         *
         * @param string $key
         * @param \DateTime|int $minutes
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function remember($key, $minutes, $callback){
            return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function sear($key, $callback){
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function rememberForever($key, $callback){
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function forget($key){
            return \Illuminate\Cache\Repository::forget($key);
        }
        
        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         * @return \Illuminate\Cache\TaggedCache 
         * @throws \BadMethodCallException
         * @static 
         */
        public static function tags($names){
            return \Illuminate\Cache\Repository::tags($names);
        }
        
        /**
         * Get the default cache time.
         *
         * @return int 
         * @static 
         */
        public static function getDefaultCacheTime(){
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }
        
        /**
         * Set the default cache time in minutes.
         *
         * @param int $minutes
         * @return void 
         * @static 
         */
        public static function setDefaultCacheTime($minutes){
            \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
        }
        
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */
        public static function getStore(){
            return \Illuminate\Cache\Repository::getStore();
        }
        
        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Cache\Repository::offsetExists($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Cache\Repository::offsetGet($key);
        }
        
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($key, $value){
            \Illuminate\Cache\Repository::offsetSet($key, $value);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */
        public static function offsetUnset($key){
            \Illuminate\Cache\Repository::offsetUnset($key);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Cache\Repository::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */
        public static function macroCall($method, $parameters){
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }
        
        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int 
         * @static 
         */
        public static function increment($key, $value = 1){
            return \Illuminate\Cache\FileStore::increment($key, $value);
        }
        
        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int 
         * @static 
         */
        public static function decrement($key, $value = 1){
            return \Illuminate\Cache\FileStore::decrement($key, $value);
        }
        
        /**
         * Remove all items from the cache.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Cache\FileStore::flush();
        }
        
        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */
        public static function getFilesystem(){
            return \Illuminate\Cache\FileStore::getFilesystem();
        }
        
        /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */
        public static function getDirectory(){
            return \Illuminate\Cache\FileStore::getDirectory();
        }
        
        /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */
        public static function getPrefix(){
            return \Illuminate\Cache\FileStore::getPrefix();
        }
        
    }


    class Config extends \Illuminate\Support\Facades\Config{
        
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Config\Repository::has($key);
        }
        
        /**
         * Get the specified configuration value.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Config\Repository::get($key, $default);
        }
        
        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function set($key, $value = null){
            \Illuminate\Config\Repository::set($key, $value);
        }
        
        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function prepend($key, $value){
            \Illuminate\Config\Repository::prepend($key, $value);
        }
        
        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function push($key, $value){
            \Illuminate\Config\Repository::push($key, $value);
        }
        
        /**
         * Get all of the configuration items for the application.
         *
         * @return array 
         * @static 
         */
        public static function all(){
            return \Illuminate\Config\Repository::all();
        }
        
        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Config\Repository::offsetExists($key);
        }
        
        /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Config\Repository::offsetGet($key);
        }
        
        /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($key, $value){
            \Illuminate\Config\Repository::offsetSet($key, $value);
        }
        
        /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void 
         * @static 
         */
        public static function offsetUnset($key){
            \Illuminate\Config\Repository::offsetUnset($key);
        }
        
    }


    class Cookie extends \Illuminate\Support\Facades\Cookie{
        
        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string $name
         * @param string $value
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string $path
         * @param string $domain
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */
        public static function forget($name, $path = null, $domain = null){
            return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
        }
        
        /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasQueued($key){
            return \Illuminate\Cookie\CookieJar::hasQueued($key);
        }
        
        /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */
        public static function queued($key, $default = null){
            return \Illuminate\Cookie\CookieJar::queued($key, $default);
        }
        
        /**
         * Queue a cookie to send with the next response.
         *
         * @param mixed
         * @return void 
         * @static 
         */
        public static function queue(){
            \Illuminate\Cookie\CookieJar::queue();
        }
        
        /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function unqueue($name){
            \Illuminate\Cookie\CookieJar::unqueue($name);
        }
        
        /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @return $this 
         * @static 
         */
        public static function setDefaultPathAndDomain($path, $domain, $secure = false){
            return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain, $secure);
        }
        
        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return array 
         * @static 
         */
        public static function getQueuedCookies(){
            return \Illuminate\Cookie\CookieJar::getQueuedCookies();
        }
        
    }


    class Crypt extends \Illuminate\Support\Facades\Crypt{
        
        /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
         * @return bool 
         * @static 
         */
        public static function supported($key, $cipher){
            return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }
        
        /**
         * Encrypt the given value.
         *
         * @param string $value
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static 
         */
        public static function encrypt($value){
            return \Illuminate\Encryption\Encrypter::encrypt($value);
        }
        
        /**
         * Decrypt the given value.
         *
         * @param string $payload
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static 
         */
        public static function decrypt($payload){
            return \Illuminate\Encryption\Encrypter::decrypt($payload);
        }
        
    }


    class DB extends \Illuminate\Support\Facades\DB{
        
        /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function purge($name = null){
            \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function disconnect($name = null){
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function reconnect($name = null){
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultConnection(){
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultConnection($name){
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */
        public static function supportedDrivers(){
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
        
        /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */
        public static function availableDrivers(){
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
        
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */
        public static function extend($name, $resolver){
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */
        public static function getConnections(){
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */
        public static function getSchemaBuilder(){
            return \Illuminate\Database\MySqlConnection::getSchemaBuilder();
        }
        
        /**
         * Set the query grammar to the default implementation.
         *
         * @return void 
         * @static 
         */
        public static function useDefaultQueryGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
        }
        
        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void 
         * @static 
         */
        public static function useDefaultSchemaGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
        }
        
        /**
         * Set the query post processor to the default implementation.
         *
         * @return void 
         * @static 
         */
        public static function useDefaultPostProcessor(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
        }
        
        /**
         * Begin a fluent query against a database table.
         *
         * @param string $table
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function table($table){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::table($table);
        }
        
        /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function query(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::query();
        }
        
        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */
        public static function raw($value){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::raw($value);
        }
        
        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @return mixed 
         * @static 
         */
        public static function selectOne($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectOne($query, $bindings);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array 
         * @static 
         */
        public static function selectFromWriteConnection($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectFromWriteConnection($query, $bindings);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */
        public static function select($query, $bindings = array(), $useReadPdo = true){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::select($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return \Generator 
         * @static 
         */
        public static function cursor($query, $bindings = array(), $useReadPdo = true){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::cursor($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */
        public static function insert($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::insert($query, $bindings);
        }
        
        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */
        public static function update($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::update($query, $bindings);
        }
        
        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */
        public static function delete($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::delete($query, $bindings);
        }
        
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */
        public static function statement($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::statement($query, $bindings);
        }
        
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */
        public static function affectingStatement($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
        }
        
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool 
         * @static 
         */
        public static function unprepared($query){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::unprepared($query);
        }
        
        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array 
         * @static 
         */
        public static function prepareBindings($bindings){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::prepareBindings($bindings);
        }
        
        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */
        public static function transaction($callback){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transaction($callback);
        }
        
        /**
         * Start a new database transaction.
         *
         * @return void 
         * @throws Exception
         * @static 
         */
        public static function beginTransaction(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::beginTransaction();
        }
        
        /**
         * Commit the active database transaction.
         *
         * @return void 
         * @static 
         */
        public static function commit(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::commit();
        }
        
        /**
         * Rollback the active database transaction.
         *
         * @return void 
         * @static 
         */
        public static function rollBack(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::rollBack();
        }
        
        /**
         * Get the number of active transactions.
         *
         * @return int 
         * @static 
         */
        public static function transactionLevel(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transactionLevel();
        }
        
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array 
         * @static 
         */
        public static function pretend($callback){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretend($callback);
        }
        
        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void 
         * @static 
         */
        public static function logQuery($query, $bindings, $time = null){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
        }
        
        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function listen($callback){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::listen($callback);
        }
        
        /**
         * Is Doctrine available?
         *
         * @return bool 
         * @static 
         */
        public static function isDoctrineAvailable(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::isDoctrineAvailable();
        }
        
        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column 
         * @static 
         */
        public static function getDoctrineColumn($table, $column){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
        }
        
        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager 
         * @static 
         */
        public static function getDoctrineSchemaManager(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
        }
        
        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection 
         * @static 
         */
        public static function getDoctrineConnection(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineConnection();
        }
        
        /**
         * Get the current PDO connection.
         *
         * @return \PDO 
         * @static 
         */
        public static function getPdo(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPdo();
        }
        
        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO 
         * @static 
         */
        public static function getReadPdo(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getReadPdo();
        }
        
        /**
         * Set the PDO connection.
         *
         * @param \PDO|null $pdo
         * @return $this 
         * @throws \RuntimeException
         * @static 
         */
        public static function setPdo($pdo){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setPdo($pdo);
        }
        
        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|null $pdo
         * @return $this 
         * @static 
         */
        public static function setReadPdo($pdo){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReadPdo($pdo);
        }
        
        /**
         * Set the reconnect instance on the connection.
         *
         * @param callable $reconnector
         * @return $this 
         * @static 
         */
        public static function setReconnector($reconnector){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReconnector($reconnector);
        }
        
        /**
         * Get the database connection name.
         *
         * @return string|null 
         * @static 
         */
        public static function getName(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getName();
        }
        
        /**
         * Get an option from the configuration options.
         *
         * @param string $option
         * @return mixed 
         * @static 
         */
        public static function getConfig($option){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getConfig($option);
        }
        
        /**
         * Get the PDO driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDriverName(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDriverName();
        }
        
        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */
        public static function getQueryGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryGrammar();
        }
        
        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return void 
         * @static 
         */
        public static function setQueryGrammar($grammar){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
        }
        
        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar 
         * @static 
         */
        public static function getSchemaGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getSchemaGrammar();
        }
        
        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return void 
         * @static 
         */
        public static function setSchemaGrammar($grammar){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
        }
        
        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */
        public static function getPostProcessor(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPostProcessor();
        }
        
        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return void 
         * @static 
         */
        public static function setPostProcessor($processor){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setPostProcessor($processor);
        }
        
        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($events){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setEventDispatcher($events);
        }
        
        /**
         * Determine if the connection in a "dry run".
         *
         * @return bool 
         * @static 
         */
        public static function pretending(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretending();
        }
        
        /**
         * Get the default fetch mode for the connection.
         *
         * @return int 
         * @static 
         */
        public static function getFetchMode(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getFetchMode();
        }
        
        /**
         * Get the fetch argument to be applied when selecting.
         *
         * @return mixed 
         * @static 
         */
        public static function getFetchArgument(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getFetchArgument();
        }
        
        /**
         * Get custom constructor arguments for the PDO::FETCH_CLASS fetch mode.
         *
         * @return array 
         * @static 
         */
        public static function getFetchConstructorArgument(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getFetchConstructorArgument();
        }
        
        /**
         * Set the default fetch mode for the connection, and optional arguments for the given fetch mode.
         *
         * @param int $fetchMode
         * @param mixed $fetchArgument
         * @param array $fetchConstructorArgument
         * @return int 
         * @static 
         */
        public static function setFetchMode($fetchMode, $fetchArgument = null, $fetchConstructorArgument = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setFetchMode($fetchMode, $fetchArgument, $fetchConstructorArgument);
        }
        
        /**
         * Get the connection query log.
         *
         * @return array 
         * @static 
         */
        public static function getQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryLog();
        }
        
        /**
         * Clear the query log.
         *
         * @return void 
         * @static 
         */
        public static function flushQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::flushQueryLog();
        }
        
        /**
         * Enable the query log on the connection.
         *
         * @return void 
         * @static 
         */
        public static function enableQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::enableQueryLog();
        }
        
        /**
         * Disable the query log on the connection.
         *
         * @return void 
         * @static 
         */
        public static function disableQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::disableQueryLog();
        }
        
        /**
         * Determine whether we're logging queries.
         *
         * @return bool 
         * @static 
         */
        public static function logging(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::logging();
        }
        
        /**
         * Get the name of the connected database.
         *
         * @return string 
         * @static 
         */
        public static function getDatabaseName(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDatabaseName();
        }
        
        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return string 
         * @static 
         */
        public static function setDatabaseName($database){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setDatabaseName($database);
        }
        
        /**
         * Get the table prefix for the connection.
         *
         * @return string 
         * @static 
         */
        public static function getTablePrefix(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getTablePrefix();
        }
        
        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return void 
         * @static 
         */
        public static function setTablePrefix($prefix){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
        }
        
        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar 
         * @static 
         */
        public static function withTablePrefix($grammar){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
        }
        
    }


    class Eloquent extends \Illuminate\Database\Eloquent\Model{
        
        /**
         * Register a new global scope.
         *
         * @param string $identifier
         * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
         * @return $this 
         * @static 
         */
        public static function withGlobalScope($identifier, $scope){
            return \Illuminate\Database\Eloquent\Builder::withGlobalScope($identifier, $scope);
        }
        
        /**
         * Remove a registered global scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return $this 
         * @static 
         */
        public static function withoutGlobalScope($scope){
            return \Illuminate\Database\Eloquent\Builder::withoutGlobalScope($scope);
        }
        
        /**
         * Remove all or passed registered global scopes.
         *
         * @param array|null $scopes
         * @return $this 
         * @static 
         */
        public static function withoutGlobalScopes($scopes = null){
            return \Illuminate\Database\Eloquent\Builder::withoutGlobalScopes($scopes);
        }
        
        /**
         * Get an array of global scopes that were removed from the query.
         *
         * @return array 
         * @static 
         */
        public static function removedScopes(){
            return \Illuminate\Database\Eloquent\Builder::removedScopes();
        }
        
        /**
         * Find a model by its primary key.
         *
         * @param mixed $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null 
         * @static 
         */
        public static function find($id, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::find($id, $columns);
        }
        
        /**
         * Find multiple models by their primary keys.
         *
         * @param array $ids
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function findMany($ids, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::findMany($ids, $columns);
        }
        
        /**
         * Find a model by its primary key or throw an exception.
         *
         * @param mixed $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static 
         */
        public static function findOrFail($id, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::findOrFail($id, $columns);
        }
        
        /**
         * Find a model by its primary key or return fresh model instance.
         *
         * @param mixed $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function findOrNew($id, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::findOrNew($id, $columns);
        }
        
        /**
         * Get the first record matching the attributes or instantiate it.
         *
         * @param array $attributes
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function firstOrNew($attributes){
            return \Illuminate\Database\Eloquent\Builder::firstOrNew($attributes);
        }
        
        /**
         * Get the first record matching the attributes or create it.
         *
         * @param array $attributes
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function firstOrCreate($attributes){
            return \Illuminate\Database\Eloquent\Builder::firstOrCreate($attributes);
        }
        
        /**
         * Create or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function updateOrCreate($attributes, $values = array()){
            return \Illuminate\Database\Eloquent\Builder::updateOrCreate($attributes, $values);
        }
        
        /**
         * Execute the query and get the first result.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|static|null 
         * @static 
         */
        public static function first($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::first($columns);
        }
        
        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|static 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static 
         */
        public static function firstOrFail($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
        }
        
        /**
         * Execute the query as a "select" statement.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[] 
         * @static 
         */
        public static function get($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::get($columns);
        }
        
        /**
         * Get a single column's value from the first result of a query.
         *
         * @param string $column
         * @return mixed 
         * @static 
         */
        public static function value($column){
            return \Illuminate\Database\Eloquent\Builder::value($column);
        }
        
        /**
         * Get a generator for the given query.
         *
         * @return \Generator 
         * @static 
         */
        public static function cursor(){
            return \Illuminate\Database\Eloquent\Builder::cursor();
        }
        
        /**
         * Chunk the results of the query.
         *
         * @param int $count
         * @param callable $callback
         * @return bool 
         * @static 
         */
        public static function chunk($count, $callback){
            return \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
        }
        
        /**
         * Chunk the results of a query by comparing numeric IDs.
         *
         * @param int $count
         * @param callable $callback
         * @param string $column
         * @return bool 
         * @static 
         */
        public static function chunkById($count, $callback, $column = 'id'){
            return \Illuminate\Database\Eloquent\Builder::chunkById($count, $callback, $column);
        }
        
        /**
         * Execute a callback over each item while chunking.
         *
         * @param callable $callback
         * @param int $count
         * @return bool 
         * @static 
         */
        public static function each($callback, $count = 1000){
            return \Illuminate\Database\Eloquent\Builder::each($callback, $count);
        }
        
        /**
         * Get an array with the values of a given column.
         *
         * @param string $column
         * @param string|null $key
         * @return \Illuminate\Support\Collection 
         * @static 
         */
        public static function pluck($column, $key = null){
            return \Illuminate\Database\Eloquent\Builder::pluck($column, $key);
        }
        
        /**
         * Alias for the "pluck" method.
         *
         * @param string $column
         * @param string $key
         * @return \Illuminate\Support\Collection 
         * @deprecated since version 5.2. Use the "pluck" method directly.
         * @static 
         */
        public static function lists($column, $key = null){
            return \Illuminate\Database\Eloquent\Builder::lists($column, $key);
        }
        
        /**
         * Paginate the given query.
         *
         * @param int $perPage
         * @param array $columns
         * @param string $pageName
         * @param int|null $page
         * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function paginate($perPage = null, $columns = array(), $pageName = 'page', $page = null){
            return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns, $pageName, $page);
        }
        
        /**
         * Paginate the given query into a simple paginator.
         *
         * @param int $perPage
         * @param array $columns
         * @param string $pageName
         * @param int|null $page
         * @return \Illuminate\Contracts\Pagination\Paginator 
         * @static 
         */
        public static function simplePaginate($perPage = null, $columns = array(), $pageName = 'page', $page = null){
            return \Illuminate\Database\Eloquent\Builder::simplePaginate($perPage, $columns, $pageName, $page);
        }
        
        /**
         * Register a replacement for the default delete function.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function onDelete($callback){
            \Illuminate\Database\Eloquent\Builder::onDelete($callback);
        }
        
        /**
         * Get the hydrated models without eager loading.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model[] 
         * @static 
         */
        public static function getModels($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::getModels($columns);
        }
        
        /**
         * Eager load the relationships for the models.
         *
         * @param array $models
         * @return array 
         * @static 
         */
        public static function eagerLoadRelations($models){
            return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
        }
        
        /**
         * Apply the callback's query changes if the given "value" is true.
         *
         * @param bool $value
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function when($value, $callback){
            return \Illuminate\Database\Eloquent\Builder::when($value, $callback);
        }
        
        /**
         * Add a basic where clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed $value
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function where($column, $operator = null, $value = null, $boolean = 'and'){
            return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
        }
        
        /**
         * Add an "or where" clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function orWhere($column, $operator = null, $value = null){
            return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
        }
        
        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param string $relation
         * @param string $operator
         * @param int $count
         * @param string $boolean
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null){
            return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
        }
        
        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param string $relation
         * @param string $boolean
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function doesntHave($relation, $boolean = 'and', $callback = null){
            return \Illuminate\Database\Eloquent\Builder::doesntHave($relation, $boolean, $callback);
        }
        
        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string $relation
         * @param \Closure $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function whereHas($relation, $callback, $operator = '>=', $count = 1){
            return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
        }
        
        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function whereDoesntHave($relation, $callback = null){
            return \Illuminate\Database\Eloquent\Builder::whereDoesntHave($relation, $callback);
        }
        
        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param string $relation
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function orHas($relation, $operator = '>=', $count = 1){
            return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
        }
        
        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param string $relation
         * @param \Closure $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function orWhereHas($relation, $callback, $operator = '>=', $count = 1){
            return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
        }
        
        /**
         * Merge the constraints from a relation query to the current query.
         *
         * @param \Illuminate\Database\Eloquent\Builder $relation
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function mergeModelDefinedRelationConstraints($relation){
            return \Illuminate\Database\Eloquent\Builder::mergeModelDefinedRelationConstraints($relation);
        }
        
        /**
         * Prevent the specified relations from being eager loaded.
         *
         * @param mixed $relations
         * @return $this 
         * @static 
         */
        public static function without($relations){
            return \Illuminate\Database\Eloquent\Builder::without($relations);
        }
        
        /**
         * Add subselect queries to count the relations.
         *
         * @param mixed $relations
         * @return $this 
         * @static 
         */
        public static function withCount($relations){
            return \Illuminate\Database\Eloquent\Builder::withCount($relations);
        }
        
        /**
         * Add the given scopes to the current builder instance.
         *
         * @param array $scopes
         * @return mixed 
         * @static 
         */
        public static function scopes($scopes){
            return \Illuminate\Database\Eloquent\Builder::scopes($scopes);
        }
        
        /**
         * Apply the scopes to the Eloquent builder instance and return it.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function applyScopes(){
            return \Illuminate\Database\Eloquent\Builder::applyScopes();
        }
        
        /**
         * Get the underlying query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function getQuery(){
            return \Illuminate\Database\Eloquent\Builder::getQuery();
        }
        
        /**
         * Get a base query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function toBase(){
            return \Illuminate\Database\Eloquent\Builder::toBase();
        }
        
        /**
         * Set the underlying query builder instance.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return $this 
         * @static 
         */
        public static function setQuery($query){
            return \Illuminate\Database\Eloquent\Builder::setQuery($query);
        }
        
        /**
         * Get the relationships being eagerly loaded.
         *
         * @return array 
         * @static 
         */
        public static function getEagerLoads(){
            return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
        }
        
        /**
         * Set the relationships being eagerly loaded.
         *
         * @param array $eagerLoad
         * @return $this 
         * @static 
         */
        public static function setEagerLoads($eagerLoad){
            return \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
        }
        
        /**
         * Get the model instance being queried.
         *
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function getModel(){
            return \Illuminate\Database\Eloquent\Builder::getModel();
        }
        
        /**
         * Set a model instance for the model being queried.
         *
         * @param \Illuminate\Database\Eloquent\Model $model
         * @return $this 
         * @static 
         */
        public static function setModel($model){
            return \Illuminate\Database\Eloquent\Builder::setModel($model);
        }
        
        /**
         * Extend the builder with a given callback.
         *
         * @param string $name
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function macro($name, $callback){
            \Illuminate\Database\Eloquent\Builder::macro($name, $callback);
        }
        
        /**
         * Get the given macro by name.
         *
         * @param string $name
         * @return \Closure 
         * @static 
         */
        public static function getMacro($name){
            return \Illuminate\Database\Eloquent\Builder::getMacro($name);
        }
        
        /**
         * Set the columns to be selected.
         *
         * @param array|mixed $columns
         * @return $this 
         * @static 
         */
        public static function select($columns = array()){
            return \Illuminate\Database\Query\Builder::select($columns);
        }
        
        /**
         * Add a new "raw" select expression to the query.
         *
         * @param string $expression
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function selectRaw($expression, $bindings = array()){
            return \Illuminate\Database\Query\Builder::selectRaw($expression, $bindings);
        }
        
        /**
         * Add a subselect expression to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|string $query
         * @param string $as
         * @return \Illuminate\Database\Query\Builder|static 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function selectSub($query, $as){
            return \Illuminate\Database\Query\Builder::selectSub($query, $as);
        }
        
        /**
         * Add a new select column to the query.
         *
         * @param array|mixed $column
         * @return $this 
         * @static 
         */
        public static function addSelect($column){
            return \Illuminate\Database\Query\Builder::addSelect($column);
        }
        
        /**
         * Force the query to only return distinct results.
         *
         * @return $this 
         * @static 
         */
        public static function distinct(){
            return \Illuminate\Database\Query\Builder::distinct();
        }
        
        /**
         * Set the table which the query is targeting.
         *
         * @param string $table
         * @return $this 
         * @static 
         */
        public static function from($table){
            return \Illuminate\Database\Query\Builder::from($table);
        }
        
        /**
         * Add a join clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @param string $type
         * @param bool $where
         * @return $this 
         * @static 
         */
        public static function join($table, $one, $operator = null, $two = null, $type = 'inner', $where = false){
            return \Illuminate\Database\Query\Builder::join($table, $one, $operator, $two, $type, $where);
        }
        
        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @param string $type
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function joinWhere($table, $one, $operator, $two, $type = 'inner'){
            return \Illuminate\Database\Query\Builder::joinWhere($table, $one, $operator, $two, $type);
        }
        
        /**
         * Add a left join to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function leftJoin($table, $first, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
        }
        
        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function leftJoinWhere($table, $one, $operator, $two){
            return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $one, $operator, $two);
        }
        
        /**
         * Add a right join to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function rightJoin($table, $first, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::rightJoin($table, $first, $operator, $second);
        }
        
        /**
         * Add a "right join where" clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function rightJoinWhere($table, $one, $operator, $two){
            return \Illuminate\Database\Query\Builder::rightJoinWhere($table, $one, $operator, $two);
        }
        
        /**
         * Add a "cross join" clause to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function crossJoin($table, $first = null, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::crossJoin($table, $first, $operator, $second);
        }
        
        /**
         * Add a "where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null $operator
         * @param string|null $second
         * @param string|null $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereColumn($first, $operator, $second, $boolean);
        }
        
        /**
         * Add an "or where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null $operator
         * @param string|null $second
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereColumn($first, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::orWhereColumn($first, $operator, $second);
        }
        
        /**
         * Add a raw where clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
        }
        
        /**
         * Add a raw or where clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereRaw($sql, $bindings = array()){
            return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
        }
        
        /**
         * Add a where between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @param bool $not
         * @return $this 
         * @static 
         */
        public static function whereBetween($column, $values, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
        }
        
        /**
         * Add an or where between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereBetween($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
        }
        
        /**
         * Add a where not between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNotBetween($column, $values, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
        }
        
        /**
         * Add an or where not between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNotBetween($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
        }
        
        /**
         * Add a nested where statement to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNested($callback, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
        }
        
        /**
         * Create a new query instance for nested where condition.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function forNestedWhere(){
            return \Illuminate\Database\Query\Builder::forNestedWhere();
        }
        
        /**
         * Add another query builder as a nested where to the query builder.
         *
         * @param \Illuminate\Database\Query\Builder|static $query
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function addNestedWhereQuery($query, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
        }
        
        /**
         * Add an exists clause to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @param bool $not
         * @return $this 
         * @static 
         */
        public static function whereExists($callback, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
        }
        
        /**
         * Add an or exists clause to the query.
         *
         * @param \Closure $callback
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereExists($callback, $not = false){
            return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
        }
        
        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNotExists($callback, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
        }
        
        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNotExists($callback){
            return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
        }
        
        /**
         * Add an exists clause to the query.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @param string $boolean
         * @param bool $not
         * @return $this 
         * @static 
         */
        public static function addWhereExistsQuery($query, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::addWhereExistsQuery($query, $boolean, $not);
        }
        
        /**
         * Add a "where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @param bool $not
         * @return $this 
         * @static 
         */
        public static function whereIn($column, $values, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
        }
        
        /**
         * Add an "or where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereIn($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
        }
        
        /**
         * Add a "where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNotIn($column, $values, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
        }
        
        /**
         * Add an "or where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNotIn($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
        }
        
        /**
         * Add a "where null" clause to the query.
         *
         * @param string $column
         * @param string $boolean
         * @param bool $not
         * @return $this 
         * @static 
         */
        public static function whereNull($column, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
        }
        
        /**
         * Add an "or where null" clause to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNull($column){
            return \Illuminate\Database\Query\Builder::orWhereNull($column);
        }
        
        /**
         * Add a "where not null" clause to the query.
         *
         * @param string $column
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNotNull($column, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
        }
        
        /**
         * Add an "or where not null" clause to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNotNull($column){
            return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
        }
        
        /**
         * Add a "where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereDate($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereDate($column, $operator, $value, $boolean);
        }
        
        /**
         * Add an "or where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereDate($column, $operator, $value){
            return \Illuminate\Database\Query\Builder::orWhereDate($column, $operator, $value);
        }
        
        /**
         * Add a "where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereDay($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
        }
        
        /**
         * Add a "where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereMonth($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
        }
        
        /**
         * Add a "where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereYear($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
        }
        
        /**
         * Handles dynamic "where" clauses to the query.
         *
         * @param string $method
         * @param string $parameters
         * @return $this 
         * @static 
         */
        public static function dynamicWhere($method, $parameters){
            return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
        }
        
        /**
         * Add a "group by" clause to the query.
         *
         * @param array|string $column,...
         * @return $this 
         * @static 
         */
        public static function groupBy(){
            return \Illuminate\Database\Query\Builder::groupBy();
        }
        
        /**
         * Add a "having" clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param string $value
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function having($column, $operator = null, $value = null, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::having($column, $operator, $value, $boolean);
        }
        
        /**
         * Add a "or having" clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param string $value
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orHaving($column, $operator = null, $value = null){
            return \Illuminate\Database\Query\Builder::orHaving($column, $operator, $value);
        }
        
        /**
         * Add a raw having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
        }
        
        /**
         * Add a raw or having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orHavingRaw($sql, $bindings = array()){
            return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
        }
        
        /**
         * Add an "order by" clause to the query.
         *
         * @param string $column
         * @param string $direction
         * @return $this 
         * @static 
         */
        public static function orderBy($column, $direction = 'asc'){
            return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
        }
        
        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function latest($column = 'created_at'){
            return \Illuminate\Database\Query\Builder::latest($column);
        }
        
        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function oldest($column = 'created_at'){
            return \Illuminate\Database\Query\Builder::oldest($column);
        }
        
        /**
         * Put the query's results in random order.
         *
         * @param string $seed
         * @return $this 
         * @static 
         */
        public static function inRandomOrder($seed = ''){
            return \Illuminate\Database\Query\Builder::inRandomOrder($seed);
        }
        
        /**
         * Add a raw "order by" clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return $this 
         * @static 
         */
        public static function orderByRaw($sql, $bindings = array()){
            return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
        }
        
        /**
         * Set the "offset" value of the query.
         *
         * @param int $value
         * @return $this 
         * @static 
         */
        public static function offset($value){
            return \Illuminate\Database\Query\Builder::offset($value);
        }
        
        /**
         * Alias to set the "offset" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function skip($value){
            return \Illuminate\Database\Query\Builder::skip($value);
        }
        
        /**
         * Set the "limit" value of the query.
         *
         * @param int $value
         * @return $this 
         * @static 
         */
        public static function limit($value){
            return \Illuminate\Database\Query\Builder::limit($value);
        }
        
        /**
         * Alias to set the "limit" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function take($value){
            return \Illuminate\Database\Query\Builder::take($value);
        }
        
        /**
         * Set the limit and offset for a given page.
         *
         * @param int $page
         * @param int $perPage
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function forPage($page, $perPage = 15){
            return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
        }
        
        /**
         * Constrain the query to the next "page" of results after a given ID.
         *
         * @param int $perPage
         * @param int $lastId
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id'){
            return \Illuminate\Database\Query\Builder::forPageAfterId($perPage, $lastId, $column);
        }
        
        /**
         * Add a union statement to the query.
         *
         * @param \Illuminate\Database\Query\Builder|\Closure $query
         * @param bool $all
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function union($query, $all = false){
            return \Illuminate\Database\Query\Builder::union($query, $all);
        }
        
        /**
         * Add a union all statement to the query.
         *
         * @param \Illuminate\Database\Query\Builder|\Closure $query
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function unionAll($query){
            return \Illuminate\Database\Query\Builder::unionAll($query);
        }
        
        /**
         * Lock the selected rows in the table.
         *
         * @param bool $value
         * @return $this 
         * @static 
         */
        public static function lock($value = true){
            return \Illuminate\Database\Query\Builder::lock($value);
        }
        
        /**
         * Lock the selected rows in the table for updating.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function lockForUpdate(){
            return \Illuminate\Database\Query\Builder::lockForUpdate();
        }
        
        /**
         * Share lock the selected rows in the table.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function sharedLock(){
            return \Illuminate\Database\Query\Builder::sharedLock();
        }
        
        /**
         * Get the SQL representation of the query.
         *
         * @return string 
         * @static 
         */
        public static function toSql(){
            return \Illuminate\Database\Query\Builder::toSql();
        }
        
        /**
         * Get the count of the total records for the paginator.
         *
         * @param array $columns
         * @return int 
         * @static 
         */
        public static function getCountForPagination($columns = array()){
            return \Illuminate\Database\Query\Builder::getCountForPagination($columns);
        }
        
        /**
         * Concatenate values of a given column as a string.
         *
         * @param string $column
         * @param string $glue
         * @return string 
         * @static 
         */
        public static function implode($column, $glue = ''){
            return \Illuminate\Database\Query\Builder::implode($column, $glue);
        }
        
        /**
         * Determine if any rows exist for the current query.
         *
         * @return bool 
         * @static 
         */
        public static function exists(){
            return \Illuminate\Database\Query\Builder::exists();
        }
        
        /**
         * Retrieve the "count" result of the query.
         *
         * @param string $columns
         * @return int 
         * @static 
         */
        public static function count($columns = '*'){
            return \Illuminate\Database\Query\Builder::count($columns);
        }
        
        /**
         * Retrieve the minimum value of a given column.
         *
         * @param string $column
         * @return float|int 
         * @static 
         */
        public static function min($column){
            return \Illuminate\Database\Query\Builder::min($column);
        }
        
        /**
         * Retrieve the maximum value of a given column.
         *
         * @param string $column
         * @return float|int 
         * @static 
         */
        public static function max($column){
            return \Illuminate\Database\Query\Builder::max($column);
        }
        
        /**
         * Retrieve the sum of the values of a given column.
         *
         * @param string $column
         * @return float|int 
         * @static 
         */
        public static function sum($column){
            return \Illuminate\Database\Query\Builder::sum($column);
        }
        
        /**
         * Retrieve the average of the values of a given column.
         *
         * @param string $column
         * @return float|int 
         * @static 
         */
        public static function avg($column){
            return \Illuminate\Database\Query\Builder::avg($column);
        }
        
        /**
         * Alias for the "avg" method.
         *
         * @param string $column
         * @return float|int 
         * @static 
         */
        public static function average($column){
            return \Illuminate\Database\Query\Builder::average($column);
        }
        
        /**
         * Execute an aggregate function on the database.
         *
         * @param string $function
         * @param array $columns
         * @return float|int 
         * @static 
         */
        public static function aggregate($function, $columns = array()){
            return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
        }
        
        /**
         * Insert a new record into the database.
         *
         * @param array $values
         * @return bool 
         * @static 
         */
        public static function insert($values){
            return \Illuminate\Database\Query\Builder::insert($values);
        }
        
        /**
         * Insert a new record and get the value of the primary key.
         *
         * @param array $values
         * @param string $sequence
         * @return int 
         * @static 
         */
        public static function insertGetId($values, $sequence = null){
            return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
        }
        
        /**
         * Insert or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         * @return bool 
         * @static 
         */
        public static function updateOrInsert($attributes, $values = array()){
            return \Illuminate\Database\Query\Builder::updateOrInsert($attributes, $values);
        }
        
        /**
         * Run a truncate statement on the table.
         *
         * @return void 
         * @static 
         */
        public static function truncate(){
            \Illuminate\Database\Query\Builder::truncate();
        }
        
        /**
         * Merge an array of where clauses and bindings.
         *
         * @param array $wheres
         * @param array $bindings
         * @return void 
         * @static 
         */
        public static function mergeWheres($wheres, $bindings){
            \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
        }
        
        /**
         * Create a raw database expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */
        public static function raw($value){
            return \Illuminate\Database\Query\Builder::raw($value);
        }
        
        /**
         * Get the current query value bindings in a flattened array.
         *
         * @return array 
         * @static 
         */
        public static function getBindings(){
            return \Illuminate\Database\Query\Builder::getBindings();
        }
        
        /**
         * Get the raw array of bindings.
         *
         * @return array 
         * @static 
         */
        public static function getRawBindings(){
            return \Illuminate\Database\Query\Builder::getRawBindings();
        }
        
        /**
         * Set the bindings on the query builder.
         *
         * @param array $bindings
         * @param string $type
         * @return $this 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function setBindings($bindings, $type = 'where'){
            return \Illuminate\Database\Query\Builder::setBindings($bindings, $type);
        }
        
        /**
         * Add a binding to the query.
         *
         * @param mixed $value
         * @param string $type
         * @return $this 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function addBinding($value, $type = 'where'){
            return \Illuminate\Database\Query\Builder::addBinding($value, $type);
        }
        
        /**
         * Merge an array of bindings into our bindings.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return $this 
         * @static 
         */
        public static function mergeBindings($query){
            return \Illuminate\Database\Query\Builder::mergeBindings($query);
        }
        
        /**
         * Get the database query processor instance.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */
        public static function getProcessor(){
            return \Illuminate\Database\Query\Builder::getProcessor();
        }
        
        /**
         * Get the query grammar instance.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */
        public static function getGrammar(){
            return \Illuminate\Database\Query\Builder::getGrammar();
        }
        
        /**
         * Use the write pdo for query.
         *
         * @return $this 
         * @static 
         */
        public static function useWritePdo(){
            return \Illuminate\Database\Query\Builder::useWritePdo();
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Database\Query\Builder::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */
        public static function macroCall($method, $parameters){
            return \Illuminate\Database\Query\Builder::macroCall($method, $parameters);
        }
        
    }


    class Event extends \Illuminate\Support\Facades\Event{
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param string|array $events
         * @param mixed $listener
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function listen($events, $listener, $priority = 0){
            \Illuminate\Events\Dispatcher::listen($events, $listener, $priority);
        }
        
        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */
        public static function hasListeners($eventName){
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param array $payload
         * @return void 
         * @static 
         */
        public static function push($event, $payload = array()){
            \Illuminate\Events\Dispatcher::push($event, $payload);
        }
        
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void 
         * @static 
         */
        public static function subscribe($subscriber){
            \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param array $payload
         * @return mixed 
         * @static 
         */
        public static function until($event, $payload = array()){
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void 
         * @static 
         */
        public static function flush($event){
            \Illuminate\Events\Dispatcher::flush($event);
        }
        
        /**
         * Get the event that is currently firing.
         *
         * @return string 
         * @static 
         */
        public static function firing(){
            return \Illuminate\Events\Dispatcher::firing();
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */
        public static function fire($event, $payload = array(), $halt = false){
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array 
         * @static 
         */
        public static function getListeners($eventName){
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param mixed $listener
         * @return mixed 
         * @static 
         */
        public static function makeListener($listener){
            return \Illuminate\Events\Dispatcher::makeListener($listener);
        }
        
        /**
         * Create a class based listener using the IoC container.
         *
         * @param mixed $listener
         * @return \Closure 
         * @static 
         */
        public static function createClassListener($listener){
            return \Illuminate\Events\Dispatcher::createClassListener($listener);
        }
        
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void 
         * @static 
         */
        public static function forget($event){
            \Illuminate\Events\Dispatcher::forget($event);
        }
        
        /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */
        public static function forgetPushed(){
            \Illuminate\Events\Dispatcher::forgetPushed();
        }
        
        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return $this 
         * @static 
         */
        public static function setQueueResolver($resolver){
            return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
        }
        
    }


    class File extends \Illuminate\Support\Facades\File{
        
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function exists($path){
            return \Illuminate\Filesystem\Filesystem::exists($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */
        public static function get($path, $lock = false){
            return \Illuminate\Filesystem\Filesystem::get($path, $lock);
        }
        
        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function sharedGet($path){
            return \Illuminate\Filesystem\Filesystem::sharedGet($path);
        }
        
        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @return mixed 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */
        public static function getRequire($path){
            return \Illuminate\Filesystem\Filesystem::getRequire($path);
        }
        
        /**
         * Require the given file once.
         *
         * @param string $file
         * @return mixed 
         * @static 
         */
        public static function requireOnce($file){
            return \Illuminate\Filesystem\Filesystem::requireOnce($file);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         * @return int 
         * @static 
         */
        public static function put($path, $contents, $lock = false){
            return \Illuminate\Filesystem\Filesystem::put($path, $contents, $lock);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */
        public static function prepend($path, $data){
            return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */
        public static function append($path, $data){
            return \Illuminate\Filesystem\Filesystem::append($path, $data);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */
        public static function delete($paths){
            return \Illuminate\Filesystem\Filesystem::delete($paths);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */
        public static function move($path, $target){
            return \Illuminate\Filesystem\Filesystem::move($path, $target);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */
        public static function copy($path, $target){
            return \Illuminate\Filesystem\Filesystem::copy($path, $target);
        }
        
        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function name($path){
            return \Illuminate\Filesystem\Filesystem::name($path);
        }
        
        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function basename($path){
            return \Illuminate\Filesystem\Filesystem::basename($path);
        }
        
        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function dirname($path){
            return \Illuminate\Filesystem\Filesystem::dirname($path);
        }
        
        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function extension($path){
            return \Illuminate\Filesystem\Filesystem::extension($path);
        }
        
        /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function type($path){
            return \Illuminate\Filesystem\Filesystem::type($path);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */
        public static function mimeType($path){
            return \Illuminate\Filesystem\Filesystem::mimeType($path);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */
        public static function size($path){
            return \Illuminate\Filesystem\Filesystem::size($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */
        public static function lastModified($path){
            return \Illuminate\Filesystem\Filesystem::lastModified($path);
        }
        
        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */
        public static function isDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
        }
        
        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function isWritable($path){
            return \Illuminate\Filesystem\Filesystem::isWritable($path);
        }
        
        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool 
         * @static 
         */
        public static function isFile($file){
            return \Illuminate\Filesystem\Filesystem::isFile($file);
        }
        
        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array 
         * @static 
         */
        public static function glob($pattern, $flags = 0){
            return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @return array 
         * @static 
         */
        public static function files($directory){
            return \Illuminate\Filesystem\Filesystem::files($directory);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return array 
         * @static 
         */
        public static function allFiles($directory, $hidden = false){
            return \Illuminate\Filesystem\Filesystem::allFiles($directory, $hidden);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array 
         * @static 
         */
        public static function directories($directory){
            return \Illuminate\Filesystem\Filesystem::directories($directory);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool 
         * @static 
         */
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false){
            return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
        }
        
        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool 
         * @static 
         */
        public static function moveDirectory($from, $to, $overwrite = false){
            return \Illuminate\Filesystem\Filesystem::moveDirectory($from, $to, $overwrite);
        }
        
        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int $options
         * @return bool 
         * @static 
         */
        public static function copyDirectory($directory, $destination, $options = null){
            return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
        }
        
        /**
         * Recursively delete a directory.
         * 
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool 
         * @static 
         */
        public static function deleteDirectory($directory, $preserve = false){
            return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
        }
        
        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */
        public static function cleanDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }
        
    }


    class Gate extends \Illuminate\Support\Facades\Gate{
        
        /**
         * Determine if a given ability has been defined.
         *
         * @param string $ability
         * @return bool 
         * @static 
         */
        public static function has($ability){
            return \Illuminate\Auth\Access\Gate::has($ability);
        }
        
        /**
         * Define a new ability.
         *
         * @param string $ability
         * @param callable|string $callback
         * @return $this 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function define($ability, $callback){
            return \Illuminate\Auth\Access\Gate::define($ability, $callback);
        }
        
        /**
         * Define a policy class for a given class type.
         *
         * @param string $class
         * @param string $policy
         * @return $this 
         * @static 
         */
        public static function policy($class, $policy){
            return \Illuminate\Auth\Access\Gate::policy($class, $policy);
        }
        
        /**
         * Register a callback to run before all Gate checks.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */
        public static function before($callback){
            return \Illuminate\Auth\Access\Gate::before($callback);
        }
        
        /**
         * Register a callback to run after all Gate checks.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */
        public static function after($callback){
            return \Illuminate\Auth\Access\Gate::after($callback);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */
        public static function allows($ability, $arguments = array()){
            return \Illuminate\Auth\Access\Gate::allows($ability, $arguments);
        }
        
        /**
         * Determine if the given ability should be denied for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */
        public static function denies($ability, $arguments = array()){
            return \Illuminate\Auth\Access\Gate::denies($ability, $arguments);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */
        public static function check($ability, $arguments = array()){
            return \Illuminate\Auth\Access\Gate::check($ability, $arguments);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return \Illuminate\Auth\Access\Response 
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static 
         */
        public static function authorize($ability, $arguments = array()){
            return \Illuminate\Auth\Access\Gate::authorize($ability, $arguments);
        }
        
        /**
         * Get a policy instance for a given class.
         *
         * @param object|string $class
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function getPolicyFor($class){
            return \Illuminate\Auth\Access\Gate::getPolicyFor($class);
        }
        
        /**
         * Build a policy class instance of the given type.
         *
         * @param object|string $class
         * @return mixed 
         * @static 
         */
        public static function resolvePolicy($class){
            return \Illuminate\Auth\Access\Gate::resolvePolicy($class);
        }
        
        /**
         * Get a guard instance for the given user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable|mixed $user
         * @return static 
         * @static 
         */
        public static function forUser($user){
            return \Illuminate\Auth\Access\Gate::forUser($user);
        }
        
    }


    class Hash extends \Illuminate\Support\Facades\Hash{
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @throws \RuntimeException
         * @static 
         */
        public static function make($value, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function check($value, $hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function needsRehash($hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
        }
        
        /**
         * Set the default password work factor.
         *
         * @param int $rounds
         * @return $this 
         * @static 
         */
        public static function setRounds($rounds){
            return \Illuminate\Hashing\BcryptHasher::setRounds($rounds);
        }
        
    }


    class Lang extends \Illuminate\Support\Facades\Lang{
        
        /**
         * Determine if a translation exists for a given locale.
         *
         * @param string $key
         * @param string|null $locale
         * @return bool 
         * @static 
         */
        public static function hasForLocale($key, $locale = null){
            return \Illuminate\Translation\Translator::hasForLocale($key, $locale);
        }
        
        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string|null $locale
         * @param bool $fallback
         * @return bool 
         * @static 
         */
        public static function has($key, $locale = null, $fallback = true){
            return \Illuminate\Translation\Translator::has($key, $locale, $fallback);
        }
        
        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @param bool $fallback
         * @return string|array|null 
         * @static 
         */
        public static function get($key, $replace = array(), $locale = null, $fallback = true){
            return \Illuminate\Translation\Translator::get($key, $replace, $locale, $fallback);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int|array|\Countable $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function choice($key, $number, $replace = array(), $locale = null){
            return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
        }
        
        /**
         * Get the translation for a given key.
         *
         * @param string $id
         * @param array $parameters
         * @param string $domain
         * @param string $locale
         * @return string|array|null 
         * @static 
         */
        public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
            return \Illuminate\Translation\Translator::trans($id, $parameters, $domain, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $id
         * @param int|array|\Countable $number
         * @param array $parameters
         * @param string $domain
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
            return \Illuminate\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
        }
        
        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void 
         * @static 
         */
        public static function load($namespace, $group, $locale){
            \Illuminate\Translation\Translator::load($namespace, $group, $locale);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */
        public static function addNamespace($namespace, $hint){
            \Illuminate\Translation\Translator::addNamespace($namespace, $hint);
        }
        
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */
        public static function parseKey($key){
            return \Illuminate\Translation\Translator::parseKey($key);
        }
        
        /**
         * Get the message selector instance.
         *
         * @return \Symfony\Component\Translation\MessageSelector 
         * @static 
         */
        public static function getSelector(){
            return \Illuminate\Translation\Translator::getSelector();
        }
        
        /**
         * Set the message selector instance.
         *
         * @param \Symfony\Component\Translation\MessageSelector $selector
         * @return void 
         * @static 
         */
        public static function setSelector($selector){
            \Illuminate\Translation\Translator::setSelector($selector);
        }
        
        /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Translation\LoaderInterface 
         * @static 
         */
        public static function getLoader(){
            return \Illuminate\Translation\Translator::getLoader();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */
        public static function locale(){
            return \Illuminate\Translation\Translator::locale();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            return \Illuminate\Translation\Translator::getLocale();
        }
        
        /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */
        public static function setLocale($locale){
            \Illuminate\Translation\Translator::setLocale($locale);
        }
        
        /**
         * Get the fallback locale being used.
         *
         * @return string 
         * @static 
         */
        public static function getFallback(){
            return \Illuminate\Translation\Translator::getFallback();
        }
        
        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void 
         * @static 
         */
        public static function setFallback($fallback){
            \Illuminate\Translation\Translator::setFallback($fallback);
        }
        
        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void 
         * @static 
         */
        public static function setParsedKey($key, $parsed){
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            \Illuminate\Translation\Translator::setParsedKey($key, $parsed);
        }
        
    }


    class Log extends \Illuminate\Support\Facades\Log{
        
        /**
         * Adds a log record at the DEBUG level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function debug($message, $context = array()){
            return \Monolog\Logger::debug($message, $context);
        }
        
        /**
         * Adds a log record at the INFO level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function info($message, $context = array()){
            return \Monolog\Logger::info($message, $context);
        }
        
        /**
         * Adds a log record at the NOTICE level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function notice($message, $context = array()){
            return \Monolog\Logger::notice($message, $context);
        }
        
        /**
         * Adds a log record at the WARNING level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function warning($message, $context = array()){
            return \Monolog\Logger::warning($message, $context);
        }
        
        /**
         * Adds a log record at the ERROR level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function error($message, $context = array()){
            return \Monolog\Logger::error($message, $context);
        }
        
        /**
         * Adds a log record at the CRITICAL level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function critical($message, $context = array()){
            return \Monolog\Logger::critical($message, $context);
        }
        
        /**
         * Adds a log record at the ALERT level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function alert($message, $context = array()){
            return \Monolog\Logger::alert($message, $context);
        }
        
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function emergency($message, $context = array()){
            return \Monolog\Logger::emergency($message, $context);
        }
        
        /**
         * Log a message to the logs.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */
        public static function log($level, $message, $context = array()){
            \Illuminate\Log\Writer::log($level, $message, $context);
        }
        
        /**
         * Dynamically pass log calls into the writer.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */
        public static function write($level, $message, $context = array()){
            \Illuminate\Log\Writer::write($level, $message, $context);
        }
        
        /**
         * Register a file log handler.
         *
         * @param string $path
         * @param string $level
         * @return void 
         * @static 
         */
        public static function useFiles($path, $level = 'debug'){
            \Illuminate\Log\Writer::useFiles($path, $level);
        }
        
        /**
         * Register a daily file log handler.
         *
         * @param string $path
         * @param int $days
         * @param string $level
         * @return void 
         * @static 
         */
        public static function useDailyFiles($path, $days = 0, $level = 'debug'){
            \Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
        }
        
        /**
         * Register a Syslog handler.
         *
         * @param string $name
         * @param string $level
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */
        public static function useSyslog($name = 'laravel', $level = 'debug'){
            return \Illuminate\Log\Writer::useSyslog($name, $level);
        }
        
        /**
         * Register an error_log handler.
         *
         * @param string $level
         * @param int $messageType
         * @return void 
         * @static 
         */
        public static function useErrorLog($level = 'debug', $messageType = 0){
            \Illuminate\Log\Writer::useErrorLog($level, $messageType);
        }
        
        /**
         * Register a new callback handler for when a log event is triggered.
         *
         * @param \Closure $callback
         * @return void 
         * @throws \RuntimeException
         * @static 
         */
        public static function listen($callback){
            \Illuminate\Log\Writer::listen($callback);
        }
        
        /**
         * Get the underlying Monolog instance.
         *
         * @return \Monolog\Logger 
         * @static 
         */
        public static function getMonolog(){
            return \Illuminate\Log\Writer::getMonolog();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            return \Illuminate\Log\Writer::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            \Illuminate\Log\Writer::setEventDispatcher($dispatcher);
        }
        
    }


    class Mail extends \Illuminate\Support\Facades\Mail{
        
        /**
         * Set the global from address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */
        public static function alwaysFrom($address, $name = null){
            \Illuminate\Mail\Mailer::alwaysFrom($address, $name);
        }
        
        /**
         * Set the global to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */
        public static function alwaysTo($address, $name = null){
            \Illuminate\Mail\Mailer::alwaysTo($address, $name);
        }
        
        /**
         * Send a new message when only a raw text part.
         *
         * @param string $text
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function raw($text, $callback){
            \Illuminate\Mail\Mailer::raw($text, $callback);
        }
        
        /**
         * Send a new message when only a plain part.
         *
         * @param string $view
         * @param array $data
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function plain($view, $data, $callback){
            \Illuminate\Mail\Mailer::plain($view, $data, $callback);
        }
        
        /**
         * Send a new message using a view.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */
        public static function send($view, $data, $callback){
            \Illuminate\Mail\Mailer::send($view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string|null $queue
         * @return mixed 
         * @static 
         */
        public static function queue($view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function onQueue($queue, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::onQueue($queue, $view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         * 
         * This method didn't match rest of framework's "onQueue" phrasing. Added "onQueue".
         *
         * @param string $queue
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function queueOn($queue, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string|null $queue
         * @return mixed 
         * @static 
         */
        public static function later($delay, $view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds on the given queue.
         *
         * @param string $queue
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function laterOn($queue, $delay, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
        }
        
        /**
         * Handle a queued e-mail message job.
         *
         * @param \Illuminate\Contracts\Queue\Job $job
         * @param array $data
         * @return void 
         * @static 
         */
        public static function handleQueuedMessage($job, $data){
            \Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
        }
        
        /**
         * Get the view factory instance.
         *
         * @return \Illuminate\Contracts\View\Factory 
         * @static 
         */
        public static function getViewFactory(){
            return \Illuminate\Mail\Mailer::getViewFactory();
        }
        
        /**
         * Get the Swift Mailer instance.
         *
         * @return \Swift_Mailer 
         * @static 
         */
        public static function getSwiftMailer(){
            return \Illuminate\Mail\Mailer::getSwiftMailer();
        }
        
        /**
         * Get the array of failed recipients.
         *
         * @return array 
         * @static 
         */
        public static function failures(){
            return \Illuminate\Mail\Mailer::failures();
        }
        
        /**
         * Set the Swift Mailer instance.
         *
         * @param \Swift_Mailer $swift
         * @return void 
         * @static 
         */
        public static function setSwiftMailer($swift){
            \Illuminate\Mail\Mailer::setSwiftMailer($swift);
        }
        
        /**
         * Set the queue manager instance.
         *
         * @param \Illuminate\Contracts\Queue\Queue $queue
         * @return $this 
         * @static 
         */
        public static function setQueue($queue){
            return \Illuminate\Mail\Mailer::setQueue($queue);
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setContainer($container){
            \Illuminate\Mail\Mailer::setContainer($container);
        }
        
    }


    class Password extends \Illuminate\Support\Facades\Password{
        
        /**
         * Attempt to get the broker from the local cache.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Auth\PasswordBroker 
         * @static 
         */
        public static function broker($name = null){
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::broker($name);
        }
        
        /**
         * Get the default password broker name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::getDefaultDriver();
        }
        
        /**
         * Set the default password broker name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Auth\Passwords\PasswordBrokerManager::setDefaultDriver($name);
        }
        
    }


    class Queue extends \Illuminate\Support\Facades\Queue{
        
        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function before($callback){
            \Illuminate\Queue\QueueManager::before($callback);
        }
        
        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function after($callback){
            \Illuminate\Queue\QueueManager::after($callback);
        }
        
        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function exceptionOccurred($callback){
            \Illuminate\Queue\QueueManager::exceptionOccurred($callback);
        }
        
        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function looping($callback){
            \Illuminate\Queue\QueueManager::looping($callback);
        }
        
        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function failing($callback){
            \Illuminate\Queue\QueueManager::failing($callback);
        }
        
        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function stopping($callback){
            \Illuminate\Queue\QueueManager::stopping($callback);
        }
        
        /**
         * Determine if the driver is connected.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function connected($name = null){
            return \Illuminate\Queue\QueueManager::connected($name);
        }
        
        /**
         * Resolve a queue connection instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Queue\Queue 
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Queue\QueueManager::connection($name);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function extend($driver, $resolver){
            \Illuminate\Queue\QueueManager::extend($driver, $resolver);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function addConnector($driver, $resolver){
            \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
        }
        
        /**
         * Get the name of the default queue connection.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Queue\QueueManager::getDefaultDriver();
        }
        
        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Queue\QueueManager::setDefaultDriver($name);
        }
        
        /**
         * Get the full name for the given connection.
         *
         * @param string $connection
         * @return string 
         * @static 
         */
        public static function getName($connection = null){
            return \Illuminate\Queue\QueueManager::getName($connection);
        }
        
        /**
         * Determine if the application is in maintenance mode.
         *
         * @return bool 
         * @static 
         */
        public static function isDownForMaintenance(){
            return \Illuminate\Queue\QueueManager::isDownForMaintenance();
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */
        public static function push($job, $data = '', $queue = null){
            return \Illuminate\Queue\SyncQueue::push($job, $data, $queue);
        }
        
        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string $queue
         * @param array $options
         * @return mixed 
         * @static 
         */
        public static function pushRaw($payload, $queue = null, $options = array()){
            return \Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param \DateTime|int $delay
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function later($delay, $job, $data = '', $queue = null){
            return \Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
        }
        
        /**
         * Pop the next job off of the queue.
         *
         * @param string $queue
         * @return \Illuminate\Contracts\Queue\Job|null 
         * @static 
         */
        public static function pop($queue = null){
            return \Illuminate\Queue\SyncQueue::pop($queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */
        public static function pushOn($queue, $job, $data = ''){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::pushOn($queue, $job, $data);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param string $queue
         * @param \DateTime|int $delay
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */
        public static function laterOn($queue, $delay, $job, $data = ''){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::laterOn($queue, $delay, $job, $data);
        }
        
        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function bulk($jobs, $data = '', $queue = null){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setContainer($container){
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setContainer($container);
        }
        
        /**
         * Set the encrypter implementation.
         *
         * @param \Illuminate\Contracts\Encryption\Encrypter $encrypter
         * @return void 
         * @static 
         */
        public static function setEncrypter($encrypter){
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setEncrypter($encrypter);
        }
        
    }


    class Redirect extends \Illuminate\Support\Facades\Redirect{
        
        /**
         * Create a new redirect response to the "home" route.
         *
         * @param int $status
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function home($status = 302){
            return \Illuminate\Routing\Redirector::home($status);
        }
        
        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function back($status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::back($status, $headers);
        }
        
        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function refresh($status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::refresh($status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function guest($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function intended($default = '/', $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function to($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function away($path, $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::away($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function secure($path, $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function route($route, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function action($action, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
        }
        
        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */
        public static function getUrlGenerator(){
            return \Illuminate\Routing\Redirector::getUrlGenerator();
        }
        
        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         * @return void 
         * @static 
         */
        public static function setSession($session){
            \Illuminate\Routing\Redirector::setSession($session);
        }
        
    }


    class Request extends \Illuminate\Support\Facades\Request{
        
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */
        public static function capture(){
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * Return the Request instance.
         *
         * @return $this 
         * @static 
         */
        public static function instance(){
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */
        public static function method(){
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */
        public static function root(){
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */
        public static function url(){
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */
        public static function fullUrl(){
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string 
         * @static 
         */
        public static function fullUrlWithQuery($query){
            return \Illuminate\Http\Request::fullUrlWithQuery($query);
        }
        
        /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */
        public static function path(){
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * Get the current encoded path info for the request.
         *
         * @return string 
         * @static 
         */
        public static function decodedPath(){
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */
        public static function segment($index, $default = null){
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */
        public static function segments(){
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed  string
         * @return bool 
         * @static 
         */
        public static function is(){
            return \Illuminate\Http\Request::is();
        }
        
        /**
         * Determine if the current request URL and query string matches a pattern.
         *
         * @param mixed  string
         * @return bool 
         * @static 
         */
        public static function fullUrlIs(){
            return \Illuminate\Http\Request::fullUrlIs();
        }
        
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */
        public static function ajax(){
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */
        public static function pjax(){
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */
        public static function secure(){
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * Returns the client IP address.
         *
         * @return string 
         * @static 
         */
        public static function ip(){
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * Returns the client IP addresses.
         *
         * @return array 
         * @static 
         */
        public static function ips(){
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */
        public static function exists($key){
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */
        public static function all(){
            return \Illuminate\Http\Request::all();
        }
        
        /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function input($key = null, $default = null){
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * Get a subset of the items from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */
        public static function only($keys){
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */
        public static function except($keys){
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * Intersect an array of items with the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */
        public static function intersect($keys){
            return \Illuminate\Http\Request::intersect($keys);
        }
        
        /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function query($key = null, $default = null){
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasCookie($key){
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function cookie($key = null, $default = null){
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * Get an array of all of the files on the request.
         *
         * @return array 
         * @static 
         */
        public static function allFiles(){
            return \Illuminate\Http\Request::allFiles();
        }
        
        /**
         * Retrieve a file from the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\File\UploadedFile|array|null 
         * @static 
         */
        public static function file($key = null, $default = null){
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasFile($key){
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasHeader($key){
            return \Illuminate\Http\Request::hasHeader($key);
        }
        
        /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function header($key = null, $default = null){
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function server($key = null, $default = null){
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function old($key = null, $default = null){
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * Flash the input for the current request to the session.
         *
         * @param string $filter
         * @param array $keys
         * @return void 
         * @static 
         */
        public static function flash($filter = null, $keys = array()){
            \Illuminate\Http\Request::flash($filter, $keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function flashOnly($keys){
            \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function flashExcept($keys){
            \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Http\Request::flush();
        }
        
        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return void 
         * @static 
         */
        public static function merge($input){
            \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return void 
         * @static 
         */
        public static function replace($input){
            \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * Get the JSON payload for the request.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function json($key = null, $default = null){
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */
        public static function matchesType($actual, $type){
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */
        public static function isJson(){
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */
        public static function wantsJson(){
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */
        public static function accepts($contentTypes){
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
        
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */
        public static function prefers($contentTypes){
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
        
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */
        public static function acceptsJson(){
            return \Illuminate\Http\Request::acceptsJson();
        }
        
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */
        public static function acceptsHtml(){
            return \Illuminate\Http\Request::acceptsHtml();
        }
        
        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */
        public static function format($default = 'html'){
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */
        public static function bearerToken(){
            return \Illuminate\Http\Request::bearerToken();
        }
        
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Http\Request 
         * @static 
         */
        public static function createFromBase($request){
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return \Request The duplicated request
         * @static 
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */
        public static function session(){
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed 
         * @static 
         */
        public static function user($guard = null){
            return \Illuminate\Http\Request::user($guard);
        }
        
        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */
        public static function route($param = null){
            return \Illuminate\Http\Request::route($param);
        }
        
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */
        public static function fingerprint(){
            return \Illuminate\Http\Request::fingerprint();
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */
        public static function getUserResolver(){
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function setUserResolver($callback){
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */
        public static function getRouteResolver(){
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function setRouteResolver($callback){
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */
        public static function toArray(){
            return \Illuminate\Http\Request::toArray();
        }
        
        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */
        public static function offsetExists($offset){
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */
        public static function offsetGet($offset){
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($offset, $value){
            \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */
        public static function offsetUnset($offset){
            \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource $content The raw body data
         * @static 
         */
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return \Request A new request
         * @static 
         */
        public static function createFromGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string $content The raw body data
         * @return \Request A Request instance
         * @static 
         */
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
         * @static 
         */
        public static function setFactory($callable){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */
        public static function overrideGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @static 
         */
        public static function setTrustedProxies($proxies){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies
         * @static 
         */
        public static function getTrustedProxies(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */
        public static function setTrustedHosts($hostPatterns){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns
         * @static 
         */
        public static function getTrustedHosts(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function setTrustedHeaderName($key, $value){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
         * @return string The header name
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function getTrustedHeaderName($key){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
         * @return string A normalized query string for the Request
         * @static 
         */
        public static function normalizeQueryString($qs){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */
        public static function enableHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static 
         */
        public static function getHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key the key
         * @param mixed $default the default value if the parameter key does not exist
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default);
        }
        
        /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
         * @static 
         */
        public static function getSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool 
         * @static 
         */
        public static function hasPreviousSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static 
         */
        public static function hasSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
         * @static 
         */
        public static function setSession($session){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */
        public static function getClientIps(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
         * the "client-ip" key.
         *
         * @return string The client IP address
         * @see getClientIps()
         * @see http://en.wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */
        public static function getClientIp(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */
        public static function getScriptName(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */
        public static function getPathInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */
        public static function getBasePath(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */
        public static function getBaseUrl(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */
        public static function getScheme(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via "setTrustedHeaderName()" with the "client-port" key.
         *
         * @return string 
         * @static 
         */
        public static function getPort(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */
        public static function getUser(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */
        public static function getPassword(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */
        public static function getUserInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */
        public static function getHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */
        public static function getRequestUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static 
         */
        public static function getSchemeAndHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static 
         */
        public static function getUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static 
         */
        public static function getUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
         * @return string The relative target path
         * @static 
         */
        public static function getRelativeUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static 
         */
        public static function getQueryString(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
         * the "client-proto" key.
         *
         * @return bool 
         * @static 
         */
        public static function isSecure(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via "setTrustedHeaderName()" with the "client-host" key.
         *
         * @return string 
         * @throws \UnexpectedValueException when the host name is invalid
         * @static 
         */
        public static function getHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * Sets the request method.
         *
         * @param string $method
         * @static 
         */
        public static function setMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */
        public static function getMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static 
         */
        public static function getRealMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
         * @return string The associated mime type (null if not found)
         * @static 
         */
        public static function getMimeType($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
         * @return string|null The format (null if not found)
         * @static 
         */
        public static function getFormat($mimeType){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */
        public static function setFormat($format, $mimeTypes){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @param string $default The default format
         * @return string The request format
         * @static 
         */
        public static function getRequestFormat($default = 'html'){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * Sets the request format.
         *
         * @param string $format The request format
         * @static 
         */
        public static function setRequestFormat($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static 
         */
        public static function getContentType(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * Sets the default locale.
         *
         * @param string $locale
         * @static 
         */
        public static function setDefaultLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * Sets the locale.
         *
         * @param string $locale
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @return bool 
         * @static 
         */
        public static function isMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * Checks whether the method is safe or not.
         *
         * @return bool 
         * @static 
         */
        public static function isMethodSafe(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream
         * @throws \LogicException
         * @static 
         */
        public static function getContent($asResource = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static 
         */
        public static function getETags(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @return bool 
         * @static 
         */
        public static function isNoCache(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static 
         */
        public static function getPreferredLanguage($locales = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static 
         */
        public static function getLanguages(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static 
         */
        public static function getCharsets(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static 
         */
        public static function getEncodings(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static 
         */
        public static function getAcceptableContentTypes(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * Returns true if the request is a XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */
        public static function isXmlHttpRequest(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Http\Request::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Http\Request::hasMacro($name);
        }
        
    }


    class Response extends \Illuminate\Support\Facades\Response{
        
        /**
         * Return a new response from the application.
         *
         * @param string $content
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */
        public static function make($content = '', $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }
        
        /**
         * Return a new view response from the application.
         *
         * @param string $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */
        public static function view($view, $data = array(), $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }
        
        /**
         * Return a new JSON response from the application.
         *
         * @param string|array $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */
        public static function json($data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }
        
        /**
         * Return a new JSONP response from the application.
         *
         * @param string $callback
         * @param string|array $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */
        public static function jsonp($callback, $data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }
        
        /**
         * Return a new streamed response from the application.
         *
         * @param \Closure $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */
        public static function stream($callback, $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }
        
        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */
        public static function download($file, $name = null, $headers = array(), $disposition = 'attachment'){
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }
        
        /**
         * Return the raw contents of a binary file.
         *
         * @param \SplFileInfo|string $file
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */
        public static function file($file, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::file($file, $headers);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectTo($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectToRoute($route, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectToAction($action, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectToIntended($default = '/', $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
        
    }


    class Route extends \Illuminate\Support\Facades\Route{
        
        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function get($uri, $action = null){
            return \Illuminate\Routing\Router::get($uri, $action);
        }
        
        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function post($uri, $action = null){
            return \Illuminate\Routing\Router::post($uri, $action);
        }
        
        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function put($uri, $action = null){
            return \Illuminate\Routing\Router::put($uri, $action);
        }
        
        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function patch($uri, $action = null){
            return \Illuminate\Routing\Router::patch($uri, $action);
        }
        
        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function delete($uri, $action = null){
            return \Illuminate\Routing\Router::delete($uri, $action);
        }
        
        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function options($uri, $action = null){
            return \Illuminate\Routing\Router::options($uri, $action);
        }
        
        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function any($uri, $action = null){
            return \Illuminate\Routing\Router::any($uri, $action);
        }
        
        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function match($methods, $uri, $action = null){
            return \Illuminate\Routing\Router::match($methods, $uri, $action);
        }
        
        /**
         * Register an array of controllers with wildcard routing.
         *
         * @param array $controllers
         * @return void 
         * @deprecated since version 5.2.
         * @static 
         */
        public static function controllers($controllers){
            \Illuminate\Routing\Router::controllers($controllers);
        }
        
        /**
         * Route a controller to a URI with wildcard routing.
         *
         * @param string $uri
         * @param string $controller
         * @param array $names
         * @return void 
         * @deprecated since version 5.2.
         * @static 
         */
        public static function controller($uri, $controller, $names = array()){
            \Illuminate\Routing\Router::controller($uri, $controller, $names);
        }
        
        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @return void 
         * @static 
         */
        public static function singularResourceParameters(){
            \Illuminate\Routing\Router::singularResourceParameters();
        }
        
        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */
        public static function resourceParameters($parameters = array()){
            \Illuminate\Routing\Router::resourceParameters($parameters);
        }
        
        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @return void 
         * @static 
         */
        public static function resources($resources){
            \Illuminate\Routing\Router::resources($resources);
        }
        
        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return void 
         * @static 
         */
        public static function resource($name, $controller, $options = array()){
            \Illuminate\Routing\Router::resource($name, $controller, $options);
        }
        
        /**
         * Register the typical authentication routes for an application.
         *
         * @return void 
         * @static 
         */
        public static function auth(){
            \Illuminate\Routing\Router::auth();
        }
        
        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function group($attributes, $callback){
            \Illuminate\Routing\Router::group($attributes, $callback);
        }
        
        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @return array 
         * @static 
         */
        public static function mergeWithLastGroup($new){
            return \Illuminate\Routing\Router::mergeWithLastGroup($new);
        }
        
        /**
         * Merge the given group attributes.
         *
         * @param array $new
         * @param array $old
         * @return array 
         * @static 
         */
        public static function mergeGroup($new, $old){
            return \Illuminate\Routing\Router::mergeGroup($new, $old);
        }
        
        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string 
         * @static 
         */
        public static function getLastGroupPrefix(){
            return \Illuminate\Routing\Router::getLastGroupPrefix();
        }
        
        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response 
         * @static 
         */
        public static function dispatch($request){
            return \Illuminate\Routing\Router::dispatch($request);
        }
        
        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return mixed 
         * @static 
         */
        public static function dispatchToRoute($request){
            return \Illuminate\Routing\Router::dispatchToRoute($request);
        }
        
        /**
         * Gather the middleware for the given route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array 
         * @static 
         */
        public static function gatherRouteMiddlewares($route){
            return \Illuminate\Routing\Router::gatherRouteMiddlewares($route);
        }
        
        /**
         * Resolve the middleware name to a class name(s) preserving passed parameters.
         *
         * @param string $name
         * @return string|array 
         * @static 
         */
        public static function resolveMiddlewareClassName($name){
            return \Illuminate\Routing\Router::resolveMiddlewareClassName($name);
        }
        
        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */
        public static function matched($callback){
            \Illuminate\Routing\Router::matched($callback);
        }
        
        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array 
         * @static 
         */
        public static function getMiddleware(){
            return \Illuminate\Routing\Router::getMiddleware();
        }
        
        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return $this 
         * @static 
         */
        public static function middleware($name, $class){
            return \Illuminate\Routing\Router::middleware($name, $class);
        }
        
        /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return $this 
         * @static 
         */
        public static function middlewareGroup($name, $middleware){
            return \Illuminate\Routing\Router::middlewareGroup($name, $middleware);
        }
        
        /**
         * Add a middleware to the beginning of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return $this 
         * @static 
         */
        public static function prependMiddlewareToGroup($group, $middleware){
            return \Illuminate\Routing\Router::prependMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * Add a middleware to the end of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return $this 
         * @static 
         */
        public static function pushMiddlewareToGroup($group, $middleware){
            return \Illuminate\Routing\Router::pushMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
         * @static 
         */
        public static function model($key, $class, $callback = null){
            \Illuminate\Routing\Router::model($key, $class, $callback);
        }
        
        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void 
         * @static 
         */
        public static function bind($key, $binder){
            \Illuminate\Routing\Router::bind($key, $binder);
        }
        
        /**
         * Create a class based binding using the IoC container.
         *
         * @param string $binding
         * @return \Closure 
         * @static 
         */
        public static function createClassBinding($binding){
            return \Illuminate\Routing\Router::createClassBinding($binding);
        }
        
        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void 
         * @static 
         */
        public static function pattern($key, $pattern){
            \Illuminate\Routing\Router::pattern($key, $pattern);
        }
        
        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void 
         * @static 
         */
        public static function patterns($patterns){
            \Illuminate\Routing\Router::patterns($patterns);
        }
        
        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Illuminate\Http\Response 
         * @static 
         */
        public static function prepareResponse($request, $response){
            return \Illuminate\Routing\Router::prepareResponse($request, $response);
        }
        
        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool 
         * @static 
         */
        public static function hasGroupStack(){
            return \Illuminate\Routing\Router::hasGroupStack();
        }
        
        /**
         * Get the current group stack for the router.
         *
         * @return array 
         * @static 
         */
        public static function getGroupStack(){
            return \Illuminate\Routing\Router::getGroupStack();
        }
        
        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */
        public static function input($key, $default = null){
            return \Illuminate\Routing\Router::input($key, $default);
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function getCurrentRoute(){
            return \Illuminate\Routing\Router::getCurrentRoute();
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function current(){
            return \Illuminate\Routing\Router::current();
        }
        
        /**
         * Check if a route with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function has($name){
            return \Illuminate\Routing\Router::has($name);
        }
        
        /**
         * Get the current route name.
         *
         * @return string|null 
         * @static 
         */
        public static function currentRouteName(){
            return \Illuminate\Routing\Router::currentRouteName();
        }
        
        /**
         * Alias for the "currentRouteName" method.
         *
         * @param mixed  string
         * @return bool 
         * @static 
         */
        public static function is(){
            return \Illuminate\Routing\Router::is();
        }
        
        /**
         * Determine if the current route matches a given name.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function currentRouteNamed($name){
            return \Illuminate\Routing\Router::currentRouteNamed($name);
        }
        
        /**
         * Get the current route action.
         *
         * @return string|null 
         * @static 
         */
        public static function currentRouteAction(){
            return \Illuminate\Routing\Router::currentRouteAction();
        }
        
        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param mixed  string
         * @return bool 
         * @static 
         */
        public static function uses(){
            return \Illuminate\Routing\Router::uses();
        }
        
        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool 
         * @static 
         */
        public static function currentRouteUses($action){
            return \Illuminate\Routing\Router::currentRouteUses($action);
        }
        
        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */
        public static function getCurrentRequest(){
            return \Illuminate\Routing\Router::getCurrentRequest();
        }
        
        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollection 
         * @static 
         */
        public static function getRoutes(){
            return \Illuminate\Routing\Router::getRoutes();
        }
        
        /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return void 
         * @static 
         */
        public static function setRoutes($routes){
            \Illuminate\Routing\Router::setRoutes($routes);
        }
        
        /**
         * Get the global "where" patterns.
         *
         * @return array 
         * @static 
         */
        public static function getPatterns(){
            return \Illuminate\Routing\Router::getPatterns();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Routing\Router::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\Router::hasMacro($name);
        }
        
    }


    class Schema extends \Illuminate\Support\Facades\Schema{
        
        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool 
         * @static 
         */
        public static function hasTable($table){
            return \Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
        }
        
        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array 
         * @static 
         */
        public static function getColumnListing($table){
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnListing($table);
        }
        
        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool 
         * @static 
         */
        public static function hasColumn($table, $column){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
        }
        
        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool 
         * @static 
         */
        public static function hasColumns($table, $columns){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumns($table, $columns);
        }
        
        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @return string 
         * @static 
         */
        public static function getColumnType($table, $column){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnType($table, $column);
        }
        
        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function table($table, $callback){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
        }
        
        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function create($table, $callback){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
        }
        
        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function drop($table){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::drop($table);
        }
        
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function dropIfExists($table){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
        }
        
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function rename($from, $to){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
        }
        
        /**
         * Enable foreign key constraints.
         *
         * @return bool 
         * @static 
         */
        public static function enableForeignKeyConstraints(){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::enableForeignKeyConstraints();
        }
        
        /**
         * Disable foreign key constraints.
         *
         * @return bool 
         * @static 
         */
        public static function disableForeignKeyConstraints(){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::disableForeignKeyConstraints();
        }
        
        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function getConnection(){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getConnection();
        }
        
        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         * @return $this 
         * @static 
         */
        public static function setConnection($connection){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
        }
        
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function blueprintResolver($resolver){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::blueprintResolver($resolver);
        }
        
    }


    class Session extends \Illuminate\Support\Facades\Session{
        
        /**
         * Get the session configuration.
         *
         * @return array 
         * @static 
         */
        public static function getSessionConfig(){
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
        
        /**
         * Get the default session driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
        
        /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * Starts the session storage.
         *
         * @return bool True if session started
         * @throws \RuntimeException If session fails to start.
         * @static 
         */
        public static function start(){
            return \Illuminate\Session\Store::start();
        }
        
        /**
         * Returns the session ID.
         *
         * @return string The session ID
         * @static 
         */
        public static function getId(){
            return \Illuminate\Session\Store::getId();
        }
        
        /**
         * Sets the session ID.
         *
         * @param string $id
         * @static 
         */
        public static function setId($id){
            return \Illuminate\Session\Store::setId($id);
        }
        
        /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
         * @return bool 
         * @static 
         */
        public static function isValidId($id){
            return \Illuminate\Session\Store::isValidId($id);
        }
        
        /**
         * Returns the session name.
         *
         * @return mixed The session name
         * @static 
         */
        public static function getName(){
            return \Illuminate\Session\Store::getName();
        }
        
        /**
         * Sets the session name.
         *
         * @param string $name
         * @static 
         */
        public static function setName($name){
            return \Illuminate\Session\Store::setName($name);
        }
        
        /**
         * Invalidates the current session.
         * 
         * Clears all session attributes and flashes and regenerates the
         * session and deletes the old session from persistence.
         *
         * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
         *                      will leave the system settings unchanged, 0 sets the cookie
         *                      to expire with browser session. Time is in seconds, and is
         *                      not a Unix timestamp.
         * @return bool True if session invalidated, false if error
         * @static 
         */
        public static function invalidate($lifetime = null){
            return \Illuminate\Session\Store::invalidate($lifetime);
        }
        
        /**
         * Migrates the current session to a new session id while maintaining all
         * session attributes.
         *
         * @param bool $destroy Whether to delete the old session or leave it to garbage collection
         * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
         *                       will leave the system settings unchanged, 0 sets the cookie
         *                       to expire with browser session. Time is in seconds, and is
         *                       not a Unix timestamp.
         * @return bool True if session migrated, false if error
         * @static 
         */
        public static function migrate($destroy = false, $lifetime = null){
            return \Illuminate\Session\Store::migrate($destroy, $lifetime);
        }
        
        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */
        public static function regenerate($destroy = false){
            return \Illuminate\Session\Store::regenerate($destroy);
        }
        
        /**
         * Force the session to be saved and closed.
         * 
         * This method is generally not required for real sessions as
         * the session will be automatically saved at the end of
         * code execution.
         *
         * @static 
         */
        public static function save(){
            return \Illuminate\Session\Store::save();
        }
        
        /**
         * Age the flash data for the session.
         *
         * @return void 
         * @static 
         */
        public static function ageFlashData(){
            \Illuminate\Session\Store::ageFlashData();
        }
        
        /**
         * Checks if an attribute is defined.
         *
         * @param string $name The attribute name
         * @return bool true if the attribute is defined, false otherwise
         * @static 
         */
        public static function has($name){
            return \Illuminate\Session\Store::has($name);
        }
        
        /**
         * Returns an attribute.
         *
         * @param string $name The attribute name
         * @param mixed $default The default value if not found
         * @return mixed 
         * @static 
         */
        public static function get($name, $default = null){
            return \Illuminate\Session\Store::get($name, $default);
        }
        
        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Session\Store::pull($key, $default);
        }
        
        /**
         * Determine if the session contains old input.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasOldInput($key = null){
            return \Illuminate\Session\Store::hasOldInput($key);
        }
        
        /**
         * Get the requested item from the flashed input array.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function getOldInput($key = null, $default = null){
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
        
        /**
         * Sets an attribute.
         *
         * @param string $name
         * @param mixed $value
         * @static 
         */
        public static function set($name, $value){
            return \Illuminate\Session\Store::set($name, $value);
        }
        
        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function put($key, $value = null){
            \Illuminate\Session\Store::put($key, $value);
        }
        
        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function push($key, $value){
            \Illuminate\Session\Store::push($key, $value);
        }
        
        /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return mixed 
         * @static 
         */
        public static function increment($key, $amount = 1){
            return \Illuminate\Session\Store::increment($key, $amount);
        }
        
        /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return int 
         * @static 
         */
        public static function decrement($key, $amount = 1){
            return \Illuminate\Session\Store::decrement($key, $amount);
        }
        
        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function flash($key, $value){
            \Illuminate\Session\Store::flash($key, $value);
        }
        
        /**
         * Flash a key / value pair to the session
         * for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function now($key, $value){
            \Illuminate\Session\Store::now($key, $value);
        }
        
        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void 
         * @static 
         */
        public static function flashInput($value){
            \Illuminate\Session\Store::flashInput($value);
        }
        
        /**
         * Reflash all of the session flash data.
         *
         * @return void 
         * @static 
         */
        public static function reflash(){
            \Illuminate\Session\Store::reflash();
        }
        
        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function keep($keys = null){
            \Illuminate\Session\Store::keep($keys);
        }
        
        /**
         * Returns attributes.
         *
         * @return array Attributes
         * @static 
         */
        public static function all(){
            return \Illuminate\Session\Store::all();
        }
        
        /**
         * Sets attributes.
         *
         * @param array $attributes Attributes
         * @static 
         */
        public static function replace($attributes){
            return \Illuminate\Session\Store::replace($attributes);
        }
        
        /**
         * Removes an attribute.
         *
         * @param string $name
         * @return mixed The removed value or null when it does not exist
         * @static 
         */
        public static function remove($name){
            return \Illuminate\Session\Store::remove($name);
        }
        
        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void 
         * @static 
         */
        public static function forget($keys){
            \Illuminate\Session\Store::forget($keys);
        }
        
        /**
         * Clears all attributes.
         *
         * @static 
         */
        public static function clear(){
            return \Illuminate\Session\Store::clear();
        }
        
        /**
         * Remove all of the items from the session.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Session\Store::flush();
        }
        
        /**
         * Checks if the session was started.
         *
         * @return bool 
         * @static 
         */
        public static function isStarted(){
            return \Illuminate\Session\Store::isStarted();
        }
        
        /**
         * Registers a SessionBagInterface with the session.
         *
         * @param \Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag
         * @static 
         */
        public static function registerBag($bag){
            return \Illuminate\Session\Store::registerBag($bag);
        }
        
        /**
         * Gets a bag instance by name.
         *
         * @param string $name
         * @return \Symfony\Component\HttpFoundation\Session\SessionBagInterface 
         * @static 
         */
        public static function getBag($name){
            return \Illuminate\Session\Store::getBag($name);
        }
        
        /**
         * Gets session meta.
         *
         * @return \Symfony\Component\HttpFoundation\Session\MetadataBag 
         * @static 
         */
        public static function getMetadataBag(){
            return \Illuminate\Session\Store::getMetadataBag();
        }
        
        /**
         * Get the raw bag data array for a given bag.
         *
         * @param string $name
         * @return array 
         * @static 
         */
        public static function getBagData($name){
            return \Illuminate\Session\Store::getBagData($name);
        }
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */
        public static function token(){
            return \Illuminate\Session\Store::token();
        }
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */
        public static function getToken(){
            return \Illuminate\Session\Store::getToken();
        }
        
        /**
         * Regenerate the CSRF token value.
         *
         * @return void 
         * @static 
         */
        public static function regenerateToken(){
            \Illuminate\Session\Store::regenerateToken();
        }
        
        /**
         * Get the previous URL from the session.
         *
         * @return string|null 
         * @static 
         */
        public static function previousUrl(){
            return \Illuminate\Session\Store::previousUrl();
        }
        
        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void 
         * @static 
         */
        public static function setPreviousUrl($url){
            \Illuminate\Session\Store::setPreviousUrl($url);
        }
        
        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void 
         * @static 
         */
        public static function setExists($value){
            \Illuminate\Session\Store::setExists($value);
        }
        
        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface 
         * @static 
         */
        public static function getHandler(){
            return \Illuminate\Session\Store::getHandler();
        }
        
        /**
         * Determine if the session handler needs a request.
         *
         * @return bool 
         * @static 
         */
        public static function handlerNeedsRequest(){
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
        
        /**
         * Set the request on the handler instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return void 
         * @static 
         */
        public static function setRequestOnHandler($request){
            \Illuminate\Session\Store::setRequestOnHandler($request);
        }
        
    }


    class Storage extends \Illuminate\Support\Facades\Storage{
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */
        public static function drive($name = null){
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */
        public static function disk($name = null){
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
        
        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */
        public static function cloud(){
            return \Illuminate\Filesystem\FilesystemManager::cloud();
        }
        
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */
        public static function createLocalDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
        
        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */
        public static function createFtpDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createFtpDriver($config);
        }
        
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */
        public static function createS3Driver($config){
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
        
        /**
         * Create an instance of the Rackspace driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */
        public static function createRackspaceDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver($config);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
        
        /**
         * Get the default cloud driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultCloudDriver(){
            return \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver();
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
        
        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function exists($path){
            return \Illuminate\Filesystem\FilesystemAdapter::exists($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */
        public static function get($path){
            return \Illuminate\Filesystem\FilesystemAdapter::get($path);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string|resource $contents
         * @param string $visibility
         * @return bool 
         * @static 
         */
        public static function put($path, $contents, $visibility = null){
            return \Illuminate\Filesystem\FilesystemAdapter::put($path, $contents, $visibility);
        }
        
        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function getVisibility($path){
            return \Illuminate\Filesystem\FilesystemAdapter::getVisibility($path);
        }
        
        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return void 
         * @static 
         */
        public static function setVisibility($path, $visibility){
            \Illuminate\Filesystem\FilesystemAdapter::setVisibility($path, $visibility);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */
        public static function prepend($path, $data, $separator = ''){
            return \Illuminate\Filesystem\FilesystemAdapter::prepend($path, $data, $separator);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */
        public static function append($path, $data, $separator = ''){
            return \Illuminate\Filesystem\FilesystemAdapter::append($path, $data, $separator);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */
        public static function delete($paths){
            return \Illuminate\Filesystem\FilesystemAdapter::delete($paths);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */
        public static function copy($from, $to){
            return \Illuminate\Filesystem\FilesystemAdapter::copy($from, $to);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */
        public static function move($from, $to){
            return \Illuminate\Filesystem\FilesystemAdapter::move($from, $to);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */
        public static function size($path){
            return \Illuminate\Filesystem\FilesystemAdapter::size($path);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */
        public static function mimeType($path){
            return \Illuminate\Filesystem\FilesystemAdapter::mimeType($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */
        public static function lastModified($path){
            return \Illuminate\Filesystem\FilesystemAdapter::lastModified($path);
        }
        
        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function url($path){
            return \Illuminate\Filesystem\FilesystemAdapter::url($path);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */
        public static function files($directory = null, $recursive = false){
            return \Illuminate\Filesystem\FilesystemAdapter::files($directory, $recursive);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */
        public static function allFiles($directory = null){
            return \Illuminate\Filesystem\FilesystemAdapter::allFiles($directory);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */
        public static function directories($directory = null, $recursive = false){
            return \Illuminate\Filesystem\FilesystemAdapter::directories($directory, $recursive);
        }
        
        /**
         * Get all (recursive) of the directories within a given directory.
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */
        public static function allDirectories($directory = null){
            return \Illuminate\Filesystem\FilesystemAdapter::allDirectories($directory);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function makeDirectory($path){
            return \Illuminate\Filesystem\FilesystemAdapter::makeDirectory($path);
        }
        
        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */
        public static function deleteDirectory($directory){
            return \Illuminate\Filesystem\FilesystemAdapter::deleteDirectory($directory);
        }
        
        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemInterface 
         * @static 
         */
        public static function getDriver(){
            return \Illuminate\Filesystem\FilesystemAdapter::getDriver();
        }
        
    }


    class URL extends \Illuminate\Support\Facades\URL{
        
        /**
         * Get the full URL for the current request.
         *
         * @return string 
         * @static 
         */
        public static function full(){
            return \Illuminate\Routing\UrlGenerator::full();
        }
        
        /**
         * Get the current URL for the request.
         *
         * @return string 
         * @static 
         */
        public static function current(){
            return \Illuminate\Routing\UrlGenerator::current();
        }
        
        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string 
         * @static 
         */
        public static function previous($fallback = false){
            return \Illuminate\Routing\UrlGenerator::previous($fallback);
        }
        
        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string 
         * @static 
         */
        public static function to($path, $extra = array(), $secure = null){
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }
        
        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string 
         * @static 
         */
        public static function secure($path, $parameters = array()){
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }
        
        /**
         * Generate a URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */
        public static function asset($path, $secure = null){
            return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
        }
        
        /**
         * Generate a URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */
        public static function assetFrom($root, $path, $secure = null){
            return \Illuminate\Routing\UrlGenerator::assetFrom($root, $path, $secure);
        }
        
        /**
         * Generate a URL to a secure asset.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function secureAsset($path){
            return \Illuminate\Routing\UrlGenerator::secureAsset($path);
        }
        
        /**
         * Force the schema for URLs.
         *
         * @param string $schema
         * @return void 
         * @static 
         */
        public static function forceSchema($schema){
            \Illuminate\Routing\UrlGenerator::forceSchema($schema);
        }
        
        /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function route($name, $parameters = array(), $absolute = true){
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }
        
        /**
         * Get the URL to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function action($action, $parameters = array(), $absolute = true){
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }
        
        /**
         * Set the forced root URL.
         *
         * @param string $root
         * @return void 
         * @static 
         */
        public static function forceRootUrl($root){
            \Illuminate\Routing\UrlGenerator::forceRootUrl($root);
        }
        
        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function isValidUrl($path){
            return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
        }
        
        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */
        public static function getRequest(){
            return \Illuminate\Routing\UrlGenerator::getRequest();
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */
        public static function setRequest($request){
            \Illuminate\Routing\UrlGenerator::setRequest($request);
        }
        
        /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return $this 
         * @static 
         */
        public static function setRoutes($routes){
            return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
        }
        
        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return $this 
         * @static 
         */
        public static function setSessionResolver($sessionResolver){
            return \Illuminate\Routing\UrlGenerator::setSessionResolver($sessionResolver);
        }
        
        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return $this 
         * @static 
         */
        public static function setRootControllerNamespace($rootNamespace){
            return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Routing\UrlGenerator::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }
        
    }


    class Validator extends \Illuminate\Support\Facades\Validator{
        
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator 
         * @static 
         */
        public static function make($data, $rules, $messages = array(), $customAttributes = array()){
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */
        public static function extend($rule, $extension, $message = null){
            \Illuminate\Validation\Factory::extend($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */
        public static function extendImplicit($rule, $extension, $message = null){
            \Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void 
         * @static 
         */
        public static function replacer($rule, $replacer){
            \Illuminate\Validation\Factory::replacer($rule, $replacer);
        }
        
        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function resolver($resolver){
            \Illuminate\Validation\Factory::resolver($resolver);
        }
        
        /**
         * Get the Translator implementation.
         *
         * @return \Symfony\Component\Translation\TranslatorInterface 
         * @static 
         */
        public static function getTranslator(){
            return \Illuminate\Validation\Factory::getTranslator();
        }
        
        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface 
         * @static 
         */
        public static function getPresenceVerifier(){
            return \Illuminate\Validation\Factory::getPresenceVerifier();
        }
        
        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void 
         * @static 
         */
        public static function setPresenceVerifier($presenceVerifier){
            \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
        }
        
    }


    class View extends \Illuminate\Support\Facades\View{
        
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */
        public static function file($path, $data = array(), $mergeData = array()){
            return \Illuminate\View\Factory::file($path, $data, $mergeData);
        }
        
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */
        public static function make($view, $data = array(), $mergeData = array()){
            return \Illuminate\View\Factory::make($view, $data, $mergeData);
        }
        
        /**
         * Get the evaluated view contents for a named view.
         *
         * @param string $view
         * @param mixed $data
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */
        public static function of($view, $data = array()){
            return \Illuminate\View\Factory::of($view, $data);
        }
        
        /**
         * Register a named view.
         *
         * @param string $view
         * @param string $name
         * @return void 
         * @static 
         */
        public static function name($view, $name){
            \Illuminate\View\Factory::name($view, $name);
        }
        
        /**
         * Add an alias for a view.
         *
         * @param string $view
         * @param string $alias
         * @return void 
         * @static 
         */
        public static function alias($view, $alias){
            \Illuminate\View\Factory::alias($view, $alias);
        }
        
        /**
         * Determine if a given view exists.
         *
         * @param string $view
         * @return bool 
         * @static 
         */
        public static function exists($view){
            return \Illuminate\View\Factory::exists($view);
        }
        
        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string 
         * @static 
         */
        public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
            return \Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
        }
        
        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         * @return \Illuminate\View\Engines\EngineInterface 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function getEngineFromPath($path){
            return \Illuminate\View\Factory::getEngineFromPath($path);
        }
        
        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed $value
         * @return mixed 
         * @static 
         */
        public static function share($key, $value = null){
            return \Illuminate\View\Factory::share($key, $value);
        }
        
        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */
        public static function creator($views, $callback){
            return \Illuminate\View\Factory::creator($views, $callback);
        }
        
        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         * @return array 
         * @static 
         */
        public static function composers($composers){
            return \Illuminate\View\Factory::composers($composers);
        }
        
        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @param int|null $priority
         * @return array 
         * @static 
         */
        public static function composer($views, $callback, $priority = null){
            return \Illuminate\View\Factory::composer($views, $callback, $priority);
        }
        
        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */
        public static function callComposer($view){
            \Illuminate\View\Factory::callComposer($view);
        }
        
        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */
        public static function callCreator($view){
            \Illuminate\View\Factory::callCreator($view);
        }
        
        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */
        public static function startSection($section, $content = ''){
            \Illuminate\View\Factory::startSection($section, $content);
        }
        
        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */
        public static function inject($section, $content){
            \Illuminate\View\Factory::inject($section, $content);
        }
        
        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string 
         * @static 
         */
        public static function yieldSection(){
            return \Illuminate\View\Factory::yieldSection();
        }
        
        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function stopSection($overwrite = false){
            return \Illuminate\View\Factory::stopSection($overwrite);
        }
        
        /**
         * Stop injecting content into a section and append it.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function appendSection(){
            return \Illuminate\View\Factory::appendSection();
        }
        
        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */
        public static function yieldContent($section, $default = ''){
            return \Illuminate\View\Factory::yieldContent($section, $default);
        }
        
        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */
        public static function startPush($section, $content = ''){
            \Illuminate\View\Factory::startPush($section, $content);
        }
        
        /**
         * Stop injecting content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function stopPush(){
            return \Illuminate\View\Factory::stopPush();
        }
        
        /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */
        public static function yieldPushContent($section, $default = ''){
            return \Illuminate\View\Factory::yieldPushContent($section, $default);
        }
        
        /**
         * Flush all of the section contents.
         *
         * @return void 
         * @static 
         */
        public static function flushSections(){
            \Illuminate\View\Factory::flushSections();
        }
        
        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void 
         * @static 
         */
        public static function flushSectionsIfDoneRendering(){
            \Illuminate\View\Factory::flushSectionsIfDoneRendering();
        }
        
        /**
         * Increment the rendering counter.
         *
         * @return void 
         * @static 
         */
        public static function incrementRender(){
            \Illuminate\View\Factory::incrementRender();
        }
        
        /**
         * Decrement the rendering counter.
         *
         * @return void 
         * @static 
         */
        public static function decrementRender(){
            \Illuminate\View\Factory::decrementRender();
        }
        
        /**
         * Check if there are no active render operations.
         *
         * @return bool 
         * @static 
         */
        public static function doneRendering(){
            return \Illuminate\View\Factory::doneRendering();
        }
        
        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @return void 
         * @static 
         */
        public static function addLocation($location){
            \Illuminate\View\Factory::addLocation($location);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return void 
         * @static 
         */
        public static function addNamespace($namespace, $hints){
            \Illuminate\View\Factory::addNamespace($namespace, $hints);
        }
        
        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return void 
         * @static 
         */
        public static function prependNamespace($namespace, $hints){
            \Illuminate\View\Factory::prependNamespace($namespace, $hints);
        }
        
        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function addExtension($extension, $engine, $resolver = null){
            \Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
        }
        
        /**
         * Get the extension to engine bindings.
         *
         * @return array 
         * @static 
         */
        public static function getExtensions(){
            return \Illuminate\View\Factory::getExtensions();
        }
        
        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver 
         * @static 
         */
        public static function getEngineResolver(){
            return \Illuminate\View\Factory::getEngineResolver();
        }
        
        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface 
         * @static 
         */
        public static function getFinder(){
            return \Illuminate\View\Factory::getFinder();
        }
        
        /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
         * @return void 
         * @static 
         */
        public static function setFinder($finder){
            \Illuminate\View\Factory::setFinder($finder);
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getDispatcher(){
            return \Illuminate\View\Factory::getDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */
        public static function setDispatcher($events){
            \Illuminate\View\Factory::setDispatcher($events);
        }
        
        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */
        public static function getContainer(){
            return \Illuminate\View\Factory::getContainer();
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setContainer($container){
            \Illuminate\View\Factory::setContainer($container);
        }
        
        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function shared($key, $default = null){
            return \Illuminate\View\Factory::shared($key, $default);
        }
        
        /**
         * Get all of the shared data for the environment.
         *
         * @return array 
         * @static 
         */
        public static function getShared(){
            return \Illuminate\View\Factory::getShared();
        }
        
        /**
         * Check if section exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasSection($name){
            return \Illuminate\View\Factory::hasSection($name);
        }
        
        /**
         * Get the entire array of sections.
         *
         * @return array 
         * @static 
         */
        public static function getSections(){
            return \Illuminate\View\Factory::getSections();
        }
        
        /**
         * Get all of the registered named views in environment.
         *
         * @return array 
         * @static 
         */
        public static function getNames(){
            return \Illuminate\View\Factory::getNames();
        }
        
    }


    class Debugbar extends \Barryvdh\Debugbar\Facade{
        
        /**
         * Enable the Debugbar and boot, if not already booted.
         *
         * @static 
         */
        public static function enable(){
            return \Barryvdh\Debugbar\LaravelDebugbar::enable();
        }
        
        /**
         * Boot the debugbar (add collectors, renderer and listener)
         *
         * @static 
         */
        public static function boot(){
            return \Barryvdh\Debugbar\LaravelDebugbar::boot();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function shouldCollect($name, $default = false){
            return \Barryvdh\Debugbar\LaravelDebugbar::shouldCollect($name, $default);
        }
        
        /**
         * Starts a measure
         *
         * @param string $name Internal name, used to stop the measure
         * @param string $label Public name
         * @static 
         */
        public static function startMeasure($name, $label = null){
            return \Barryvdh\Debugbar\LaravelDebugbar::startMeasure($name, $label);
        }
        
        /**
         * Stops a measure
         *
         * @param string $name
         * @static 
         */
        public static function stopMeasure($name){
            return \Barryvdh\Debugbar\LaravelDebugbar::stopMeasure($name);
        }
        
        /**
         * Adds an exception to be profiled in the debug bar
         *
         * @param \Exception $e
         * @static 
         */
        public static function addException($e){
            return \Barryvdh\Debugbar\LaravelDebugbar::addException($e);
        }
        
        /**
         * Returns a JavascriptRenderer for this instance
         *
         * @param string $baseUrl
         * @param string $basePathng
         * @return \Barryvdh\Debugbar\JavascriptRenderer 
         * @static 
         */
        public static function getJavascriptRenderer($baseUrl = null, $basePath = null){
            return \Barryvdh\Debugbar\LaravelDebugbar::getJavascriptRenderer($baseUrl, $basePath);
        }
        
        /**
         * Modify the response and inject the debugbar (or data in headers)
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param \Symfony\Component\HttpFoundation\Response $response
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function modifyResponse($request, $response){
            return \Barryvdh\Debugbar\LaravelDebugbar::modifyResponse($request, $response);
        }
        
        /**
         * Check if the Debugbar is enabled
         *
         * @return boolean 
         * @static 
         */
        public static function isEnabled(){
            return \Barryvdh\Debugbar\LaravelDebugbar::isEnabled();
        }
        
        /**
         * Collects the data from the collectors
         *
         * @return array 
         * @static 
         */
        public static function collect(){
            return \Barryvdh\Debugbar\LaravelDebugbar::collect();
        }
        
        /**
         * Injects the web debug toolbar into the given Response.
         *
         * @param \Symfony\Component\HttpFoundation\Response $response A Response instance
         * Based on https://github.com/symfony/WebProfilerBundle/blob/master/EventListener/WebDebugToolbarListener.php
         * @static 
         */
        public static function injectDebugbar($response){
            return \Barryvdh\Debugbar\LaravelDebugbar::injectDebugbar($response);
        }
        
        /**
         * Disable the Debugbar
         *
         * @static 
         */
        public static function disable(){
            return \Barryvdh\Debugbar\LaravelDebugbar::disable();
        }
        
        /**
         * Adds a measure
         *
         * @param string $label
         * @param float $start
         * @param float $end
         * @static 
         */
        public static function addMeasure($label, $start, $end){
            return \Barryvdh\Debugbar\LaravelDebugbar::addMeasure($label, $start, $end);
        }
        
        /**
         * Utility function to measure the execution of a Closure
         *
         * @param string $label
         * @param \Closure $closure
         * @static 
         */
        public static function measure($label, $closure){
            return \Barryvdh\Debugbar\LaravelDebugbar::measure($label, $closure);
        }
        
        /**
         * Collect data in a CLI request
         *
         * @return array 
         * @static 
         */
        public static function collectConsole(){
            return \Barryvdh\Debugbar\LaravelDebugbar::collectConsole();
        }
        
        /**
         * Adds a message to the MessagesCollector
         * 
         * A message can be anything from an object to a string
         *
         * @param mixed $message
         * @param string $label
         * @static 
         */
        public static function addMessage($message, $label = 'info'){
            return \Barryvdh\Debugbar\LaravelDebugbar::addMessage($message, $label);
        }
        
        /**
         * Adds a data collector
         *
         * @param \DebugBar\DataCollectorInterface $collector
         * @throws DebugBarException
         * @return $this 
         * @static 
         */
        public static function addCollector($collector){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::addCollector($collector);
        }
        
        /**
         * Checks if a data collector has been added
         *
         * @param string $name
         * @return boolean 
         * @static 
         */
        public static function hasCollector($name){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::hasCollector($name);
        }
        
        /**
         * Returns a data collector
         *
         * @param string $name
         * @return \DebugBar\DataCollectorInterface 
         * @static 
         */
        public static function getCollector($name){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getCollector($name);
        }
        
        /**
         * Returns an array of all data collectors
         *
         * @return \DebugBar\array[DataCollectorInterface] 
         * @static 
         */
        public static function getCollectors(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getCollectors();
        }
        
        /**
         * Sets the request id generator
         *
         * @param \DebugBar\RequestIdGeneratorInterface $generator
         * @static 
         */
        public static function setRequestIdGenerator($generator){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setRequestIdGenerator($generator);
        }
        
        /**
         * 
         *
         * @return \DebugBar\RequestIdGeneratorInterface 
         * @static 
         */
        public static function getRequestIdGenerator(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getRequestIdGenerator();
        }
        
        /**
         * Returns the id of the current request
         *
         * @return string 
         * @static 
         */
        public static function getCurrentRequestId(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getCurrentRequestId();
        }
        
        /**
         * Sets the storage backend to use to store the collected data
         *
         * @param \DebugBar\StorageInterface $storage
         * @static 
         */
        public static function setStorage($storage = null){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setStorage($storage);
        }
        
        /**
         * 
         *
         * @return \DebugBar\StorageInterface 
         * @static 
         */
        public static function getStorage(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getStorage();
        }
        
        /**
         * Checks if the data will be persisted
         *
         * @return boolean 
         * @static 
         */
        public static function isDataPersisted(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::isDataPersisted();
        }
        
        /**
         * Sets the HTTP driver
         *
         * @param \DebugBar\HttpDriverInterface $driver
         * @static 
         */
        public static function setHttpDriver($driver){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setHttpDriver($driver);
        }
        
        /**
         * Returns the HTTP driver
         * 
         * If no http driver where defined, a PhpHttpDriver is automatically created
         *
         * @return \DebugBar\HttpDriverInterface 
         * @static 
         */
        public static function getHttpDriver(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getHttpDriver();
        }
        
        /**
         * Returns collected data
         * 
         * Will collect the data if none have been collected yet
         *
         * @return array 
         * @static 
         */
        public static function getData(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getData();
        }
        
        /**
         * Returns an array of HTTP headers containing the data
         *
         * @param string $headerName
         * @param integer $maxHeaderLength
         * @return array 
         * @static 
         */
        public static function getDataAsHeaders($headerName = 'phpdebugbar', $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getDataAsHeaders($headerName, $maxHeaderLength, $maxTotalHeaderLength);
        }
        
        /**
         * Sends the data through the HTTP headers
         *
         * @param bool $useOpenHandler
         * @param string $headerName
         * @param integer $maxHeaderLength
         * @static 
         */
        public static function sendDataInHeaders($useOpenHandler = null, $headerName = 'phpdebugbar', $maxHeaderLength = 4096){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::sendDataInHeaders($useOpenHandler, $headerName, $maxHeaderLength);
        }
        
        /**
         * Stacks the data in the session for later rendering
         *
         * @static 
         */
        public static function stackData(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::stackData();
        }
        
        /**
         * Checks if there is stacked data in the session
         *
         * @return boolean 
         * @static 
         */
        public static function hasStackedData(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::hasStackedData();
        }
        
        /**
         * Returns the data stacked in the session
         *
         * @param boolean $delete Whether to delete the data in the session
         * @return array 
         * @static 
         */
        public static function getStackedData($delete = true){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getStackedData($delete);
        }
        
        /**
         * Sets the key to use in the $_SESSION array
         *
         * @param string $ns
         * @static 
         */
        public static function setStackDataSessionNamespace($ns){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setStackDataSessionNamespace($ns);
        }
        
        /**
         * Returns the key used in the $_SESSION array
         *
         * @return string 
         * @static 
         */
        public static function getStackDataSessionNamespace(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getStackDataSessionNamespace();
        }
        
        /**
         * Sets whether to only use the session to store stacked data even
         * if a storage is enabled
         *
         * @param boolean $enabled
         * @static 
         */
        public static function setStackAlwaysUseSessionStorage($enabled = true){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setStackAlwaysUseSessionStorage($enabled);
        }
        
        /**
         * Checks if the session is always used to store stacked data
         * even if a storage is enabled
         *
         * @return boolean 
         * @static 
         */
        public static function isStackAlwaysUseSessionStorage(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::isStackAlwaysUseSessionStorage();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($key, $value){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::offsetSet($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($key){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::offsetGet($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($key){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::offsetExists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($key){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::offsetUnset($key);
        }
        
    }


    class Excel extends \Maatwebsite\Excel\Facades\Excel{
        
        /**
         * Create a new file
         *
         * @param $filename
         * @param callable|null $callback
         * @return \Maatwebsite\Excel\LaravelExcelWriter 
         * @static 
         */
        public static function create($filename, $callback = null){
            return \Maatwebsite\Excel\Excel::create($filename, $callback);
        }
        
        /**
         * Load an existing file
         *
         * @param string $file The file we want to load
         * @param callback|null $callback
         * @param string|null $encoding
         * @param bool $noBasePath
         * @return \Maatwebsite\Excel\LaravelExcelReader 
         * @static 
         */
        public static function load($file, $callback = null, $encoding = null, $noBasePath = false, $callbackConfigReader = null){
            return \Maatwebsite\Excel\Excel::load($file, $callback, $encoding, $noBasePath, $callbackConfigReader);
        }
        
        /**
         * Set select sheets
         *
         * @param $sheets
         * @return \Maatwebsite\Excel\LaravelExcelReader 
         * @static 
         */
        public static function selectSheets($sheets = array()){
            return \Maatwebsite\Excel\Excel::selectSheets($sheets);
        }
        
        /**
         * Select sheets by index
         *
         * @param array $sheets
         * @return $this 
         * @static 
         */
        public static function selectSheetsByIndex($sheets = array()){
            return \Maatwebsite\Excel\Excel::selectSheetsByIndex($sheets);
        }
        
        /**
         * Batch import
         *
         * @param $files
         * @param callback $callback
         * @return \PHPExcel 
         * @static 
         */
        public static function batch($files, $callback){
            return \Maatwebsite\Excel\Excel::batch($files, $callback);
        }
        
        /**
         * Create a new file and share a view
         *
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return \Maatwebsite\Excel\LaravelExcelWriter 
         * @static 
         */
        public static function shareView($view, $data = array(), $mergeData = array()){
            return \Maatwebsite\Excel\Excel::shareView($view, $data, $mergeData);
        }
        
        /**
         * Create a new file and load a view
         *
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return \Maatwebsite\Excel\LaravelExcelWriter 
         * @static 
         */
        public static function loadView($view, $data = array(), $mergeData = array()){
            return \Maatwebsite\Excel\Excel::loadView($view, $data, $mergeData);
        }
        
        /**
         * Set filters
         *
         * @param array $filters
         * @return \Excel 
         * @static 
         */
        public static function registerFilters($filters = array()){
            return \Maatwebsite\Excel\Excel::registerFilters($filters);
        }
        
        /**
         * Enable certain filters
         *
         * @param string|array $filter
         * @param bool|false|string $class
         * @return \Excel 
         * @static 
         */
        public static function filter($filter, $class = false){
            return \Maatwebsite\Excel\Excel::filter($filter, $class);
        }
        
        /**
         * Get register, enabled (or both) filters
         *
         * @param string|boolean $key [description]
         * @return array 
         * @static 
         */
        public static function getFilters($key = false){
            return \Maatwebsite\Excel\Excel::getFilters($key);
        }
        
    }


    class Form extends \Collective\Html\FormFacade{
        
        /**
         * Open up a new HTML form.
         *
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function open($options = array()){
            return \Collective\Html\FormBuilder::open($options);
        }
        
        /**
         * Create a new model based form builder.
         *
         * @param mixed $model
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function model($model, $options = array()){
            return \Collective\Html\FormBuilder::model($model, $options);
        }
        
        /**
         * Set the model instance on the form builder.
         *
         * @param mixed $model
         * @return void 
         * @static 
         */
        public static function setModel($model){
            \Collective\Html\FormBuilder::setModel($model);
        }
        
        /**
         * Close the current form.
         *
         * @return string 
         * @static 
         */
        public static function close(){
            return \Collective\Html\FormBuilder::close();
        }
        
        /**
         * Generate a hidden field with the current CSRF token.
         *
         * @return string 
         * @static 
         */
        public static function token(){
            return \Collective\Html\FormBuilder::token();
        }
        
        /**
         * Create a form label element.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function label($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::label($name, $value, $options);
        }
        
        /**
         * Create a form input field.
         *
         * @param string $type
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function input($type, $name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::input($type, $name, $value, $options);
        }
        
        /**
         * Create a text input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function text($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::text($name, $value, $options);
        }
        
        /**
         * Create a password input field.
         *
         * @param string $name
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function password($name, $options = array()){
            return \Collective\Html\FormBuilder::password($name, $options);
        }
        
        /**
         * Create a hidden input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function hidden($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::hidden($name, $value, $options);
        }
        
        /**
         * Create an e-mail input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function email($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::email($name, $value, $options);
        }
        
        /**
         * Create a tel input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function tel($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::tel($name, $value, $options);
        }
        
        /**
         * Create a number input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function number($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::number($name, $value, $options);
        }
        
        /**
         * Create a date input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function date($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::date($name, $value, $options);
        }
        
        /**
         * Create a datetime input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function datetime($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::datetime($name, $value, $options);
        }
        
        /**
         * Create a datetime-local input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function datetimeLocal($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::datetimeLocal($name, $value, $options);
        }
        
        /**
         * Create a time input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function time($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::time($name, $value, $options);
        }
        
        /**
         * Create a url input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function url($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::url($name, $value, $options);
        }
        
        /**
         * Create a file input field.
         *
         * @param string $name
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function file($name, $options = array()){
            return \Collective\Html\FormBuilder::file($name, $options);
        }
        
        /**
         * Create a textarea input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function textarea($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::textarea($name, $value, $options);
        }
        
        /**
         * Create a select box field.
         *
         * @param string $name
         * @param array $list
         * @param string $selected
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function select($name, $list = array(), $selected = null, $options = array()){
            return \Collective\Html\FormBuilder::select($name, $list, $selected, $options);
        }
        
        /**
         * Create a select range field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function selectRange($name, $begin, $end, $selected = null, $options = array()){
            return \Collective\Html\FormBuilder::selectRange($name, $begin, $end, $selected, $options);
        }
        
        /**
         * Create a select year field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return mixed 
         * @static 
         */
        public static function selectYear(){
            return \Collective\Html\FormBuilder::selectYear();
        }
        
        /**
         * Create a select month field.
         *
         * @param string $name
         * @param string $selected
         * @param array $options
         * @param string $format
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function selectMonth($name, $selected = null, $options = array(), $format = '%B'){
            return \Collective\Html\FormBuilder::selectMonth($name, $selected, $options, $format);
        }
        
        /**
         * Get the select option for the given value.
         *
         * @param string $display
         * @param string $value
         * @param string $selected
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function getSelectOption($display, $value, $selected){
            return \Collective\Html\FormBuilder::getSelectOption($display, $value, $selected);
        }
        
        /**
         * Create a checkbox input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function checkbox($name, $value = 1, $checked = null, $options = array()){
            return \Collective\Html\FormBuilder::checkbox($name, $value, $checked, $options);
        }
        
        /**
         * Create a radio button input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function radio($name, $value = null, $checked = null, $options = array()){
            return \Collective\Html\FormBuilder::radio($name, $value, $checked, $options);
        }
        
        /**
         * Create a HTML reset input element.
         *
         * @param string $value
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function reset($value, $attributes = array()){
            return \Collective\Html\FormBuilder::reset($value, $attributes);
        }
        
        /**
         * Create a HTML image input element.
         *
         * @param string $url
         * @param string $name
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function image($url, $name = null, $attributes = array()){
            return \Collective\Html\FormBuilder::image($url, $name, $attributes);
        }
        
        /**
         * Create a color input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function color($name, $value = null, $options = array()){
            return \Collective\Html\FormBuilder::color($name, $value, $options);
        }
        
        /**
         * Create a submit button element.
         *
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function submit($value = null, $options = array()){
            return \Collective\Html\FormBuilder::submit($value, $options);
        }
        
        /**
         * Create a button element.
         *
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function button($value = null, $options = array()){
            return \Collective\Html\FormBuilder::button($value, $options);
        }
        
        /**
         * Get the ID attribute for a field name.
         *
         * @param string $name
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function getIdAttribute($name, $attributes){
            return \Collective\Html\FormBuilder::getIdAttribute($name, $attributes);
        }
        
        /**
         * Get the value that should be assigned to the field.
         *
         * @param string $name
         * @param string $value
         * @return mixed 
         * @static 
         */
        public static function getValueAttribute($name, $value = null){
            return \Collective\Html\FormBuilder::getValueAttribute($name, $value);
        }
        
        /**
         * Get a value from the session's old input.
         *
         * @param string $name
         * @return mixed 
         * @static 
         */
        public static function old($name){
            return \Collective\Html\FormBuilder::old($name);
        }
        
        /**
         * Determine if the old input is empty.
         *
         * @return bool 
         * @static 
         */
        public static function oldInputIsEmpty(){
            return \Collective\Html\FormBuilder::oldInputIsEmpty();
        }
        
        /**
         * Get the session store implementation.
         *
         * @return \Illuminate\Session\SessionInterface $session
         * @static 
         */
        public static function getSessionStore(){
            return \Collective\Html\FormBuilder::getSessionStore();
        }
        
        /**
         * Set the session store implementation.
         *
         * @param \Illuminate\Session\SessionInterface $session
         * @return $this 
         * @static 
         */
        public static function setSessionStore($session){
            return \Collective\Html\FormBuilder::setSessionStore($session);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Collective\Html\FormBuilder::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Collective\Html\FormBuilder::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */
        public static function macroCall($method, $parameters){
            return \Collective\Html\FormBuilder::macroCall($method, $parameters);
        }
        
        /**
         * Register a custom component.
         *
         * @param $name
         * @param $view
         * @param array $signature
         * @return void 
         * @static 
         */
        public static function component($name, $view, $signature){
            \Collective\Html\FormBuilder::component($name, $view, $signature);
        }
        
        /**
         * Check if a component is registered.
         *
         * @param $name
         * @return bool 
         * @static 
         */
        public static function hasComponent($name){
            return \Collective\Html\FormBuilder::hasComponent($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Contracts\View\View|mixed 
         * @throws \BadMethodCallException
         * @static 
         */
        public static function componentCall($method, $parameters){
            return \Collective\Html\FormBuilder::componentCall($method, $parameters);
        }
        
    }


    class Html extends \Collective\Html\HtmlFacade{
        
        /**
         * Convert an HTML string to entities.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function entities($value){
            return \Collective\Html\HtmlBuilder::entities($value);
        }
        
        /**
         * Convert entities to HTML characters.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function decode($value){
            return \Collective\Html\HtmlBuilder::decode($value);
        }
        
        /**
         * Generate a link to a JavaScript file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function script($url, $attributes = array(), $secure = null){
            return \Collective\Html\HtmlBuilder::script($url, $attributes, $secure);
        }
        
        /**
         * Generate a link to a CSS file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function style($url, $attributes = array(), $secure = null){
            return \Collective\Html\HtmlBuilder::style($url, $attributes, $secure);
        }
        
        /**
         * Generate an HTML image element.
         *
         * @param string $url
         * @param string $alt
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function image($url, $alt = null, $attributes = array(), $secure = null){
            return \Collective\Html\HtmlBuilder::image($url, $alt, $attributes, $secure);
        }
        
        /**
         * Generate a link to a Favicon file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function favicon($url, $attributes = array(), $secure = null){
            return \Collective\Html\HtmlBuilder::favicon($url, $attributes, $secure);
        }
        
        /**
         * Generate a HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function link($url, $title = null, $attributes = array(), $secure = null){
            return \Collective\Html\HtmlBuilder::link($url, $title, $attributes, $secure);
        }
        
        /**
         * Generate a HTTPS HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function secureLink($url, $title = null, $attributes = array()){
            return \Collective\Html\HtmlBuilder::secureLink($url, $title, $attributes);
        }
        
        /**
         * Generate a HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function linkAsset($url, $title = null, $attributes = array(), $secure = null){
            return \Collective\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure);
        }
        
        /**
         * Generate a HTTPS HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function linkSecureAsset($url, $title = null, $attributes = array()){
            return \Collective\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes);
        }
        
        /**
         * Generate a HTML link to a named route.
         *
         * @param string $name
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array()){
            return \Collective\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes);
        }
        
        /**
         * Generate a HTML link to a controller action.
         *
         * @param string $action
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function linkAction($action, $title = null, $parameters = array(), $attributes = array()){
            return \Collective\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes);
        }
        
        /**
         * Generate a HTML link to an email address.
         *
         * @param string $email
         * @param string $title
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function mailto($email, $title = null, $attributes = array()){
            return \Collective\Html\HtmlBuilder::mailto($email, $title, $attributes);
        }
        
        /**
         * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
         *
         * @param string $email
         * @return string 
         * @static 
         */
        public static function email($email){
            return \Collective\Html\HtmlBuilder::email($email);
        }
        
        /**
         * Generate an ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string 
         * @static 
         */
        public static function ol($list, $attributes = array()){
            return \Collective\Html\HtmlBuilder::ol($list, $attributes);
        }
        
        /**
         * Generate an un-ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string 
         * @static 
         */
        public static function ul($list, $attributes = array()){
            return \Collective\Html\HtmlBuilder::ul($list, $attributes);
        }
        
        /**
         * Generate a description list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function dl($list, $attributes = array()){
            return \Collective\Html\HtmlBuilder::dl($list, $attributes);
        }
        
        /**
         * Build an HTML attribute string from an array.
         *
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function attributes($attributes){
            return \Collective\Html\HtmlBuilder::attributes($attributes);
        }
        
        /**
         * Obfuscate a string to prevent spam-bots from sniffing it.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function obfuscate($value){
            return \Collective\Html\HtmlBuilder::obfuscate($value);
        }
        
        /**
         * Generate a meta tag.
         *
         * @param string $name
         * @param string $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function meta($name, $content, $attributes = array()){
            return \Collective\Html\HtmlBuilder::meta($name, $content, $attributes);
        }
        
        /**
         * Generate an html tag.
         *
         * @param string $tag
         * @param mixed $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */
        public static function tag($tag, $content, $attributes = array()){
            return \Collective\Html\HtmlBuilder::tag($tag, $content, $attributes);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Collective\Html\HtmlBuilder::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Collective\Html\HtmlBuilder::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */
        public static function macroCall($method, $parameters){
            return \Collective\Html\HtmlBuilder::macroCall($method, $parameters);
        }
        
        /**
         * Register a custom component.
         *
         * @param $name
         * @param $view
         * @param array $signature
         * @return void 
         * @static 
         */
        public static function component($name, $view, $signature){
            \Collective\Html\HtmlBuilder::component($name, $view, $signature);
        }
        
        /**
         * Check if a component is registered.
         *
         * @param $name
         * @return bool 
         * @static 
         */
        public static function hasComponent($name){
            return \Collective\Html\HtmlBuilder::hasComponent($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Contracts\View\View|mixed 
         * @throws \BadMethodCallException
         * @static 
         */
        public static function componentCall($method, $parameters){
            return \Collective\Html\HtmlBuilder::componentCall($method, $parameters);
        }
        
    }


    class Image extends \Intervention\Image\Facades\Image{
        
        /**
         * Overrides configuration settings
         *
         * @param array $config
         * @static 
         */
        public static function configure($config = array()){
            return \Intervention\Image\ImageManager::configure($config);
        }
        
        /**
         * Initiates an Image instance from different input types
         *
         * @param mixed $data
         * @return \Intervention\Image\Image 
         * @static 
         */
        public static function make($data){
            return \Intervention\Image\ImageManager::make($data);
        }
        
        /**
         * Creates an empty image canvas
         *
         * @param integer $width
         * @param integer $height
         * @param mixed $background
         * @return \Intervention\Image\Image 
         * @static 
         */
        public static function canvas($width, $height, $background = null){
            return \Intervention\Image\ImageManager::canvas($width, $height, $background);
        }
        
        /**
         * Create new cached image and run callback
         * (requires additional package intervention/imagecache)
         *
         * @param \Closure $callback
         * @param integer $lifetime
         * @param boolean $returnObj
         * @return \Image 
         * @static 
         */
        public static function cache($callback, $lifetime = null, $returnObj = false){
            return \Intervention\Image\ImageManager::cache($callback, $lifetime, $returnObj);
        }
        
    }


    class Flash extends \App\Facades\Flash{
        
        /**
         * インフォメーション.
         *
         * @param string|array $message
         * @return $this 
         * @static 
         */
        public static function info($message){
            return \App\Libs\Flash::info($message);
        }
        
        /**
         * 成功メッセージ.
         *
         * @param string|array $message
         * @return $this 
         * @static 
         */
        public static function success($message){
            return \App\Libs\Flash::success($message);
        }
        
        /**
         * 注意メッセージ.
         *
         * @param string|array $message
         * @return $this 
         * @static 
         */
        public static function warning($message){
            return \App\Libs\Flash::warning($message);
        }
        
        /**
         * エラーメッセージ.
         *
         * @param string|array $message
         * @return $this 
         * @static 
         */
        public static function error($message){
            return \App\Libs\Flash::error($message);
        }
        
        /**
         * Flash an modal.
         *
         * @param string $message
         * @param string $title
         * @return $this 
         * @static 
         */
        public static function modal($message, $title = ''){
            return \App\Libs\Flash::modal($message, $title);
        }
        
    }


    class Pdf extends \App\Facades\Pdf{
        
        /**
         * Set a source-file.
         * 
         * Depending on the PDF version of the used document the PDF version of the resulting document will
         * be adjusted to the higher version.
         *
         * @param string $filename A valid path to the PDF document from which pages should be imported from
         * @return int The number of pages in the document
         * @static 
         */
        public static function setSourceFile($filename){
            //Method inherited from \FPDI            
            return \App\Libs\Pdf::setSourceFile($filename);
        }
        
        /**
         * Get the current PDF version.
         *
         * @return string 
         * @static 
         */
        public static function getPdfVersion(){
            //Method inherited from \FPDI            
            return \App\Libs\Pdf::getPdfVersion();
        }
        
        /**
         * Set the PDF version.
         *
         * @param string $version
         * @static 
         */
        public static function setPdfVersion($version = '1.3'){
            //Method inherited from \FPDI            
            return \App\Libs\Pdf::setPdfVersion($version);
        }
        
        /**
         * Import a page.
         * 
         * The second parameter defines the bounding box that should be used to transform the page into a
         * form XObject.
         * 
         * Following values are available: MediaBox, CropBox, BleedBox, TrimBox, ArtBox.
         * If a box is not especially defined its default box will be used:
         * 
         * <ul>
         *   <li>CropBox: Default -> MediaBox</li>
         *   <li>BleedBox: Default -> CropBox</li>
         *   <li>TrimBox: Default -> CropBox</li>
         *   <li>ArtBox: Default -> CropBox</li>
         * </ul>
         * 
         * It is possible to get the used page box by the {@link getLastUsedPageBox()} method.
         *
         * @param int $pageNo The page number
         * @param string $boxName The boundary box to use when transforming the page into a form XObject
         * @param boolean $groupXObject Define the form XObject as a group XObject to support transparency (if used)
         * @return int An id of the imported page/template to use with e.g. fpdf_tpl::useTemplate()
         * @throws LogicException|InvalidArgumentException
         * @see getLastUsedPageBox()
         * @static 
         */
        public static function importPage($pageNo, $boxName = 'CropBox', $groupXObject = true){
            //Method inherited from \FPDI            
            return \App\Libs\Pdf::importPage($pageNo, $boxName, $groupXObject);
        }
        
        /**
         * Returns the last used page boundary box.
         *
         * @return string The used boundary box: MediaBox, CropBox, BleedBox, TrimBox or ArtBox
         * @static 
         */
        public static function getLastUsedPageBox(){
            //Method inherited from \FPDI            
            return \App\Libs\Pdf::getLastUsedPageBox();
        }
        
        /**
         * Use a template or imported page in current page or other template.
         * 
         * You can use a template in a page or in another template.
         * You can give the used template a new size. All parameters are optional.
         * The width or height is calculated automatically if one is given. If no
         * parameter is given the origin size as defined in beginTemplate() or of
         * the imported page is used.
         * 
         * The calculated or used width and height are returned as an array.
         *
         * @param int $tplIdx A valid template-id
         * @param int $x The x-position
         * @param int $y The y-position
         * @param int $w The new width of the template
         * @param int $h The new height of the template
         * @param boolean $adjustPageSize If set to true the current page will be resized to fit the dimensions
         *                                of the template
         * @return array The height and width of the template (array('w' => ..., 'h' => ...))
         * @throws LogicException|InvalidArgumentException
         * @static 
         */
        public static function useTemplate($tplIdx, $x = null, $y = null, $w = 0, $h = 0, $adjustPageSize = false){
            //Method inherited from \FPDI            
            return \App\Libs\Pdf::useTemplate($tplIdx, $x, $y, $w, $h, $adjustPageSize);
        }
        
        /**
         * Creates and optionally write the object definition to the document.
         * 
         * Rewritten to handle existing own defined objects
         *
         * @param bool $objId
         * @param bool $onlyNewObj
         * @return bool|int 
         * @static 
         */
        public static function _newobj($objId = false, $onlyNewObj = false){
            //Method inherited from \FPDI            
            return \App\Libs\Pdf::_newobj($objId, $onlyNewObj);
        }
        
        /**
         * Ends the document
         * 
         * Overwritten to close opened parsers
         *
         * @static 
         */
        public static function _enddoc(){
            //Method inherited from \FPDI            
            return \App\Libs\Pdf::_enddoc();
        }
        
        /**
         * Removes cycled references and closes the file handles of the parser objects.
         *
         * @static 
         */
        public static function cleanUp(){
            //Method inherited from \FPDI            
            return \App\Libs\Pdf::cleanUp();
        }
        
        /**
         * Start a template.
         * 
         * This method starts a template. You can give own coordinates to build an own sized
         * template. Pay attention, that the margins are adapted to the new template size.
         * If you want to write outside the template, for example to build a clipped template,
         * you have to set the margins and "cursor"-position manual after beginTemplate()-call.
         * 
         * If no parameter is given, the template uses the current page-size.
         * The method returns an id of the current template. This id is used later for using this template.
         * Warning: A created template is saved in the resulting PDF at all events. Also if you don't use it after creation!
         *
         * @param int $x The x-coordinate given in user-unit
         * @param int $y The y-coordinate given in user-unit
         * @param int $w The width given in user-unit
         * @param int $h The height given in user-unit
         * @return int The id of new created template
         * @throws LogicException
         * @static 
         */
        public static function beginTemplate($x = null, $y = null, $w = null, $h = null){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::beginTemplate($x, $y, $w, $h);
        }
        
        /**
         * End template.
         * 
         * This method ends a template and reset initiated variables collected in {@link beginTemplate()}.
         *
         * @return int|boolean If a template is opened, the id is returned. If not a false is returned.
         * @static 
         */
        public static function endTemplate(){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::endTemplate();
        }
        
        /**
         * Get the calculated size of a template.
         * 
         * If one size is given, this method calculates the other one.
         *
         * @param int $tplIdx A valid template-id
         * @param int $w The width of the template
         * @param int $h The height of the template
         * @return array The height and width of the template (array('w' => ..., 'h' => ...))
         * @static 
         */
        public static function getTemplateSize($tplIdx, $w = 0, $h = 0){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::getTemplateSize($tplIdx, $w, $h);
        }
        
        /**
         * Sets the font used to print character strings.
         * 
         * See FPDF/TCPDF documentation.
         *
         * @see http://fpdf.org/en/doc/setfont.htm
         * @see http://www.tcpdf.org/doc/code/classTCPDF.html#afd56e360c43553830d543323e81bc045
         * @static 
         */
        public static function SetFont($family, $style = '', $size = null, $fontfile = '', $subset = 'default', $out = true){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::SetFont($family, $style, $size, $fontfile, $subset, $out);
        }
        
        /**
         * Puts an image.
         * 
         * See FPDF/TCPDF documentation.
         *
         * @see http://fpdf.org/en/doc/image.htm
         * @see http://www.tcpdf.org/doc/code/classTCPDF.html#a714c2bee7d6b39d4d6d304540c761352
         * @static 
         */
        public static function Image($file, $x = '', $y = '', $w = 0, $h = 0, $type = '', $link = '', $align = '', $resize = false, $dpi = 300, $palign = '', $ismask = false, $imgmask = false, $border = 0, $fitbox = false, $hidden = false, $fitonpage = false, $alt = false, $altimgs = array()){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::Image($file, $x, $y, $w, $h, $type, $link, $align, $resize, $dpi, $palign, $ismask, $imgmask, $border, $fitbox, $hidden, $fitonpage, $alt, $altimgs);
        }
        
        /**
         * Adds a new page to the document.
         * 
         * See FPDF/TCPDF documentation.
         * 
         * This method cannot be used if you'd started a template.
         *
         * @see http://fpdf.org/en/doc/addpage.htm
         * @see http://www.tcpdf.org/doc/code/classTCPDF.html#a5171e20b366b74523709d84c349c1ced
         * @static 
         */
        public static function AddPage($orientation = '', $format = '', $rotationOrKeepmargins = false, $tocpage = false){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::AddPage($orientation, $format, $rotationOrKeepmargins, $tocpage);
        }
        
        /**
         * Puts a link on a rectangular area of the page.
         * 
         * Overwritten because adding links in a template will not work.
         *
         * @see http://fpdf.org/en/doc/link.htm
         * @see http://www.tcpdf.org/doc/code/classTCPDF.html#ab87bf1826384fbfe30eb499d42f1d994
         * @static 
         */
        public static function Link($x, $y, $w, $h, $link, $spaces = 0){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::Link($x, $y, $w, $h, $link, $spaces);
        }
        
        /**
         * Creates a new internal link and returns its identifier.
         * 
         * Overwritten because adding links in a template will not work.
         *
         * @see http://fpdf.org/en/doc/addlink.htm
         * @see http://www.tcpdf.org/doc/code/classTCPDF.html#a749522038ed7786c3e1701435dcb891e
         * @static 
         */
        public static function AddLink(){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::AddLink();
        }
        
        /**
         * Defines the page and position a link points to.
         * 
         * Overwritten because adding links in a template will not work.
         *
         * @see http://fpdf.org/en/doc/setlink.htm
         * @see http://www.tcpdf.org/doc/code/classTCPDF.html#ace5be60e7857953ea5e2b89cb90df0ae
         * @static 
         */
        public static function SetLink($link, $y = 0, $page = -1){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::SetLink($link, $y, $page);
        }
        
        /**
         * Output images.
         * 
         * Overwritten to add {@link _putformxobjects()} after _putimages().
         *
         * @static 
         */
        public static function _putimages(){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::_putimages();
        }
        
        /**
         * Writes the references of XObject resources to the document.
         * 
         * Overwritten to add the the templates to the XObject resource dictionary.
         *
         * @static 
         */
        public static function _putxobjectdict(){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::_putxobjectdict();
        }
        
        /**
         * Writes bytes to the resulting document.
         * 
         * Overwritten to delegate the data to the template buffer.
         *
         * @param string $s
         * @static 
         */
        public static function _out($s){
            //Method inherited from \FPDF_TPL            
            return \App\Libs\Pdf::_out($s);
        }
        
        /**
         * Hexadecimal to string
         *
         * @param string $data
         * @return string 
         * @static 
         */
        public static function hex2str($data){
            //Method inherited from \fpdi_bridge            
            return \App\Libs\Pdf::hex2str($data);
        }
        
        /**
         * String to hexadecimal
         *
         * @param string $str
         * @return string 
         * @static 
         */
        public static function str2hex($str){
            //Method inherited from \fpdi_bridge            
            return \App\Libs\Pdf::str2hex($str);
        }
        
        /**
         * Set the units of measure for the document.
         *
         * @param $unit (string) User measure unit. Possible values are:<ul><li>pt: point</li><li>mm: millimeter (default)</li><li>cm: centimeter</li><li>in: inch</li></ul><br />A point equals 1/72 of inch, that is to say about 0.35 mm (an inch being 2.54 cm). This is a very common unit in typography; font sizes are expressed in that unit.
         * @public 
         * @since 3.0.015 (2008-06-06)
         * @static 
         */
        public static function setPageUnit($unit){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setPageUnit($unit);
        }
        
        /**
         * Set page orientation.
         *
         * @param $orientation (string) page orientation. Possible values are (case insensitive):<ul><li>P or Portrait (default)</li><li>L or Landscape</li><li>'' (empty string) for automatic orientation</li></ul>
         * @param $autopagebreak (boolean) Boolean indicating if auto-page-break mode should be on or off.
         * @param $bottommargin (float) bottom margin of the page.
         * @public 
         * @since 3.0.015 (2008-06-06)
         * @static 
         */
        public static function setPageOrientation($orientation, $autopagebreak = '', $bottommargin = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setPageOrientation($orientation, $autopagebreak, $bottommargin);
        }
        
        /**
         * Set regular expression to detect withespaces or word separators.
         * 
         * The pattern delimiter must be the forward-slash character "/".
         * Some example patterns are:
         * <pre>
         * Non-Unicode or missing PCRE unicode support: "/[^\S\xa0]/"
         * Unicode and PCRE unicode support: "/(?!\xa0)[\s\p{Z}]/u"
         * Unicode and PCRE unicode support in Chinese mode: "/(?!\xa0)[\s\p{Z}\p{Lo}]/u"
         * if PCRE unicode support is turned ON ("\P" is the negate class of "\p"):
         *      \s     : any whitespace character
         *      \p{Z}  : any separator
         *      \p{Lo} : Unicode letter or ideograph that does not have lowercase and uppercase variants. Is used to chunk chinese words.
         *      \xa0   : Unicode Character 'NO-BREAK SPACE' (U+00A0)
         * </pre>
         *
         * @param $re (string) regular expression (leave empty for default).
         * @public 
         * @since 4.6.016 (2009-06-15)
         * @static 
         */
        public static function setSpacesRE($re = '/[^\S\xa0]/'){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setSpacesRE($re);
        }
        
        /**
         * Enable or disable Right-To-Left language mode
         *
         * @param $enable (Boolean) if true enable Right-To-Left language mode.
         * @param $resetx (Boolean) if true reset the X position on direction change.
         * @public 
         * @since 2.0.000 (2008-01-03)
         * @static 
         */
        public static function setRTL($enable, $resetx = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setRTL($enable, $resetx);
        }
        
        /**
         * Return the RTL status
         *
         * @return boolean 
         * @public 
         * @since 4.0.012 (2008-07-24)
         * @static 
         */
        public static function getRTL(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getRTL();
        }
        
        /**
         * Force temporary RTL language direction
         *
         * @param $mode (mixed) can be false, 'L' for LTR or 'R' for RTL
         * @public 
         * @since 2.1.000 (2008-01-09)
         * @static 
         */
        public static function setTempRTL($mode){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setTempRTL($mode);
        }
        
        /**
         * Return the current temporary RTL status
         *
         * @return boolean 
         * @public 
         * @since 4.8.014 (2009-11-04)
         * @static 
         */
        public static function isRTLTextDir(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::isRTLTextDir();
        }
        
        /**
         * Set the last cell height.
         *
         * @param $h (float) cell height.
         * @author Nicola Asuni
         * @public 
         * @since 1.53.0.TC034
         * @static 
         */
        public static function setLastH($h){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setLastH($h);
        }
        
        /**
         * Return the cell height
         *
         * @param $fontsize (int) Font size in internal units
         * @param $padding (boolean) If true add cell padding
         * @public 
         * @static 
         */
        public static function getCellHeight($fontsize, $padding = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getCellHeight($fontsize, $padding);
        }
        
        /**
         * Reset the last cell height.
         *
         * @public 
         * @since 5.9.000 (2010-10-03)
         * @static 
         */
        public static function resetLastH(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::resetLastH();
        }
        
        /**
         * Get the last cell height.
         *
         * @return \last cell height
         * @public 
         * @since 4.0.017 (2008-08-05)
         * @static 
         */
        public static function getLastH(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getLastH();
        }
        
        /**
         * Set the adjusting factor to convert pixels to user units.
         *
         * @param $scale (float) adjusting factor to convert pixels to user units.
         * @author Nicola Asuni
         * @public 
         * @since 1.5.2
         * @static 
         */
        public static function setImageScale($scale){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setImageScale($scale);
        }
        
        /**
         * Returns the adjusting factor to convert pixels to user units.
         *
         * @return float adjusting factor to convert pixels to user units.
         * @author Nicola Asuni
         * @public 
         * @since 1.5.2
         * @static 
         */
        public static function getImageScale(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getImageScale();
        }
        
        /**
         * Returns an array of page dimensions:
         * <ul><li>$this->pagedim[$this->page]['w'] = page width in points</li><li>$this->pagedim[$this->page]['h'] = height in points</li><li>$this->pagedim[$this->page]['wk'] = page width in user units</li><li>$this->pagedim[$this->page]['hk'] = page height in user units</li><li>$this->pagedim[$this->page]['tm'] = top margin</li><li>$this->pagedim[$this->page]['bm'] = bottom margin</li><li>$this->pagedim[$this->page]['lm'] = left margin</li><li>$this->pagedim[$this->page]['rm'] = right margin</li><li>$this->pagedim[$this->page]['pb'] = auto page break</li><li>$this->pagedim[$this->page]['or'] = page orientation</li><li>$this->pagedim[$this->page]['olm'] = original left margin</li><li>$this->pagedim[$this->page]['orm'] = original right margin</li><li>$this->pagedim[$this->page]['Rotate'] = The number of degrees by which the page shall be rotated clockwise when displayed or printed. The value shall be a multiple of 90.</li><li>$this->pagedim[$this->page]['PZ'] = The page's preferred zoom (magnification) factor.</li><li>$this->pagedim[$this->page]['trans'] : the style and duration of the visual transition to use when moving from another page to the given page during a presentation<ul><li>$this->pagedim[$this->page]['trans']['Dur'] = The page's display duration (also called its advance timing): the maximum length of time, in seconds, that the page shall be displayed during presentations before the viewer application shall automatically advance to the next page.</li><li>$this->pagedim[$this->page]['trans']['S'] = transition style : Split, Blinds, Box, Wipe, Dissolve, Glitter, R, Fly, Push, Cover, Uncover, Fade</li><li>$this->pagedim[$this->page]['trans']['D'] = The duration of the transition effect, in seconds.</li><li>$this->pagedim[$this->page]['trans']['Dm'] = (Split and Blinds transition styles only) The dimension in which the specified transition effect shall occur: H = Horizontal, V = Vertical. Default value: H.</li><li>$this->pagedim[$this->page]['trans']['M'] = (Split, Box and Fly transition styles only) The direction of motion for the specified transition effect: I = Inward from the edges of the page, O = Outward from the center of the pageDefault value: I.</li><li>$this->pagedim[$this->page]['trans']['Di'] = (Wipe, Glitter, Fly, Cover, Uncover and Push transition styles only) The direction in which the specified transition effect shall moves, expressed in degrees counterclockwise starting from a left-to-right direction. If the value is a number, it shall be one of: 0 = Left to right, 90 = Bottom to top (Wipe only), 180 = Right to left (Wipe only), 270 = Top to bottom, 315 = Top-left to bottom-right (Glitter only). If the value is a name, it shall be None, which is relevant only for the Fly transition when the value of SS is not 1.0. Default value: 0.</li><li>$this->pagedim[$this->page]['trans']['SS'] = (Fly transition style only) The starting or ending scale at which the changes shall be drawn. If M specifies an inward transition, the scale of the changes drawn shall progress from SS to 1.0 over the course of the transition. If M specifies an outward transition, the scale of the changes drawn shall progress from 1.0 to SS over the course of the transition. Default: 1.0. </li><li>$this->pagedim[$this->page]['trans']['B'] = (Fly transition style only) If true, the area that shall be flown in is rectangular and opaque. Default: false.</li></ul></li><li>$this->pagedim[$this->page]['MediaBox'] : the boundaries of the physical medium on which the page shall be displayed or printed<ul><li>$this->pagedim[$this->page]['MediaBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['MediaBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['MediaBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['MediaBox']['ury'] = upper-right y coordinate in points</li></ul></li><li>$this->pagedim[$this->page]['CropBox'] : the visible region of default user space<ul><li>$this->pagedim[$this->page]['CropBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['CropBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['CropBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['CropBox']['ury'] = upper-right y coordinate in points</li></ul></li><li>$this->pagedim[$this->page]['BleedBox'] : the region to which the contents of the page shall be clipped when output in a production environment<ul><li>$this->pagedim[$this->page]['BleedBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['BleedBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['BleedBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['BleedBox']['ury'] = upper-right y coordinate in points</li></ul></li><li>$this->pagedim[$this->page]['TrimBox'] : the intended dimensions of the finished page after trimming<ul><li>$this->pagedim[$this->page]['TrimBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['TrimBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['TrimBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['TrimBox']['ury'] = upper-right y coordinate in points</li></ul></li><li>$this->pagedim[$this->page]['ArtBox'] : the extent of the page's meaningful content<ul><li>$this->pagedim[$this->page]['ArtBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['ArtBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['ArtBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['ArtBox']['ury'] = upper-right y coordinate in points</li></ul></li></ul>
         *
         * @param $pagenum (int) page number (empty = current page)
         * @return array of page dimensions.
         * @author Nicola Asuni
         * @public 
         * @since 4.5.027 (2009-03-16)
         * @static 
         */
        public static function getPageDimensions($pagenum = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getPageDimensions($pagenum);
        }
        
        /**
         * Returns the page width in units.
         *
         * @param $pagenum (int) page number (empty = current page)
         * @return int page width.
         * @author Nicola Asuni
         * @public 
         * @since 1.5.2
         * @see getPageDimensions()
         * @static 
         */
        public static function getPageWidth($pagenum = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getPageWidth($pagenum);
        }
        
        /**
         * Returns the page height in units.
         *
         * @param $pagenum (int) page number (empty = current page)
         * @return int page height.
         * @author Nicola Asuni
         * @public 
         * @since 1.5.2
         * @see getPageDimensions()
         * @static 
         */
        public static function getPageHeight($pagenum = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getPageHeight($pagenum);
        }
        
        /**
         * Returns the page break margin.
         *
         * @param $pagenum (int) page number (empty = current page)
         * @return int page break margin.
         * @author Nicola Asuni
         * @public 
         * @since 1.5.2
         * @see getPageDimensions()
         * @static 
         */
        public static function getBreakMargin($pagenum = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getBreakMargin($pagenum);
        }
        
        /**
         * Returns the scale factor (number of points in user unit).
         *
         * @return int scale factor.
         * @author Nicola Asuni
         * @public 
         * @since 1.5.2
         * @static 
         */
        public static function getScaleFactor(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getScaleFactor();
        }
        
        /**
         * Defines the left, top and right margins.
         *
         * @param $left (float) Left margin.
         * @param $top (float) Top margin.
         * @param $right (float) Right margin. Default value is the left one.
         * @param $keepmargins (boolean) if true overwrites the default page margins
         * @public 
         * @since 1.0
         * @see SetLeftMargin(), SetTopMargin(), SetRightMargin(), SetAutoPageBreak()
         * @static 
         */
        public static function SetMargins($left, $top, $right = -1, $keepmargins = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetMargins($left, $top, $right, $keepmargins);
        }
        
        /**
         * Defines the left margin. The method can be called before creating the first page. If the current abscissa gets out of page, it is brought back to the margin.
         *
         * @param $margin (float) The margin.
         * @public 
         * @since 1.4
         * @see SetTopMargin(), SetRightMargin(), SetAutoPageBreak(), SetMargins()
         * @static 
         */
        public static function SetLeftMargin($margin){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetLeftMargin($margin);
        }
        
        /**
         * Defines the top margin. The method can be called before creating the first page.
         *
         * @param $margin (float) The margin.
         * @public 
         * @since 1.5
         * @see SetLeftMargin(), SetRightMargin(), SetAutoPageBreak(), SetMargins()
         * @static 
         */
        public static function SetTopMargin($margin){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetTopMargin($margin);
        }
        
        /**
         * Defines the right margin. The method can be called before creating the first page.
         *
         * @param $margin (float) The margin.
         * @public 
         * @since 1.5
         * @see SetLeftMargin(), SetTopMargin(), SetAutoPageBreak(), SetMargins()
         * @static 
         */
        public static function SetRightMargin($margin){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetRightMargin($margin);
        }
        
        /**
         * Set the same internal Cell padding for top, right, bottom, left-
         *
         * @param $pad (float) internal padding.
         * @public 
         * @since 2.1.000 (2008-01-09)
         * @see getCellPaddings(), setCellPaddings()
         * @static 
         */
        public static function SetCellPadding($pad){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetCellPadding($pad);
        }
        
        /**
         * Set the internal Cell paddings.
         *
         * @param $left (float) left padding
         * @param $top (float) top padding
         * @param $right (float) right padding
         * @param $bottom (float) bottom padding
         * @public 
         * @since 5.9.000 (2010-10-03)
         * @see getCellPaddings(), SetCellPadding()
         * @static 
         */
        public static function setCellPaddings($left = '', $top = '', $right = '', $bottom = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setCellPaddings($left, $top, $right, $bottom);
        }
        
        /**
         * Get the internal Cell padding array.
         *
         * @return array of padding values
         * @public 
         * @since 5.9.000 (2010-10-03)
         * @see setCellPaddings(), SetCellPadding()
         * @static 
         */
        public static function getCellPaddings(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getCellPaddings();
        }
        
        /**
         * Set the internal Cell margins.
         *
         * @param $left (float) left margin
         * @param $top (float) top margin
         * @param $right (float) right margin
         * @param $bottom (float) bottom margin
         * @public 
         * @since 5.9.000 (2010-10-03)
         * @see getCellMargins()
         * @static 
         */
        public static function setCellMargins($left = '', $top = '', $right = '', $bottom = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setCellMargins($left, $top, $right, $bottom);
        }
        
        /**
         * Get the internal Cell margin array.
         *
         * @return array of margin values
         * @public 
         * @since 5.9.000 (2010-10-03)
         * @see setCellMargins()
         * @static 
         */
        public static function getCellMargins(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getCellMargins();
        }
        
        /**
         * Enables or disables the automatic page breaking mode. When enabling, the second parameter is the distance from the bottom of the page that defines the triggering limit. By default, the mode is on and the margin is 2 cm.
         *
         * @param $auto (boolean) Boolean indicating if mode should be on or off.
         * @param $margin (float) Distance from the bottom of the page.
         * @public 
         * @since 1.0
         * @see Cell(), MultiCell(), AcceptPageBreak()
         * @static 
         */
        public static function SetAutoPageBreak($auto, $margin = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetAutoPageBreak($auto, $margin);
        }
        
        /**
         * Return the auto-page-break mode (true or false).
         *
         * @return boolean auto-page-break mode
         * @public 
         * @since 5.9.088
         * @static 
         */
        public static function getAutoPageBreak(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getAutoPageBreak();
        }
        
        /**
         * Defines the way the document is to be displayed by the viewer.
         *
         * @param $zoom (mixed) The zoom to use. It can be one of the following string values or a number indicating the zooming factor to use. <ul><li>fullpage: displays the entire page on screen </li><li>fullwidth: uses maximum width of window</li><li>real: uses real size (equivalent to 100% zoom)</li><li>default: uses viewer default mode</li></ul>
         * @param $layout (string) The page layout. Possible values are:<ul><li>SinglePage Display one page at a time</li><li>OneColumn Display the pages in one column</li><li>TwoColumnLeft Display the pages in two columns, with odd-numbered pages on the left</li><li>TwoColumnRight Display the pages in two columns, with odd-numbered pages on the right</li><li>TwoPageLeft (PDF 1.5) Display the pages two at a time, with odd-numbered pages on the left</li><li>TwoPageRight (PDF 1.5) Display the pages two at a time, with odd-numbered pages on the right</li></ul>
         * @param $mode (string) A name object specifying how the document should be displayed when opened:<ul><li>UseNone Neither document outline nor thumbnail images visible</li><li>UseOutlines Document outline visible</li><li>UseThumbs Thumbnail images visible</li><li>FullScreen Full-screen mode, with no menu bar, window controls, or any other window visible</li><li>UseOC (PDF 1.5) Optional content group panel visible</li><li>UseAttachments (PDF 1.6) Attachments panel visible</li></ul>
         * @public 
         * @since 1.2
         * @static 
         */
        public static function SetDisplayMode($zoom, $layout = 'SinglePage', $mode = 'UseNone'){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetDisplayMode($zoom, $layout, $mode);
        }
        
        /**
         * Activates or deactivates page compression. When activated, the internal representation of each page is compressed, which leads to a compression ratio of about 2 for the resulting document. Compression is on by default.
         * 
         * Note: the Zlib extension is required for this feature. If not present, compression will be turned off.
         *
         * @param $compress (boolean) Boolean indicating if compression must be enabled.
         * @public 
         * @since 1.4
         * @static 
         */
        public static function SetCompression($compress = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetCompression($compress);
        }
        
        /**
         * Set flag to force sRGB_IEC61966-2.1 black scaled ICC color profile for the whole document.
         *
         * @param $mode (boolean) If true force sRGB output intent.
         * @public 
         * @since 5.9.121 (2011-09-28)
         * @static 
         */
        public static function setSRGBmode($mode = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setSRGBmode($mode);
        }
        
        /**
         * Turn on/off Unicode mode for document information dictionary (meta tags).
         * 
         * This has effect only when unicode mode is set to false.
         *
         * @param $unicode (boolean) if true set the meta information in Unicode
         * @since 5.9.027 (2010-12-01)
         * @public 
         * @static 
         */
        public static function SetDocInfoUnicode($unicode = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetDocInfoUnicode($unicode);
        }
        
        /**
         * Defines the title of the document.
         *
         * @param $title (string) The title.
         * @public 
         * @since 1.2
         * @see SetAuthor(), SetCreator(), SetKeywords(), SetSubject()
         * @static 
         */
        public static function SetTitle($title){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetTitle($title);
        }
        
        /**
         * Defines the subject of the document.
         *
         * @param $subject (string) The subject.
         * @public 
         * @since 1.2
         * @see SetAuthor(), SetCreator(), SetKeywords(), SetTitle()
         * @static 
         */
        public static function SetSubject($subject){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetSubject($subject);
        }
        
        /**
         * Defines the author of the document.
         *
         * @param $author (string) The name of the author.
         * @public 
         * @since 1.2
         * @see SetCreator(), SetKeywords(), SetSubject(), SetTitle()
         * @static 
         */
        public static function SetAuthor($author){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetAuthor($author);
        }
        
        /**
         * Associates keywords with the document, generally in the form 'keyword1 keyword2 .
         * 
         * ..'.
         *
         * @param $keywords (string) The list of keywords.
         * @public 
         * @since 1.2
         * @see SetAuthor(), SetCreator(), SetSubject(), SetTitle()
         * @static 
         */
        public static function SetKeywords($keywords){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetKeywords($keywords);
        }
        
        /**
         * Defines the creator of the document. This is typically the name of the application that generates the PDF.
         *
         * @param $creator (string) The name of the creator.
         * @public 
         * @since 1.2
         * @see SetAuthor(), SetKeywords(), SetSubject(), SetTitle()
         * @static 
         */
        public static function SetCreator($creator){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetCreator($creator);
        }
        
        /**
         * Throw an exception or print an error message and die if the K_TCPDF_PARSER_THROW_EXCEPTION_ERROR constant is set to true.
         *
         * @param $msg (string) The error message
         * @public 
         * @since 1.0
         * @static 
         */
        public static function Error($msg){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Error($msg);
        }
        
        /**
         * This method begins the generation of the PDF document.
         * 
         * It is not necessary to call it explicitly because AddPage() does it automatically.
         * Note: no page is created by this method
         *
         * @public 
         * @since 1.0
         * @see AddPage(), Close()
         * @static 
         */
        public static function Open(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Open();
        }
        
        /**
         * Terminates the PDF document.
         * 
         * It is not necessary to call this method explicitly because Output() does it automatically.
         * If the document contains no page, AddPage() is called to prevent from getting an invalid document.
         *
         * @public 
         * @since 1.0
         * @see Open(), Output()
         * @static 
         */
        public static function Close(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Close();
        }
        
        /**
         * Move pointer at the specified document page and update page dimensions.
         *
         * @param $pnum (int) page number (1 ... numpages)
         * @param $resetmargins (boolean) if true reset left, right, top margins and Y position.
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see getPage(), lastpage(), getNumPages()
         * @static 
         */
        public static function setPage($pnum, $resetmargins = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setPage($pnum, $resetmargins);
        }
        
        /**
         * Reset pointer to the last document page.
         *
         * @param $resetmargins (boolean) if true reset left, right, top margins and Y position.
         * @public 
         * @since 2.0.000 (2008-01-04)
         * @see setPage(), getPage(), getNumPages()
         * @static 
         */
        public static function lastPage($resetmargins = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::lastPage($resetmargins);
        }
        
        /**
         * Get current document page number.
         *
         * @return int page number
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see setPage(), lastpage(), getNumPages()
         * @static 
         */
        public static function getPage(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getPage();
        }
        
        /**
         * Get the total number of insered pages.
         *
         * @return int number of pages
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see setPage(), getPage(), lastpage()
         * @static 
         */
        public static function getNumPages(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getNumPages();
        }
        
        /**
         * Adds a new TOC (Table Of Content) page to the document.
         *
         * @param $orientation (string) page orientation.
         * @param $format (mixed) The format used for pages. It can be either: one of the string values specified at getPageSizeFromFormat() or an array of parameters specified at setPageFormat().
         * @param $keepmargins (boolean) if true overwrites the default page margins with the current margins
         * @public 
         * @since 5.0.001 (2010-05-06)
         * @see AddPage(), startPage(), endPage(), endTOCPage()
         * @static 
         */
        public static function addTOCPage($orientation = '', $format = '', $keepmargins = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::addTOCPage($orientation, $format, $keepmargins);
        }
        
        /**
         * Terminate the current TOC (Table Of Content) page
         *
         * @public 
         * @since 5.0.001 (2010-05-06)
         * @see AddPage(), startPage(), endPage(), addTOCPage()
         * @static 
         */
        public static function endTOCPage(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::endTOCPage();
        }
        
        /**
         * Terminate the current page
         *
         * @param $tocpage (boolean) if true set the tocpage state to false (end the page used to display Table Of Content).
         * @public 
         * @since 4.2.010 (2008-11-14)
         * @see AddPage(), startPage(), addTOCPage(), endTOCPage()
         * @static 
         */
        public static function endPage($tocpage = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::endPage($tocpage);
        }
        
        /**
         * Starts a new page to the document. The page must be closed using the endPage() function.
         * 
         * The origin of the coordinate system is at the top-left corner and increasing ordinates go downwards.
         *
         * @param $orientation (string) page orientation. Possible values are (case insensitive):<ul><li>P or PORTRAIT (default)</li><li>L or LANDSCAPE</li></ul>
         * @param $format (mixed) The format used for pages. It can be either: one of the string values specified at getPageSizeFromFormat() or an array of parameters specified at setPageFormat().
         * @param $tocpage (boolean) if true the page is designated to contain the Table-Of-Content.
         * @since 4.2.010 (2008-11-14)
         * @see AddPage(), endPage(), addTOCPage(), endTOCPage(), getPageSizeFromFormat(), setPageFormat()
         * @public 
         * @static 
         */
        public static function startPage($orientation = '', $format = '', $tocpage = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::startPage($orientation, $format, $tocpage);
        }
        
        /**
         * Set start-writing mark on current page stream used to put borders and fills.
         * 
         * Borders and fills are always created after content and inserted on the position marked by this method.
         * This function must be called after calling Image() function for a background image.
         * Background images must be always inserted before calling Multicell() or WriteHTMLCell() or WriteHTML() functions.
         *
         * @public 
         * @since 4.0.016 (2008-07-30)
         * @static 
         */
        public static function setPageMark(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setPageMark();
        }
        
        /**
         * Set header data.
         *
         * @param $ln (string) header image logo
         * @param $lw (string) header image logo width in mm
         * @param $ht (string) string to print as title on document header
         * @param $hs (string) string to print on document header
         * @param $tc (array) RGB array color for text.
         * @param $lc (array) RGB array color for line.
         * @public 
         * @static 
         */
        public static function setHeaderData($ln = '', $lw = 0, $ht = '', $hs = '', $tc = array(), $lc = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setHeaderData($ln, $lw, $ht, $hs, $tc, $lc);
        }
        
        /**
         * Set footer data.
         *
         * @param $tc (array) RGB array color for text.
         * @param $lc (array) RGB array color for line.
         * @public 
         * @static 
         */
        public static function setFooterData($tc = array(), $lc = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setFooterData($tc, $lc);
        }
        
        /**
         * Returns header data:
         * <ul><li>$ret['logo'] = logo image</li><li>$ret['logo_width'] = width of the image logo in user units</li><li>$ret['title'] = header title</li><li>$ret['string'] = header description string</li></ul>
         *
         * @return \array() 
         * @public 
         * @since 4.0.012 (2008-07-24)
         * @static 
         */
        public static function getHeaderData(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getHeaderData();
        }
        
        /**
         * Set header margin.
         * 
         * (minimum distance between header and top page margin)
         *
         * @param $hm (int) distance in user units
         * @public 
         * @static 
         */
        public static function setHeaderMargin($hm = 10){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setHeaderMargin($hm);
        }
        
        /**
         * Returns header margin in user units.
         *
         * @return float 
         * @since 4.0.012 (2008-07-24)
         * @public 
         * @static 
         */
        public static function getHeaderMargin(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getHeaderMargin();
        }
        
        /**
         * Set footer margin.
         * 
         * (minimum distance between footer and bottom page margin)
         *
         * @param $fm (int) distance in user units
         * @public 
         * @static 
         */
        public static function setFooterMargin($fm = 10){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setFooterMargin($fm);
        }
        
        /**
         * Returns footer margin in user units.
         *
         * @return float 
         * @since 4.0.012 (2008-07-24)
         * @public 
         * @static 
         */
        public static function getFooterMargin(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFooterMargin();
        }
        
        /**
         * Set a flag to print page header.
         *
         * @param $val (boolean) set to true to print the page header (default), false otherwise.
         * @public 
         * @static 
         */
        public static function setPrintHeader($val = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setPrintHeader($val);
        }
        
        /**
         * Set a flag to print page footer.
         *
         * @param $val (boolean) set to true to print the page footer (default), false otherwise.
         * @public 
         * @static 
         */
        public static function setPrintFooter($val = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setPrintFooter($val);
        }
        
        /**
         * Return the right-bottom (or left-bottom for RTL) corner X coordinate of last inserted image
         *
         * @return float 
         * @public 
         * @static 
         */
        public static function getImageRBX(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getImageRBX();
        }
        
        /**
         * Return the right-bottom (or left-bottom for RTL) corner Y coordinate of last inserted image
         *
         * @return float 
         * @public 
         * @static 
         */
        public static function getImageRBY(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getImageRBY();
        }
        
        /**
         * Reset the xobject template used by Header() method.
         *
         * @public 
         * @static 
         */
        public static function resetHeaderTemplate(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::resetHeaderTemplate();
        }
        
        /**
         * Set a flag to automatically reset the xobject template used by Header() method at each page.
         *
         * @param $val (boolean) set to true to reset Header xobject template at each page, false otherwise.
         * @public 
         * @static 
         */
        public static function setHeaderTemplateAutoreset($val = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setHeaderTemplateAutoreset($val);
        }
        
        /**
         * This method is used to render the page header.
         * 
         * It is automatically called by AddPage() and could be overwritten in your own inherited class.
         *
         * @public 
         * @static 
         */
        public static function Header(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Header();
        }
        
        /**
         * This method is used to render the page footer.
         * 
         * It is automatically called by AddPage() and could be overwritten in your own inherited class.
         *
         * @public 
         * @static 
         */
        public static function Footer(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Footer();
        }
        
        /**
         * Returns the current page number.
         *
         * @return int page number
         * @public 
         * @since 1.0
         * @see getAliasNbPages()
         * @static 
         */
        public static function PageNo(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::PageNo();
        }
        
        /**
         * Returns the array of spot colors.
         *
         * @return \(array) Spot colors array.
         * @public 
         * @since 6.0.038 (2013-09-30)
         * @static 
         */
        public static function getAllSpotColors(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getAllSpotColors();
        }
        
        /**
         * Defines a new spot color.
         * 
         * It can be expressed in RGB components or gray scale.
         * The method can be called before the first page is created and the value is retained from page to page.
         *
         * @param $name (string) Full name of the spot color.
         * @param $c (float) Cyan color for CMYK. Value between 0 and 100.
         * @param $m (float) Magenta color for CMYK. Value between 0 and 100.
         * @param $y (float) Yellow color for CMYK. Value between 0 and 100.
         * @param $k (float) Key (Black) color for CMYK. Value between 0 and 100.
         * @public 
         * @since 4.0.024 (2008-09-12)
         * @see SetDrawSpotColor(), SetFillSpotColor(), SetTextSpotColor()
         * @static 
         */
        public static function AddSpotColor($name, $c, $m, $y, $k){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::AddSpotColor($name, $c, $m, $y, $k);
        }
        
        /**
         * Set the spot color for the specified type ('draw', 'fill', 'text').
         *
         * @param $type (string) Type of object affected by this color: ('draw', 'fill', 'text').
         * @param $name (string) Name of the spot color.
         * @param $tint (float) Intensity of the color (from 0 to 100 ; 100 = full intensity by default).
         * @return \(string) PDF color command.
         * @public 
         * @since 5.9.125 (2011-10-03)
         * @static 
         */
        public static function setSpotColor($type, $name, $tint = 100){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setSpotColor($type, $name, $tint);
        }
        
        /**
         * Defines the spot color used for all drawing operations (lines, rectangles and cell borders).
         *
         * @param $name (string) Name of the spot color.
         * @param $tint (float) Intensity of the color (from 0 to 100 ; 100 = full intensity by default).
         * @public 
         * @since 4.0.024 (2008-09-12)
         * @see AddSpotColor(), SetFillSpotColor(), SetTextSpotColor()
         * @static 
         */
        public static function SetDrawSpotColor($name, $tint = 100){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetDrawSpotColor($name, $tint);
        }
        
        /**
         * Defines the spot color used for all filling operations (filled rectangles and cell backgrounds).
         *
         * @param $name (string) Name of the spot color.
         * @param $tint (float) Intensity of the color (from 0 to 100 ; 100 = full intensity by default).
         * @public 
         * @since 4.0.024 (2008-09-12)
         * @see AddSpotColor(), SetDrawSpotColor(), SetTextSpotColor()
         * @static 
         */
        public static function SetFillSpotColor($name, $tint = 100){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetFillSpotColor($name, $tint);
        }
        
        /**
         * Defines the spot color used for text.
         *
         * @param $name (string) Name of the spot color.
         * @param $tint (int) Intensity of the color (from 0 to 100 ; 100 = full intensity by default).
         * @public 
         * @since 4.0.024 (2008-09-12)
         * @see AddSpotColor(), SetDrawSpotColor(), SetFillSpotColor()
         * @static 
         */
        public static function SetTextSpotColor($name, $tint = 100){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetTextSpotColor($name, $tint);
        }
        
        /**
         * Set the color array for the specified type ('draw', 'fill', 'text').
         * 
         * It can be expressed in RGB, CMYK or GRAY SCALE components.
         * The method can be called before the first page is created and the value is retained from page to page.
         *
         * @param $type (string) Type of object affected by this color: ('draw', 'fill', 'text').
         * @param $color (array) Array of colors (1=gray, 3=RGB, 4=CMYK or 5=spotcolor=CMYK+name values).
         * @param $ret (boolean) If true do not send the PDF command.
         * @return \(string) The PDF command or empty string.
         * @public 
         * @since 3.1.000 (2008-06-11)
         * @static 
         */
        public static function setColorArray($type, $color, $ret = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setColorArray($type, $color, $ret);
        }
        
        /**
         * Defines the color used for all drawing operations (lines, rectangles and cell borders).
         * 
         * It can be expressed in RGB, CMYK or GRAY SCALE components.
         * The method can be called before the first page is created and the value is retained from page to page.
         *
         * @param $color (array) Array of colors (1, 3 or 4 values).
         * @param $ret (boolean) If true do not send the PDF command.
         * @return string the PDF command
         * @public 
         * @since 3.1.000 (2008-06-11)
         * @see SetDrawColor()
         * @static 
         */
        public static function SetDrawColorArray($color, $ret = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetDrawColorArray($color, $ret);
        }
        
        /**
         * Defines the color used for all filling operations (filled rectangles and cell backgrounds).
         * 
         * It can be expressed in RGB, CMYK or GRAY SCALE components.
         * The method can be called before the first page is created and the value is retained from page to page.
         *
         * @param $color (array) Array of colors (1, 3 or 4 values).
         * @param $ret (boolean) If true do not send the PDF command.
         * @public 
         * @since 3.1.000 (2008-6-11)
         * @see SetFillColor()
         * @static 
         */
        public static function SetFillColorArray($color, $ret = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetFillColorArray($color, $ret);
        }
        
        /**
         * Defines the color used for text. It can be expressed in RGB components or gray scale.
         * 
         * The method can be called before the first page is created and the value is retained from page to page.
         *
         * @param $color (array) Array of colors (1, 3 or 4 values).
         * @param $ret (boolean) If true do not send the PDF command.
         * @public 
         * @since 3.1.000 (2008-6-11)
         * @see SetFillColor()
         * @static 
         */
        public static function SetTextColorArray($color, $ret = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetTextColorArray($color, $ret);
        }
        
        /**
         * Defines the color used by the specified type ('draw', 'fill', 'text').
         *
         * @param $type (string) Type of object affected by this color: ('draw', 'fill', 'text').
         * @param $col1 (float) GRAY level for single color, or Red color for RGB (0-255), or CYAN color for CMYK (0-100).
         * @param $col2 (float) GREEN color for RGB (0-255), or MAGENTA color for CMYK (0-100).
         * @param $col3 (float) BLUE color for RGB (0-255), or YELLOW color for CMYK (0-100).
         * @param $col4 (float) KEY (BLACK) color for CMYK (0-100).
         * @param $ret (boolean) If true do not send the command.
         * @param $name (string) spot color name (if any)
         * @return \(string) The PDF command or empty string.
         * @public 
         * @since 5.9.125 (2011-10-03)
         * @static 
         */
        public static function setColor($type, $col1 = 0, $col2 = -1, $col3 = -1, $col4 = -1, $ret = false, $name = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setColor($type, $col1, $col2, $col3, $col4, $ret, $name);
        }
        
        /**
         * Defines the color used for all drawing operations (lines, rectangles and cell borders). It can be expressed in RGB components or gray scale. The method can be called before the first page is created and the value is retained from page to page.
         *
         * @param $col1 (float) GRAY level for single color, or Red color for RGB (0-255), or CYAN color for CMYK (0-100).
         * @param $col2 (float) GREEN color for RGB (0-255), or MAGENTA color for CMYK (0-100).
         * @param $col3 (float) BLUE color for RGB (0-255), or YELLOW color for CMYK (0-100).
         * @param $col4 (float) KEY (BLACK) color for CMYK (0-100).
         * @param $ret (boolean) If true do not send the command.
         * @param $name (string) spot color name (if any)
         * @return string the PDF command
         * @public 
         * @since 1.3
         * @see SetDrawColorArray(), SetFillColor(), SetTextColor(), Line(), Rect(), Cell(), MultiCell()
         * @static 
         */
        public static function SetDrawColor($col1 = 0, $col2 = -1, $col3 = -1, $col4 = -1, $ret = false, $name = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetDrawColor($col1, $col2, $col3, $col4, $ret, $name);
        }
        
        /**
         * Defines the color used for all filling operations (filled rectangles and cell backgrounds). It can be expressed in RGB components or gray scale. The method can be called before the first page is created and the value is retained from page to page.
         *
         * @param $col1 (float) GRAY level for single color, or Red color for RGB (0-255), or CYAN color for CMYK (0-100).
         * @param $col2 (float) GREEN color for RGB (0-255), or MAGENTA color for CMYK (0-100).
         * @param $col3 (float) BLUE color for RGB (0-255), or YELLOW color for CMYK (0-100).
         * @param $col4 (float) KEY (BLACK) color for CMYK (0-100).
         * @param $ret (boolean) If true do not send the command.
         * @param $name (string) Spot color name (if any).
         * @return \(string) The PDF command.
         * @public 
         * @since 1.3
         * @see SetFillColorArray(), SetDrawColor(), SetTextColor(), Rect(), Cell(), MultiCell()
         * @static 
         */
        public static function SetFillColor($col1 = 0, $col2 = -1, $col3 = -1, $col4 = -1, $ret = false, $name = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetFillColor($col1, $col2, $col3, $col4, $ret, $name);
        }
        
        /**
         * Defines the color used for text. It can be expressed in RGB components or gray scale. The method can be called before the first page is created and the value is retained from page to page.
         *
         * @param $col1 (float) GRAY level for single color, or Red color for RGB (0-255), or CYAN color for CMYK (0-100).
         * @param $col2 (float) GREEN color for RGB (0-255), or MAGENTA color for CMYK (0-100).
         * @param $col3 (float) BLUE color for RGB (0-255), or YELLOW color for CMYK (0-100).
         * @param $col4 (float) KEY (BLACK) color for CMYK (0-100).
         * @param $ret (boolean) If true do not send the command.
         * @param $name (string) Spot color name (if any).
         * @return \(string) Empty string.
         * @public 
         * @since 1.3
         * @see SetTextColorArray(), SetDrawColor(), SetFillColor(), Text(), Cell(), MultiCell()
         * @static 
         */
        public static function SetTextColor($col1 = 0, $col2 = -1, $col3 = -1, $col4 = -1, $ret = false, $name = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetTextColor($col1, $col2, $col3, $col4, $ret, $name);
        }
        
        /**
         * Returns the length of a string in user unit. A font must be selected.<br>
         *
         * @param $s (string) The string whose length is to be computed
         * @param $fontname (string) Family font. It can be either a name defined by AddFont() or one of the standard families. It is also possible to pass an empty string, in that case, the current family is retained.
         * @param $fontstyle (string) Font style. Possible values are (case insensitive):<ul><li>empty string: regular</li><li>B: bold</li><li>I: italic</li><li>U: underline</li><li>D: line-through</li><li>O: overline</li></ul> or any combination. The default value is regular.
         * @param $fontsize (float) Font size in points. The default value is the current size.
         * @param $getarray (boolean) if true returns an array of characters widths, if false returns the total length.
         * @return mixed int total string length or array of characted widths
         * @author Nicola Asuni
         * @public 
         * @since 1.2
         * @static 
         */
        public static function GetStringWidth($s, $fontname = '', $fontstyle = '', $fontsize = 0, $getarray = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::GetStringWidth($s, $fontname, $fontstyle, $fontsize, $getarray);
        }
        
        /**
         * Returns the string length of an array of chars in user unit or an array of characters widths. A font must be selected.<br>
         *
         * @param $sa (string) The array of chars whose total length is to be computed
         * @param $fontname (string) Family font. It can be either a name defined by AddFont() or one of the standard families. It is also possible to pass an empty string, in that case, the current family is retained.
         * @param $fontstyle (string) Font style. Possible values are (case insensitive):<ul><li>empty string: regular</li><li>B: bold</li><li>I: italic</li><li>U: underline</li><li>D: line through</li><li>O: overline</li></ul> or any combination. The default value is regular.
         * @param $fontsize (float) Font size in points. The default value is the current size.
         * @param $getarray (boolean) if true returns an array of characters widths, if false returns the total length.
         * @return mixed int total string length or array of characted widths
         * @author Nicola Asuni
         * @public 
         * @since 2.4.000 (2008-03-06)
         * @static 
         */
        public static function GetArrStringWidth($sa, $fontname = '', $fontstyle = '', $fontsize = 0, $getarray = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::GetArrStringWidth($sa, $fontname, $fontstyle, $fontsize, $getarray);
        }
        
        /**
         * Returns the length of the char in user unit for the current font considering current stretching and spacing (tracking).
         *
         * @param $char (int) The char code whose length is to be returned
         * @param $notlast (boolean) If false ignore the font-spacing.
         * @return float char width
         * @author Nicola Asuni
         * @public 
         * @since 2.4.000 (2008-03-06)
         * @static 
         */
        public static function GetCharWidth($char, $notlast = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::GetCharWidth($char, $notlast);
        }
        
        /**
         * Returns the length of the char in user unit for the current font.
         *
         * @param $char (int) The char code whose length is to be returned
         * @return float char width
         * @author Nicola Asuni
         * @public 
         * @since 5.9.000 (2010-09-28)
         * @static 
         */
        public static function getRawCharWidth($char){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getRawCharWidth($char);
        }
        
        /**
         * Returns the numbero of characters in a string.
         *
         * @param $s (string) The input string.
         * @return int number of characters
         * @public 
         * @since 2.0.0001 (2008-01-07)
         * @static 
         */
        public static function GetNumChars($s){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::GetNumChars($s);
        }
        
        /**
         * Imports a TrueType, Type1, core, or CID0 font and makes it available.
         * 
         * It is necessary to generate a font definition file first (read /fonts/utils/README.TXT).
         * The definition file (and the font file itself when embedding) must be present either in the current directory or in the one indicated by K_PATH_FONTS if the constant is defined. If it could not be found, the error "Could not include font definition file" is generated.
         *
         * @param $family (string) Font family. The name can be chosen arbitrarily. If it is a standard family name, it will override the corresponding font.
         * @param $style (string) Font style. Possible values are (case insensitive):<ul><li>empty string: regular (default)</li><li>B: bold</li><li>I: italic</li><li>BI or IB: bold italic</li></ul>
         * @param $fontfile (string) The font definition file. By default, the name is built from the family and style, in lower case with no spaces.
         * @return array containing the font data, or false in case of error.
         * @param $subset (mixed) if true embedd only a subset of the font (stores only the information related to the used characters); if false embedd full font; if 'default' uses the default value set using setFontSubsetting(). This option is valid only for TrueTypeUnicode fonts. If you want to enable users to change the document, set this parameter to false. If you subset the font, the person who receives your PDF would need to have your same font in order to make changes to your PDF. The file size of the PDF would also be smaller because you are embedding only part of a font.
         * @public 
         * @since 1.5
         * @see SetFont(), setFontSubsetting()
         * @static 
         */
        public static function AddFont($family, $style = '', $fontfile = '', $subset = 'default'){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::AddFont($family, $style, $fontfile, $subset);
        }
        
        /**
         * Defines the size of the current font.
         *
         * @param $size (float) The font size in points.
         * @param $out (boolean) if true output the font size command, otherwise only set the font properties.
         * @public 
         * @since 1.0
         * @see SetFont()
         * @static 
         */
        public static function SetFontSize($size, $out = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetFontSize($size, $out);
        }
        
        /**
         * Returns the bounding box of the current font in user units.
         *
         * @return array 
         * @public 
         * @since 5.9.152 (2012-03-23)
         * @static 
         */
        public static function getFontBBox(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontBBox();
        }
        
        /**
         * Convert a relative font measure into absolute value.
         *
         * @param $s (int) Font measure.
         * @return float Absolute measure.
         * @since 5.9.186 (2012-09-13)
         * @static 
         */
        public static function getAbsFontMeasure($s){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getAbsFontMeasure($s);
        }
        
        /**
         * Returns the glyph bounding box of the specified character in the current font in user units.
         *
         * @param $char (int) Input character code.
         * @return mixed array(xMin, yMin, xMax, yMax) or FALSE if not defined.
         * @since 5.9.186 (2012-09-13)
         * @static 
         */
        public static function getCharBBox($char){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getCharBBox($char);
        }
        
        /**
         * Return the font descent value
         *
         * @param $font (string) font name
         * @param $style (string) font style
         * @param $size (float) The size (in points)
         * @return int font descent
         * @public 
         * @author Nicola Asuni
         * @since 4.9.003 (2010-03-30)
         * @static 
         */
        public static function getFontDescent($font, $style = '', $size = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontDescent($font, $style, $size);
        }
        
        /**
         * Return the font ascent value.
         *
         * @param $font (string) font name
         * @param $style (string) font style
         * @param $size (float) The size (in points)
         * @return int font ascent
         * @public 
         * @author Nicola Asuni
         * @since 4.9.003 (2010-03-30)
         * @static 
         */
        public static function getFontAscent($font, $style = '', $size = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontAscent($font, $style, $size);
        }
        
        /**
         * Return true in the character is present in the specified font.
         *
         * @param $char (mixed) Character to check (integer value or string)
         * @param $font (string) Font name (family name).
         * @param $style (string) Font style.
         * @return \(boolean) true if the char is defined, false otherwise.
         * @public 
         * @since 5.9.153 (2012-03-28)
         * @static 
         */
        public static function isCharDefined($char, $font = '', $style = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::isCharDefined($char, $font, $style);
        }
        
        /**
         * Replace missing font characters on selected font with specified substitutions.
         *
         * @param $text (string) Text to process.
         * @param $font (string) Font name (family name).
         * @param $style (string) Font style.
         * @param $subs (array) Array of possible character substitutions. The key is the character to check (integer value) and the value is a single intege value or an array of possible substitutes.
         * @return \(string) Processed text.
         * @public 
         * @since 5.9.153 (2012-03-28)
         * @static 
         */
        public static function replaceMissingChars($text, $font = '', $style = '', $subs = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::replaceMissingChars($text, $font, $style, $subs);
        }
        
        /**
         * Defines the default monospaced font.
         *
         * @param $font (string) Font name.
         * @public 
         * @since 4.5.025
         * @static 
         */
        public static function SetDefaultMonospacedFont($font){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetDefaultMonospacedFont($font);
        }
        
        /**
         * Puts a markup annotation on a rectangular area of the page.
         * 
         * !!!!THE ANNOTATION SUPPORT IS NOT YET FULLY IMPLEMENTED !!!!
         *
         * @param $x (float) Abscissa of the upper-left corner of the rectangle
         * @param $y (float) Ordinate of the upper-left corner of the rectangle
         * @param $w (float) Width of the rectangle
         * @param $h (float) Height of the rectangle
         * @param $text (string) annotation text or alternate content
         * @param $opt (array) array of options (see section 8.4 of PDF reference 1.7).
         * @param $spaces (int) number of spaces on the text to link
         * @public 
         * @since 4.0.018 (2008-08-06)
         * @static 
         */
        public static function Annotation($x, $y, $w, $h, $text, $opt = array(), $spaces = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Annotation($x, $y, $w, $h, $text, $opt, $spaces);
        }
        
        /**
         * Prints a text cell at the specified position.
         * 
         * This method allows to place a string precisely on the page.
         *
         * @param $x (float) Abscissa of the cell origin
         * @param $y (float) Ordinate of the cell origin
         * @param $txt (string) String to print
         * @param $fstroke (int) outline size in user units (false = disable)
         * @param $fclip (boolean) if true activate clipping mode (you must call StartTransform() before this function and StopTransform() to stop the clipping tranformation).
         * @param $ffill (boolean) if true fills the text
         * @param $border (mixed) Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
         * @param $ln (int) Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right (or left for RTL languages)</li><li>1: to the beginning of the next line</li><li>2: below</li></ul>Putting 1 is equivalent to putting 0 and calling Ln() just after. Default value: 0.
         * @param $align (string) Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align (default value)</li><li>C: center</li><li>R: right align</li><li>J: justify</li></ul>
         * @param $fill (boolean) Indicates if the cell background must be painted (true) or transparent (false).
         * @param $link (mixed) URL or identifier returned by AddLink().
         * @param $stretch (int) font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
         * @param $ignore_min_height (boolean) if true ignore automatic minimum height value.
         * @param $calign (string) cell vertical alignment relative to the specified Y value. Possible values are:<ul><li>T : cell top</li><li>A : font top</li><li>L : font baseline</li><li>D : font bottom</li><li>B : cell bottom</li></ul>
         * @param $valign (string) text vertical alignment inside the cell. Possible values are:<ul><li>T : top</li><li>C : center</li><li>B : bottom</li></ul>
         * @param $rtloff (boolean) if true uses the page top-left corner as origin of axis for $x and $y initial position.
         * @public 
         * @since 1.0
         * @see Cell(), Write(), MultiCell(), WriteHTML(), WriteHTMLCell()
         * @static 
         */
        public static function Text($x, $y, $txt, $fstroke = false, $fclip = false, $ffill = true, $border = 0, $ln = 0, $align = '', $fill = false, $link = '', $stretch = 0, $ignore_min_height = false, $calign = 'T', $valign = 'M', $rtloff = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Text($x, $y, $txt, $fstroke, $fclip, $ffill, $border, $ln, $align, $fill, $link, $stretch, $ignore_min_height, $calign, $valign, $rtloff);
        }
        
        /**
         * Whenever a page break condition is met, the method is called, and the break is issued or not depending on the returned value.
         * 
         * The default implementation returns a value according to the mode selected by SetAutoPageBreak().<br />
         * This method is called automatically and should not be called directly by the application.
         *
         * @return boolean 
         * @public 
         * @since 1.4
         * @see SetAutoPageBreak()
         * @static 
         */
        public static function AcceptPageBreak(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::AcceptPageBreak();
        }
        
        /**
         * Prints a cell (rectangular area) with optional borders, background color and character string. The upper-left corner of the cell corresponds to the current position. The text can be aligned or centered. After the call, the current position moves to the right or to the next line. It is possible to put a link on the text.<br />
         * If automatic page breaking is enabled and the cell goes beyond the limit, a page break is done before outputting.
         *
         * @param $w (float) Cell width. If 0, the cell extends up to the right margin.
         * @param $h (float) Cell height. Default value: 0.
         * @param $txt (string) String to print. Default value: empty string.
         * @param $border (mixed) Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
         * @param $ln (int) Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right (or left for RTL languages)</li><li>1: to the beginning of the next line</li><li>2: below</li></ul> Putting 1 is equivalent to putting 0 and calling Ln() just after. Default value: 0.
         * @param $align (string) Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align (default value)</li><li>C: center</li><li>R: right align</li><li>J: justify</li></ul>
         * @param $fill (boolean) Indicates if the cell background must be painted (true) or transparent (false).
         * @param $link (mixed) URL or identifier returned by AddLink().
         * @param $stretch (int) font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
         * @param $ignore_min_height (boolean) if true ignore automatic minimum height value.
         * @param $calign (string) cell vertical alignment relative to the specified Y value. Possible values are:<ul><li>T : cell top</li><li>C : center</li><li>B : cell bottom</li><li>A : font top</li><li>L : font baseline</li><li>D : font bottom</li></ul>
         * @param $valign (string) text vertical alignment inside the cell. Possible values are:<ul><li>T : top</li><li>C : center</li><li>B : bottom</li></ul>
         * @public 
         * @since 1.0
         * @see SetFont(), SetDrawColor(), SetFillColor(), SetTextColor(), SetLineWidth(), AddLink(), Ln(), MultiCell(), Write(), SetAutoPageBreak()
         * @static 
         */
        public static function Cell($w, $h = 0, $txt = '', $border = 0, $ln = 0, $align = '', $fill = false, $link = '', $stretch = 0, $ignore_min_height = false, $calign = 'T', $valign = 'M'){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Cell($w, $h, $txt, $border, $ln, $align, $fill, $link, $stretch, $ignore_min_height, $calign, $valign);
        }
        
        /**
         * This method allows printing text with line breaks.
         * 
         * They can be automatic (as soon as the text reaches the right border of the cell) or explicit (via the \n character). As many cells as necessary are output, one below the other.<br />
         * Text can be aligned, centered or justified. The cell block can be framed and the background painted.
         *
         * @param $w (float) Width of cells. If 0, they extend up to the right margin of the page.
         * @param $h (float) Cell minimum height. The cell extends automatically if needed.
         * @param $txt (string) String to print
         * @param $border (mixed) Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
         * @param $align (string) Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align</li><li>C: center</li><li>R: right align</li><li>J: justification (default value when $ishtml=false)</li></ul>
         * @param $fill (boolean) Indicates if the cell background must be painted (true) or transparent (false).
         * @param $ln (int) Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right</li><li>1: to the beginning of the next line [DEFAULT]</li><li>2: below</li></ul>
         * @param $x (float) x position in user units
         * @param $y (float) y position in user units
         * @param $reseth (boolean) if true reset the last cell height (default true).
         * @param $stretch (int) font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
         * @param $ishtml (boolean) INTERNAL USE ONLY -- set to true if $txt is HTML content (default = false). Never set this parameter to true, use instead writeHTMLCell() or writeHTML() methods.
         * @param $autopadding (boolean) if true, uses internal padding and automatically adjust it to account for line width.
         * @param $maxh (float) maximum height. It should be >= $h and less then remaining space to the bottom of the page, or 0 for disable this feature. This feature works only when $ishtml=false.
         * @param $valign (string) Vertical alignment of text (requires $maxh = $h > 0). Possible values are:<ul><li>T: TOP</li><li>M: middle</li><li>B: bottom</li></ul>. This feature works only when $ishtml=false and the cell must fit in a single page.
         * @param $fitcell (boolean) if true attempt to fit all the text within the cell by reducing the font size (do not work in HTML mode). $maxh must be greater than 0 and equal to $h.
         * @return int Return the number of cells or 1 for html mode.
         * @public 
         * @since 1.3
         * @see SetFont(), SetDrawColor(), SetFillColor(), SetTextColor(), SetLineWidth(), Cell(), Write(), SetAutoPageBreak()
         * @static 
         */
        public static function MultiCell($w, $h, $txt, $border = 0, $align = 'J', $fill = false, $ln = 1, $x = '', $y = '', $reseth = true, $stretch = 0, $ishtml = false, $autopadding = true, $maxh = 0, $valign = 'T', $fitcell = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::MultiCell($w, $h, $txt, $border, $align, $fill, $ln, $x, $y, $reseth, $stretch, $ishtml, $autopadding, $maxh, $valign, $fitcell);
        }
        
        /**
         * This method return the estimated number of lines for print a simple text string using Multicell() method.
         *
         * @param $txt (string) String for calculating his height
         * @param $w (float) Width of cells. If 0, they extend up to the right margin of the page.
         * @param $reseth (boolean) if true reset the last cell height (default false).
         * @param $autopadding (boolean) if true, uses internal padding and automatically adjust it to account for line width (default true).
         * @param $cellpadding (float) Internal cell padding, if empty uses default cell padding.
         * @param $border (mixed) Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
         * @return float Return the minimal height needed for multicell method for printing the $txt param.
         * @author Alexander Escalona Fern\E1ndez, Nicola Asuni
         * @public 
         * @since 4.5.011
         * @static 
         */
        public static function getNumLines($txt, $w = 0, $reseth = false, $autopadding = true, $cellpadding = '', $border = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getNumLines($txt, $w, $reseth, $autopadding, $cellpadding, $border);
        }
        
        /**
         * This method return the estimated height needed for printing a simple text string using the Multicell() method.
         * 
         * Generally, if you want to know the exact height for a block of content you can use the following alternative technique:
         *
         * @pre // store current object
         *  $pdf->startTransaction();
         *  // store starting values
         *  $start_y = $pdf->GetY();
         *  $start_page = $pdf->getPage();
         *  // call your printing functions with your parameters
         *  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
         *  $pdf->MultiCell($w=0, $h=0, $txt, $border=1, $align='L', $fill=false, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
         *  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
         *  // get the new Y
         *  $end_y = $pdf->GetY();
         *  $end_page = $pdf->getPage();
         *  // calculate height
         *  $height = 0;
         *  if ($end_page == $start_page) {
         *  	$height = $end_y - $start_y;
         *  } else {
         *  	for ($page=$start_page; $page <= $end_page; ++$page) {
         *  		$this->setPage($page);
         *  		if ($page == $start_page) {
         *  			// first page
         *  			$height = $this->h - $start_y - $this->bMargin;
         *  		} elseif ($page == $end_page) {
         *  			// last page
         *  			$height = $end_y - $this->tMargin;
         *  		} else {
         *  			$height = $this->h - $this->tMargin - $this->bMargin;
         *  		}
         *  	}
         *  }
         *  // restore previous object
         *  $pdf = $pdf->rollbackTransaction();
         * @param $w (float) Width of cells. If 0, they extend up to the right margin of the page.
         * @param $txt (string) String for calculating his height
         * @param $reseth (boolean) if true reset the last cell height (default false).
         * @param $autopadding (boolean) if true, uses internal padding and automatically adjust it to account for line width (default true).
         * @param $cellpadding (float) Internal cell padding, if empty uses default cell padding.
         * @param $border (mixed) Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
         * @return float Return the minimal height needed for multicell method for printing the $txt param.
         * @author Nicola Asuni, Alexander Escalona Fern\E1ndez
         * @public 
         * @static 
         */
        public static function getStringHeight($w, $txt, $reseth = false, $autopadding = true, $cellpadding = '', $border = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getStringHeight($w, $txt, $reseth, $autopadding, $cellpadding, $border);
        }
        
        /**
         * This method prints text from the current position.<br />
         *
         * @param $h (float) Line height
         * @param $txt (string) String to print
         * @param $link (mixed) URL or identifier returned by AddLink()
         * @param $fill (boolean) Indicates if the cell background must be painted (true) or transparent (false).
         * @param $align (string) Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align (default value)</li><li>C: center</li><li>R: right align</li><li>J: justify</li></ul>
         * @param $ln (boolean) if true set cursor at the bottom of the line, otherwise set cursor at the top of the line.
         * @param $stretch (int) font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
         * @param $firstline (boolean) if true prints only the first line and return the remaining string.
         * @param $firstblock (boolean) if true the string is the starting of a line.
         * @param $maxh (float) maximum height. It should be >= $h and less then remaining space to the bottom of the page, or 0 for disable this feature.
         * @param $wadj (float) first line width will be reduced by this amount (used in HTML mode).
         * @param $margin (array) margin array of the parent container
         * @return mixed Return the number of cells or the remaining string if $firstline = true.
         * @public 
         * @since 1.5
         * @static 
         */
        public static function Write($h, $txt, $link = '', $fill = false, $align = '', $ln = false, $stretch = 0, $firstline = false, $firstblock = false, $maxh = 0, $wadj = 0, $margin = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Write($h, $txt, $link, $fill, $align, $ln, $stretch, $firstline, $firstblock, $maxh, $wadj, $margin);
        }
        
        /**
         * Performs a line break.
         * 
         * The current abscissa goes back to the left margin and the ordinate increases by the amount passed in parameter.
         *
         * @param $h (float) The height of the break. By default, the value equals the height of the last printed cell.
         * @param $cell (boolean) if true add the current left (or right o for RTL) padding to the X coordinate
         * @public 
         * @since 1.0
         * @see Cell()
         * @static 
         */
        public static function Ln($h = '', $cell = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Ln($h, $cell);
        }
        
        /**
         * Returns the relative X value of current position.
         * 
         * The value is relative to the left border for LTR languages and to the right border for RTL languages.
         *
         * @return float 
         * @public 
         * @since 1.2
         * @see SetX(), GetY(), SetY()
         * @static 
         */
        public static function GetX(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::GetX();
        }
        
        /**
         * Returns the absolute X value of current position.
         *
         * @return float 
         * @public 
         * @since 1.2
         * @see SetX(), GetY(), SetY()
         * @static 
         */
        public static function GetAbsX(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::GetAbsX();
        }
        
        /**
         * Returns the ordinate of the current position.
         *
         * @return float 
         * @public 
         * @since 1.0
         * @see SetY(), GetX(), SetX()
         * @static 
         */
        public static function GetY(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::GetY();
        }
        
        /**
         * Defines the abscissa of the current position.
         * 
         * If the passed value is negative, it is relative to the right of the page (or left if language is RTL).
         *
         * @param $x (float) The value of the abscissa in user units.
         * @param $rtloff (boolean) if true always uses the page top-left corner as origin of axis.
         * @public 
         * @since 1.2
         * @see GetX(), GetY(), SetY(), SetXY()
         * @static 
         */
        public static function SetX($x, $rtloff = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetX($x, $rtloff);
        }
        
        /**
         * Moves the current abscissa back to the left margin and sets the ordinate.
         * 
         * If the passed value is negative, it is relative to the bottom of the page.
         *
         * @param $y (float) The value of the ordinate in user units.
         * @param $resetx (bool) if true (default) reset the X position.
         * @param $rtloff (boolean) if true always uses the page top-left corner as origin of axis.
         * @public 
         * @since 1.0
         * @see GetX(), GetY(), SetY(), SetXY()
         * @static 
         */
        public static function SetY($y, $resetx = true, $rtloff = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetY($y, $resetx, $rtloff);
        }
        
        /**
         * Defines the abscissa and ordinate of the current position.
         * 
         * If the passed values are negative, they are relative respectively to the right and bottom of the page.
         *
         * @param $x (float) The value of the abscissa.
         * @param $y (float) The value of the ordinate.
         * @param $rtloff (boolean) if true always uses the page top-left corner as origin of axis.
         * @public 
         * @since 1.2
         * @see SetX(), SetY()
         * @static 
         */
        public static function SetXY($x, $y, $rtloff = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetXY($x, $y, $rtloff);
        }
        
        /**
         * Set the absolute X coordinate of the current pointer.
         *
         * @param $x (float) The value of the abscissa in user units.
         * @public 
         * @since 5.9.186 (2012-09-13)
         * @see setAbsX(), setAbsY(), SetAbsXY()
         * @static 
         */
        public static function SetAbsX($x){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetAbsX($x);
        }
        
        /**
         * Set the absolute Y coordinate of the current pointer.
         *
         * @param $y (float) (float) The value of the ordinate in user units.
         * @public 
         * @since 5.9.186 (2012-09-13)
         * @see setAbsX(), setAbsY(), SetAbsXY()
         * @static 
         */
        public static function SetAbsY($y){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetAbsY($y);
        }
        
        /**
         * Set the absolute X and Y coordinates of the current pointer.
         *
         * @param $x (float) The value of the abscissa in user units.
         * @param $y (float) (float) The value of the ordinate in user units.
         * @public 
         * @since 5.9.186 (2012-09-13)
         * @see setAbsX(), setAbsY(), SetAbsXY()
         * @static 
         */
        public static function SetAbsXY($x, $y){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetAbsXY($x, $y);
        }
        
        /**
         * Send the document to a given destination: string, local file or browser.
         * 
         * In the last case, the plug-in may be used (if present) or a download ("Save as" dialog box) may be forced.<br />
         * The method first calls Close() if necessary to terminate the document.
         *
         * @param $name (string) The name of the file when saved. Note that special characters are removed and blanks characters are replaced with the underscore character.
         * @param $dest (string) Destination where to send the document. It can take one of the following values:<ul><li>I: send the file inline to the browser (default). The plug-in is used if available. The name given by name is used when one selects the "Save as" option on the link generating the PDF.</li><li>D: send to the browser and force a file download with the name given by name.</li><li>F: save to a local server file with the name given by name.</li><li>S: return the document as a string (name is ignored).</li><li>FI: equivalent to F + I option</li><li>FD: equivalent to F + D option</li><li>E: return the document as base64 mime multi-part email attachment (RFC 2045)</li></ul>
         * @return string 
         * @public 
         * @since 1.0
         * @see Close()
         * @static 
         */
        public static function Output($name = 'doc.pdf', $dest = 'I'){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Output($name, $dest);
        }
        
        /**
         * Unset all class variables except the following critical variables.
         *
         * @param $destroyall (boolean) if true destroys all class variables, otherwise preserves critical variables.
         * @param $preserve_objcopy (boolean) if true preserves the objcopy variable
         * @public 
         * @since 4.5.016 (2009-02-24)
         * @static 
         */
        public static function _destroy($destroyall = false, $preserve_objcopy = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::_destroy($destroyall, $preserve_objcopy);
        }
        
        /**
         * Set additional XMP data to be added on the default XMP data just before the end of "x:xmpmeta" tag.
         * 
         * IMPORTANT: This data is added as-is without controls, so you have to validate your data before using this method!
         *
         * @param $xmp (string) Custom XMP data.
         * @since 5.9.128 (2011-10-06)
         * @public 
         * @static 
         */
        public static function setExtraXMP($xmp){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setExtraXMP($xmp);
        }
        
        /**
         * Set the document creation timestamp
         *
         * @param $time (mixed) Document creation timestamp in seconds or date-time string.
         * @public 
         * @since 5.9.152 (2012-03-23)
         * @static 
         */
        public static function setDocCreationTimestamp($time){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setDocCreationTimestamp($time);
        }
        
        /**
         * Set the document modification timestamp
         *
         * @param $time (mixed) Document modification timestamp in seconds or date-time string.
         * @public 
         * @since 5.9.152 (2012-03-23)
         * @static 
         */
        public static function setDocModificationTimestamp($time){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setDocModificationTimestamp($time);
        }
        
        /**
         * Returns document creation timestamp in seconds.
         *
         * @return \(int) Creation timestamp in seconds.
         * @public 
         * @since 5.9.152 (2012-03-23)
         * @static 
         */
        public static function getDocCreationTimestamp(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getDocCreationTimestamp();
        }
        
        /**
         * Returns document modification timestamp in seconds.
         *
         * @return \(int) Modfication timestamp in seconds.
         * @public 
         * @since 5.9.152 (2012-03-23)
         * @static 
         */
        public static function getDocModificationTimestamp(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getDocModificationTimestamp();
        }
        
        /**
         * Set header font.
         *
         * @param $font (array) Array describing the basic font parameters: (family, style, size).
         * @public 
         * @since 1.1
         * @static 
         */
        public static function setHeaderFont($font){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setHeaderFont($font);
        }
        
        /**
         * Get header font.
         *
         * @return \array() Array describing the basic font parameters: (family, style, size).
         * @public 
         * @since 4.0.012 (2008-07-24)
         * @static 
         */
        public static function getHeaderFont(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getHeaderFont();
        }
        
        /**
         * Set footer font.
         *
         * @param $font (array) Array describing the basic font parameters: (family, style, size).
         * @public 
         * @since 1.1
         * @static 
         */
        public static function setFooterFont($font){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setFooterFont($font);
        }
        
        /**
         * Get Footer font.
         *
         * @return \array() Array describing the basic font parameters: (family, style, size).
         * @public 
         * @since 4.0.012 (2008-07-24)
         * @static 
         */
        public static function getFooterFont(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFooterFont();
        }
        
        /**
         * Set language array.
         *
         * @param $language (array)
         * @public 
         * @since 1.1
         * @static 
         */
        public static function setLanguageArray($language){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setLanguageArray($language);
        }
        
        /**
         * Returns the PDF data.
         *
         * @public 
         * @static 
         */
        public static function getPDFData(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getPDFData();
        }
        
        /**
         * Output anchor link.
         *
         * @param $url (string) link URL or internal link (i.e.: &lt;a href="#23,4.5"&gt;link to page 23 at 4.5 Y position&lt;/a&gt;)
         * @param $name (string) link name
         * @param $fill (boolean) Indicates if the cell background must be painted (true) or transparent (false).
         * @param $firstline (boolean) if true prints only the first line and return the remaining string.
         * @param $color (array) array of RGB text color
         * @param $style (string) font style (U, D, B, I)
         * @param $firstblock (boolean) if true the string is the starting of a line.
         * @return \the number of cells used or the remaining text if $firstline = true;
         * @public 
         * @static 
         */
        public static function addHtmlLink($url, $name, $fill = false, $firstline = false, $color = '', $style = -1, $firstblock = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::addHtmlLink($url, $name, $fill, $firstline, $color, $style, $firstblock);
        }
        
        /**
         * Converts pixels to User's Units.
         *
         * @param $px (int) pixels
         * @return float value in user's unit
         * @public 
         * @see setImageScale(), getImageScale()
         * @static 
         */
        public static function pixelsToUnits($px){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::pixelsToUnits($px);
        }
        
        /**
         * Reverse function for htmlentities.
         * 
         * Convert entities in UTF-8.
         *
         * @param $text_to_convert (string) Text to convert.
         * @return string converted text string
         * @public 
         * @static 
         */
        public static function unhtmlentities($text_to_convert){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::unhtmlentities($text_to_convert);
        }
        
        /**
         * Set document protection
         * Remark: the protection against modification is for people who have the full Acrobat product.
         * 
         * If you don't set any password, the document will open as usual. If you set a user password, the PDF viewer will ask for it before displaying the document. The master password, if different from the user one, can be used to get full access.
         * Note: protecting a document requires to encrypt it, which increases the processing time a lot. This can cause a PHP time-out in some cases, especially if the document contains images or fonts.
         *
         * @param $permissions (Array) the set of permissions (specify the ones you want to block):<ul><li>print : Print the document;</li><li>modify : Modify the contents of the document by operations other than those controlled by 'fill-forms', 'extract' and 'assemble';</li><li>copy : Copy or otherwise extract text and graphics from the document;</li><li>annot-forms : Add or modify text annotations, fill in interactive form fields, and, if 'modify' is also set, create or modify interactive form fields (including signature fields);</li><li>fill-forms : Fill in existing interactive form fields (including signature fields), even if 'annot-forms' is not specified;</li><li>extract : Extract text and graphics (in support of accessibility to users with disabilities or for other purposes);</li><li>assemble : Assemble the document (insert, rotate, or delete pages and create bookmarks or thumbnail images), even if 'modify' is not set;</li><li>print-high : Print the document to a representation from which a faithful digital copy of the PDF content could be generated. When this is not set, printing is limited to a low-level representation of the appearance, possibly of degraded quality.</li><li>owner : (inverted logic - only for public-key) when set permits change of encryption and enables all other permissions.</li></ul>
         * @param $user_pass (String) user password. Empty by default.
         * @param $owner_pass (String) owner password. If not specified, a random value is used.
         * @param $mode (int) encryption strength: 0 = RC4 40 bit; 1 = RC4 128 bit; 2 = AES 128 bit; 3 = AES 256 bit.
         * @param $pubkeys (String) array of recipients containing public-key certificates ('c') and permissions ('p'). For example: array(array('c' => 'file://../examples/data/cert/tcpdf.crt', 'p' => array('print')))
         * @public 
         * @since 2.0.000 (2008-01-02)
         * @author Nicola Asuni
         * @static 
         */
        public static function SetProtection($permissions = array(), $user_pass = '', $owner_pass = null, $mode = 0, $pubkeys = null){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetProtection($permissions, $user_pass, $owner_pass, $mode, $pubkeys);
        }
        
        /**
         * Starts a 2D tranformation saving current graphic state.
         * 
         * This function must be called before scaling, mirroring, translation, rotation and skewing.
         * Use StartTransform() before, and StopTransform() after the transformations to restore the normal behavior.
         *
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function StartTransform(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::StartTransform();
        }
        
        /**
         * Stops a 2D tranformation restoring previous graphic state.
         * 
         * This function must be called after scaling, mirroring, translation, rotation and skewing.
         * Use StartTransform() before, and StopTransform() after the transformations to restore the normal behavior.
         *
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function StopTransform(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::StopTransform();
        }
        
        /**
         * Horizontal Scaling.
         *
         * @param $s_x (float) scaling factor for width as percent. 0 is not allowed.
         * @param $x (int) abscissa of the scaling center. Default is current x position
         * @param $y (int) ordinate of the scaling center. Default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function ScaleX($s_x, $x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::ScaleX($s_x, $x, $y);
        }
        
        /**
         * Vertical Scaling.
         *
         * @param $s_y (float) scaling factor for height as percent. 0 is not allowed.
         * @param $x (int) abscissa of the scaling center. Default is current x position
         * @param $y (int) ordinate of the scaling center. Default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function ScaleY($s_y, $x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::ScaleY($s_y, $x, $y);
        }
        
        /**
         * Vertical and horizontal proportional Scaling.
         *
         * @param $s (float) scaling factor for width and height as percent. 0 is not allowed.
         * @param $x (int) abscissa of the scaling center. Default is current x position
         * @param $y (int) ordinate of the scaling center. Default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function ScaleXY($s, $x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::ScaleXY($s, $x, $y);
        }
        
        /**
         * Vertical and horizontal non-proportional Scaling.
         *
         * @param $s_x (float) scaling factor for width as percent. 0 is not allowed.
         * @param $s_y (float) scaling factor for height as percent. 0 is not allowed.
         * @param $x (int) abscissa of the scaling center. Default is current x position
         * @param $y (int) ordinate of the scaling center. Default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function Scale($s_x, $s_y, $x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Scale($s_x, $s_y, $x, $y);
        }
        
        /**
         * Horizontal Mirroring.
         *
         * @param $x (int) abscissa of the point. Default is current x position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function MirrorH($x = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::MirrorH($x);
        }
        
        /**
         * Verical Mirroring.
         *
         * @param $y (int) ordinate of the point. Default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function MirrorV($y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::MirrorV($y);
        }
        
        /**
         * Point reflection mirroring.
         *
         * @param $x (int) abscissa of the point. Default is current x position
         * @param $y (int) ordinate of the point. Default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function MirrorP($x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::MirrorP($x, $y);
        }
        
        /**
         * Reflection against a straight line through point (x, y) with the gradient angle (angle).
         *
         * @param $angle (float) gradient angle of the straight line. Default is 0 (horizontal line).
         * @param $x (int) abscissa of the point. Default is current x position
         * @param $y (int) ordinate of the point. Default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function MirrorL($angle = 0, $x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::MirrorL($angle, $x, $y);
        }
        
        /**
         * Translate graphic object horizontally.
         *
         * @param $t_x (int) movement to the right (or left for RTL)
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function TranslateX($t_x){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::TranslateX($t_x);
        }
        
        /**
         * Translate graphic object vertically.
         *
         * @param $t_y (int) movement to the bottom
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function TranslateY($t_y){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::TranslateY($t_y);
        }
        
        /**
         * Translate graphic object horizontally and vertically.
         *
         * @param $t_x (int) movement to the right
         * @param $t_y (int) movement to the bottom
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function Translate($t_x, $t_y){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Translate($t_x, $t_y);
        }
        
        /**
         * Rotate object.
         *
         * @param $angle (float) angle in degrees for counter-clockwise rotation
         * @param $x (int) abscissa of the rotation center. Default is current x position
         * @param $y (int) ordinate of the rotation center. Default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function Rotate($angle, $x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Rotate($angle, $x, $y);
        }
        
        /**
         * Skew horizontally.
         *
         * @param $angle_x (float) angle in degrees between -90 (skew to the left) and 90 (skew to the right)
         * @param $x (int) abscissa of the skewing center. default is current x position
         * @param $y (int) ordinate of the skewing center. default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function SkewX($angle_x, $x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SkewX($angle_x, $x, $y);
        }
        
        /**
         * Skew vertically.
         *
         * @param $angle_y (float) angle in degrees between -90 (skew to the bottom) and 90 (skew to the top)
         * @param $x (int) abscissa of the skewing center. default is current x position
         * @param $y (int) ordinate of the skewing center. default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function SkewY($angle_y, $x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SkewY($angle_y, $x, $y);
        }
        
        /**
         * Skew.
         *
         * @param $angle_x (float) angle in degrees between -90 (skew to the left) and 90 (skew to the right)
         * @param $angle_y (float) angle in degrees between -90 (skew to the bottom) and 90 (skew to the top)
         * @param $x (int) abscissa of the skewing center. default is current x position
         * @param $y (int) ordinate of the skewing center. default is current y position
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see StartTransform(), StopTransform()
         * @static 
         */
        public static function Skew($angle_x, $angle_y, $x = '', $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Skew($angle_x, $angle_y, $x, $y);
        }
        
        /**
         * Defines the line width. By default, the value equals 0.2 mm. The method can be called before the first page is created and the value is retained from page to page.
         *
         * @param $width (float) The width.
         * @public 
         * @since 1.0
         * @see Line(), Rect(), Cell(), MultiCell()
         * @static 
         */
        public static function SetLineWidth($width){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetLineWidth($width);
        }
        
        /**
         * Returns the current the line width.
         *
         * @return int Line width
         * @public 
         * @since 2.1.000 (2008-01-07)
         * @see Line(), SetLineWidth()
         * @static 
         */
        public static function GetLineWidth(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::GetLineWidth();
        }
        
        /**
         * Set line style.
         *
         * @param $style (array) Line style. Array with keys among the following:
         * <ul>
         *  <li>width (float): Width of the line in user units.</li>
         *  <li>cap (string): Type of cap to put on the line. Possible values are:
         * butt, round, square. The difference between "square" and "butt" is that
         * "square" projects a flat end past the end of the line.</li>
         *  <li>join (string): Type of join. Possible values are: miter, round,
         * bevel.</li>
         *  <li>dash (mixed): Dash pattern. Is 0 (without dash) or string with
         * series of length values, which are the lengths of the on and off dashes.
         * For example: "2" represents 2 on, 2 off, 2 on, 2 off, ...; "2,1" is 2 on,
         * 1 off, 2 on, 1 off, ...</li>
         *  <li>phase (integer): Modifier on the dash pattern which is used to shift
         * the point at which the pattern starts.</li>
         *  <li>color (array): Draw color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName).</li>
         * </ul>
         * @param $ret (boolean) if true do not send the command.
         * @return string the PDF command
         * @public 
         * @since 2.1.000 (2008-01-08)
         * @static 
         */
        public static function SetLineStyle($style, $ret = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetLineStyle($style, $ret);
        }
        
        /**
         * Draws a line between two points.
         *
         * @param $x1 (float) Abscissa of first point.
         * @param $y1 (float) Ordinate of first point.
         * @param $x2 (float) Abscissa of second point.
         * @param $y2 (float) Ordinate of second point.
         * @param $style (array) Line style. Array like for SetLineStyle(). Default value: default line style (empty array).
         * @public 
         * @since 1.0
         * @see SetLineWidth(), SetDrawColor(), SetLineStyle()
         * @static 
         */
        public static function Line($x1, $y1, $x2, $y2, $style = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Line($x1, $y1, $x2, $y2, $style);
        }
        
        /**
         * Draws a rectangle.
         *
         * @param $x (float) Abscissa of upper-left corner.
         * @param $y (float) Ordinate of upper-left corner.
         * @param $w (float) Width.
         * @param $h (float) Height.
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $border_style (array) Border style of rectangle. Array with keys among the following:
         * <ul>
         *  <li>all: Line style of all borders. Array like for SetLineStyle().</li>
         *  <li>L, T, R, B or combinations: Line style of left, top, right or bottom border. Array like for SetLineStyle().</li>
         * </ul>
         * If a key is not present or is null, the correspondent border is not drawn. Default value: default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
         * @public 
         * @since 1.0
         * @see SetLineStyle()
         * @static 
         */
        public static function Rect($x, $y, $w, $h, $style = '', $border_style = array(), $fill_color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Rect($x, $y, $w, $h, $style, $border_style, $fill_color);
        }
        
        /**
         * Draws a Bezier curve.
         * 
         * The Bezier curve is a tangent to the line between the control points at
         * either end of the curve.
         *
         * @param $x0 (float) Abscissa of start point.
         * @param $y0 (float) Ordinate of start point.
         * @param $x1 (float) Abscissa of control point 1.
         * @param $y1 (float) Ordinate of control point 1.
         * @param $x2 (float) Abscissa of control point 2.
         * @param $y2 (float) Ordinate of control point 2.
         * @param $x3 (float) Abscissa of end point.
         * @param $y3 (float) Ordinate of end point.
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $line_style (array) Line style of curve. Array like for SetLineStyle(). Default value: default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
         * @public 
         * @see SetLineStyle()
         * @since 2.1.000 (2008-01-08)
         * @static 
         */
        public static function Curve($x0, $y0, $x1, $y1, $x2, $y2, $x3, $y3, $style = '', $line_style = array(), $fill_color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Curve($x0, $y0, $x1, $y1, $x2, $y2, $x3, $y3, $style, $line_style, $fill_color);
        }
        
        /**
         * Draws a poly-Bezier curve.
         * 
         * Each Bezier curve segment is a tangent to the line between the control points at
         * either end of the curve.
         *
         * @param $x0 (float) Abscissa of start point.
         * @param $y0 (float) Ordinate of start point.
         * @param $segments (float) An array of bezier descriptions. Format: array(x1, y1, x2, y2, x3, y3).
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $line_style (array) Line style of curve. Array like for SetLineStyle(). Default value: default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
         * @public 
         * @see SetLineStyle()
         * @since 3.0008 (2008-05-12)
         * @static 
         */
        public static function Polycurve($x0, $y0, $segments, $style = '', $line_style = array(), $fill_color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Polycurve($x0, $y0, $segments, $style, $line_style, $fill_color);
        }
        
        /**
         * Draws an ellipse.
         * 
         * An ellipse is formed from n Bezier curves.
         *
         * @param $x0 (float) Abscissa of center point.
         * @param $y0 (float) Ordinate of center point.
         * @param $rx (float) Horizontal radius.
         * @param $ry (float) Vertical radius (if ry = 0 then is a circle, see Circle()). Default value: 0.
         * @param $angle: (float) Angle oriented (anti-clockwise). Default value: 0.
         * @param $astart: (float) Angle start of draw line. Default value: 0.
         * @param $afinish: (float) Angle finish of draw line. Default value: 360.
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $line_style (array) Line style of ellipse. Array like for SetLineStyle(). Default value: default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
         * @param $nc (integer) Number of curves used to draw a 90 degrees portion of ellipse.
         * @author Nicola Asuni
         * @public 
         * @since 2.1.000 (2008-01-08)
         * @static 
         */
        public static function Ellipse($x0, $y0, $rx, $ry = '', $angle = 0, $astart = 0, $afinish = 360, $style = '', $line_style = array(), $fill_color = array(), $nc = 2){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Ellipse($x0, $y0, $rx, $ry, $angle, $astart, $afinish, $style, $line_style, $fill_color, $nc);
        }
        
        /**
         * Draws a circle.
         * 
         * A circle is formed from n Bezier curves.
         *
         * @param $x0 (float) Abscissa of center point.
         * @param $y0 (float) Ordinate of center point.
         * @param $r (float) Radius.
         * @param $angstr: (float) Angle start of draw line. Default value: 0.
         * @param $angend: (float) Angle finish of draw line. Default value: 360.
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $line_style (array) Line style of circle. Array like for SetLineStyle(). Default value: default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(red, green, blue). Default value: default color (empty array).
         * @param $nc (integer) Number of curves used to draw a 90 degrees portion of circle.
         * @public 
         * @since 2.1.000 (2008-01-08)
         * @static 
         */
        public static function Circle($x0, $y0, $r, $angstr = 0, $angend = 360, $style = '', $line_style = array(), $fill_color = array(), $nc = 2){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Circle($x0, $y0, $r, $angstr, $angend, $style, $line_style, $fill_color, $nc);
        }
        
        /**
         * Draws a polygonal line
         *
         * @param $p (array) Points 0 to ($np - 1). Array with values (x0, y0, x1, y1,..., x(np-1), y(np - 1))
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $line_style (array) Line style of polygon. Array with keys among the following:
         * <ul>
         *  <li>all: Line style of all lines. Array like for SetLineStyle().</li>
         *  <li>0 to ($np - 1): Line style of each line. Array like for SetLineStyle().</li>
         * </ul>
         * If a key is not present or is null, not draws the line. Default value is default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
         * @since 4.8.003 (2009-09-15)
         * @public 
         * @static 
         */
        public static function PolyLine($p, $style = '', $line_style = array(), $fill_color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::PolyLine($p, $style, $line_style, $fill_color);
        }
        
        /**
         * Draws a polygon.
         *
         * @param $p (array) Points 0 to ($np - 1). Array with values (x0, y0, x1, y1,..., x(np-1), y(np - 1))
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $line_style (array) Line style of polygon. Array with keys among the following:
         * <ul>
         *  <li>all: Line style of all lines. Array like for SetLineStyle().</li>
         *  <li>0 to ($np - 1): Line style of each line. Array like for SetLineStyle().</li>
         * </ul>
         * If a key is not present or is null, not draws the line. Default value is default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
         * @param $closed (boolean) if true the polygon is closes, otherwise will remain open
         * @public 
         * @since 2.1.000 (2008-01-08)
         * @static 
         */
        public static function Polygon($p, $style = '', $line_style = array(), $fill_color = array(), $closed = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Polygon($p, $style, $line_style, $fill_color, $closed);
        }
        
        /**
         * Draws a regular polygon.
         *
         * @param $x0 (float) Abscissa of center point.
         * @param $y0 (float) Ordinate of center point.
         * @param $r: (float) Radius of inscribed circle.
         * @param $ns (integer) Number of sides.
         * @param $angle (float) Angle oriented (anti-clockwise). Default value: 0.
         * @param $draw_circle (boolean) Draw inscribed circle or not. Default value: false.
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $line_style (array) Line style of polygon sides. Array with keys among the following:
         * <ul>
         *  <li>all: Line style of all sides. Array like for SetLineStyle().</li>
         *  <li>0 to ($ns - 1): Line style of each side. Array like for SetLineStyle().</li>
         * </ul>
         * If a key is not present or is null, not draws the side. Default value is default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(red, green, blue). Default value: default color (empty array).
         * @param $circle_style (string) Style of rendering of inscribed circle (if draws). Possible values are:
         * <ul>
         *  <li>D or empty string: Draw (default).</li>
         *  <li>F: Fill.</li>
         *  <li>DF or FD: Draw and fill.</li>
         *  <li>CNZ: Clipping mode (using the even-odd rule to determine which regions lie inside the clipping path).</li>
         *  <li>CEO: Clipping mode (using the nonzero winding number rule to determine which regions lie inside the clipping path).</li>
         * </ul>
         * @param $circle_outLine_style (array) Line style of inscribed circle (if draws). Array like for SetLineStyle(). Default value: default line style (empty array).
         * @param $circle_fill_color (array) Fill color of inscribed circle (if draws). Format: array(red, green, blue). Default value: default color (empty array).
         * @public 
         * @since 2.1.000 (2008-01-08)
         * @static 
         */
        public static function RegularPolygon($x0, $y0, $r, $ns, $angle = 0, $draw_circle = false, $style = '', $line_style = array(), $fill_color = array(), $circle_style = '', $circle_outLine_style = array(), $circle_fill_color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::RegularPolygon($x0, $y0, $r, $ns, $angle, $draw_circle, $style, $line_style, $fill_color, $circle_style, $circle_outLine_style, $circle_fill_color);
        }
        
        /**
         * Draws a star polygon
         *
         * @param $x0 (float) Abscissa of center point.
         * @param $y0 (float) Ordinate of center point.
         * @param $r (float) Radius of inscribed circle.
         * @param $nv (integer) Number of vertices.
         * @param $ng (integer) Number of gap (if ($ng % $nv = 1) then is a regular polygon).
         * @param $angle: (float) Angle oriented (anti-clockwise). Default value: 0.
         * @param $draw_circle: (boolean) Draw inscribed circle or not. Default value is false.
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $line_style (array) Line style of polygon sides. Array with keys among the following:
         * <ul>
         *  <li>all: Line style of all sides. Array like for
         * SetLineStyle().</li>
         *  <li>0 to (n - 1): Line style of each side. Array like for SetLineStyle().</li>
         * </ul>
         * If a key is not present or is null, not draws the side. Default value is default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(red, green, blue). Default value: default color (empty array).
         * @param $circle_style (string) Style of rendering of inscribed circle (if draws). Possible values are:
         * <ul>
         *  <li>D or empty string: Draw (default).</li>
         *  <li>F: Fill.</li>
         *  <li>DF or FD: Draw and fill.</li>
         *  <li>CNZ: Clipping mode (using the even-odd rule to determine which regions lie inside the clipping path).</li>
         *  <li>CEO: Clipping mode (using the nonzero winding number rule to determine which regions lie inside the clipping path).</li>
         * </ul>
         * @param $circle_outLine_style (array) Line style of inscribed circle (if draws). Array like for SetLineStyle(). Default value: default line style (empty array).
         * @param $circle_fill_color (array) Fill color of inscribed circle (if draws). Format: array(red, green, blue). Default value: default color (empty array).
         * @public 
         * @since 2.1.000 (2008-01-08)
         * @static 
         */
        public static function StarPolygon($x0, $y0, $r, $nv, $ng, $angle = 0, $draw_circle = false, $style = '', $line_style = array(), $fill_color = array(), $circle_style = '', $circle_outLine_style = array(), $circle_fill_color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::StarPolygon($x0, $y0, $r, $nv, $ng, $angle, $draw_circle, $style, $line_style, $fill_color, $circle_style, $circle_outLine_style, $circle_fill_color);
        }
        
        /**
         * Draws a rounded rectangle.
         *
         * @param $x (float) Abscissa of upper-left corner.
         * @param $y (float) Ordinate of upper-left corner.
         * @param $w (float) Width.
         * @param $h (float) Height.
         * @param $r (float) the radius of the circle used to round off the corners of the rectangle.
         * @param $round_corner (string) Draws rounded corner or not. String with a 0 (not rounded i-corner) or 1 (rounded i-corner) in i-position. Positions are, in order and begin to 0: top right, bottom right, bottom left and top left. Default value: all rounded corner ("1111").
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $border_style (array) Border style of rectangle. Array like for SetLineStyle(). Default value: default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
         * @public 
         * @since 2.1.000 (2008-01-08)
         * @static 
         */
        public static function RoundedRect($x, $y, $w, $h, $r, $round_corner = '1111', $style = '', $border_style = array(), $fill_color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::RoundedRect($x, $y, $w, $h, $r, $round_corner, $style, $border_style, $fill_color);
        }
        
        /**
         * Draws a rounded rectangle.
         *
         * @param $x (float) Abscissa of upper-left corner.
         * @param $y (float) Ordinate of upper-left corner.
         * @param $w (float) Width.
         * @param $h (float) Height.
         * @param $rx (float) the x-axis radius of the ellipse used to round off the corners of the rectangle.
         * @param $ry (float) the y-axis radius of the ellipse used to round off the corners of the rectangle.
         * @param $round_corner (string) Draws rounded corner or not. String with a 0 (not rounded i-corner) or 1 (rounded i-corner) in i-position. Positions are, in order and begin to 0: top right, bottom right, bottom left and top left. Default value: all rounded corner ("1111").
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $border_style (array) Border style of rectangle. Array like for SetLineStyle(). Default value: default line style (empty array).
         * @param $fill_color (array) Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
         * @public 
         * @since 4.9.019 (2010-04-22)
         * @static 
         */
        public static function RoundedRectXY($x, $y, $w, $h, $rx, $ry, $round_corner = '1111', $style = '', $border_style = array(), $fill_color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::RoundedRectXY($x, $y, $w, $h, $rx, $ry, $round_corner, $style, $border_style, $fill_color);
        }
        
        /**
         * Draws a grahic arrow.
         *
         * @param $x0 (float) Abscissa of first point.
         * @param $y0 (float) Ordinate of first point.
         * @param $x1 (float) Abscissa of second point.
         * @param $y1 (float) Ordinate of second point.
         * @param $head_style (int) (0 = draw only arrowhead arms, 1 = draw closed arrowhead, but no fill, 2 = closed and filled arrowhead, 3 = filled arrowhead)
         * @param $arm_size (float) length of arrowhead arms
         * @param $arm_angle (int) angle between an arm and the shaft
         * @author Piotr Galecki, Nicola Asuni, Andy Meier
         * @since 4.6.018 (2009-07-10)
         * @static 
         */
        public static function Arrow($x0, $y0, $x1, $y1, $head_style = 0, $arm_size = 5, $arm_angle = 15){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Arrow($x0, $y0, $x1, $y1, $head_style, $arm_size, $arm_angle);
        }
        
        /**
         * Add a Named Destination.
         * 
         * NOTE: destination names are unique, so only last entry will be saved.
         *
         * @param $name (string) Destination name.
         * @param $y (float) Y position in user units of the destiantion on the selected page (default = -1 = current position; 0 = page start;).
         * @param $page (int|string) Target page number (leave empty for current page). If you prefix a page number with the * character, then this page will not be changed when adding/deleting/moving pages.
         * @param $x (float) X position in user units of the destiantion on the selected page (default = -1 = current position;).
         * @return \(string) Stripped named destination identifier or false in case of error.
         * @public 
         * @author Christian Deligant, Nicola Asuni
         * @since 5.9.097 (2011-06-23)
         * @static 
         */
        public static function setDestination($name, $y = -1, $page = '', $x = -1){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setDestination($name, $y, $page, $x);
        }
        
        /**
         * Return the Named Destination array.
         *
         * @return \(array) Named Destination array.
         * @public 
         * @author Nicola Asuni
         * @since 5.9.097 (2011-06-23)
         * @static 
         */
        public static function getDestination(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getDestination();
        }
        
        /**
         * Adds a bookmark - alias for Bookmark().
         *
         * @param $txt (string) Bookmark description.
         * @param $level (int) Bookmark level (minimum value is 0).
         * @param $y (float) Y position in user units of the bookmark on the selected page (default = -1 = current position; 0 = page start;).
         * @param $page (int|string) Target page number (leave empty for current page). If you prefix a page number with the * character, then this page will not be changed when adding/deleting/moving pages.
         * @param $style (string) Font style: B = Bold, I = Italic, BI = Bold + Italic.
         * @param $color (array) RGB color array (values from 0 to 255).
         * @param $x (float) X position in user units of the bookmark on the selected page (default = -1 = current position;).
         * @param $link (mixed) URL, or numerical link ID, or named destination (# character followed by the destination name), or embedded file (* character followed by the file name).
         * @public 
         * @static 
         */
        public static function setBookmark($txt, $level = 0, $y = -1, $page = '', $style = '', $color = array(), $x = -1, $link = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setBookmark($txt, $level, $y, $page, $style, $color, $x, $link);
        }
        
        /**
         * Adds a bookmark.
         *
         * @param $txt (string) Bookmark description.
         * @param $level (int) Bookmark level (minimum value is 0).
         * @param $y (float) Y position in user units of the bookmark on the selected page (default = -1 = current position; 0 = page start;).
         * @param $page (int|string) Target page number (leave empty for current page). If you prefix a page number with the * character, then this page will not be changed when adding/deleting/moving pages.
         * @param $style (string) Font style: B = Bold, I = Italic, BI = Bold + Italic.
         * @param $color (array) RGB color array (values from 0 to 255).
         * @param $x (float) X position in user units of the bookmark on the selected page (default = -1 = current position;).
         * @param $link (mixed) URL, or numerical link ID, or named destination (# character followed by the destination name), or embedded file (* character followed by the file name).
         * @public 
         * @since 2.1.002 (2008-02-12)
         * @static 
         */
        public static function Bookmark($txt, $level = 0, $y = -1, $page = '', $style = '', $color = array(), $x = -1, $link = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Bookmark($txt, $level, $y, $page, $style, $color, $x, $link);
        }
        
        /**
         * Adds a javascript
         *
         * @param $script (string) Javascript code
         * @public 
         * @author Johannes G\FCntert, Nicola Asuni
         * @since 2.1.002 (2008-02-12)
         * @static 
         */
        public static function IncludeJS($script){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::IncludeJS($script);
        }
        
        /**
         * Adds a javascript object and return object ID
         *
         * @param $script (string) Javascript code
         * @param $onload (boolean) if true executes this object when opening the document
         * @return int internal object ID
         * @public 
         * @author Nicola Asuni
         * @since 4.8.000 (2009-09-07)
         * @static 
         */
        public static function addJavascriptObject($script, $onload = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::addJavascriptObject($script, $onload);
        }
        
        /**
         * Set default properties for form fields.
         *
         * @param $prop (array) javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
         * @public 
         * @author Nicola Asuni
         * @since 4.8.000 (2009-09-06)
         * @static 
         */
        public static function setFormDefaultProp($prop = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setFormDefaultProp($prop);
        }
        
        /**
         * Return the default properties for form fields.
         *
         * @return array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
         * @public 
         * @author Nicola Asuni
         * @since 4.8.000 (2009-09-06)
         * @static 
         */
        public static function getFormDefaultProp(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFormDefaultProp();
        }
        
        /**
         * Creates a text field
         *
         * @param $name (string) field name
         * @param $w (float) Width of the rectangle
         * @param $h (float) Height of the rectangle
         * @param $prop (array) javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
         * @param $opt (array) annotation parameters. Possible values are described on official PDF32000_2008 reference.
         * @param $x (float) Abscissa of the upper-left corner of the rectangle
         * @param $y (float) Ordinate of the upper-left corner of the rectangle
         * @param $js (boolean) if true put the field using JavaScript (requires Acrobat Writer to be rendered).
         * @public 
         * @author Nicola Asuni
         * @since 4.8.000 (2009-09-07)
         * @static 
         */
        public static function TextField($name, $w, $h, $prop = array(), $opt = array(), $x = '', $y = '', $js = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::TextField($name, $w, $h, $prop, $opt, $x, $y, $js);
        }
        
        /**
         * Creates a RadioButton field.
         *
         * @param $name (string) Field name.
         * @param $w (int) Width of the radio button.
         * @param $prop (array) Javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
         * @param $opt (array) Annotation parameters. Possible values are described on official PDF32000_2008 reference.
         * @param $onvalue (string) Value to be returned if selected.
         * @param $checked (boolean) Define the initial state.
         * @param $x (float) Abscissa of the upper-left corner of the rectangle
         * @param $y (float) Ordinate of the upper-left corner of the rectangle
         * @param $js (boolean) If true put the field using JavaScript (requires Acrobat Writer to be rendered).
         * @public 
         * @author Nicola Asuni
         * @since 4.8.000 (2009-09-07)
         * @static 
         */
        public static function RadioButton($name, $w, $prop = array(), $opt = array(), $onvalue = 'On', $checked = false, $x = '', $y = '', $js = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::RadioButton($name, $w, $prop, $opt, $onvalue, $checked, $x, $y, $js);
        }
        
        /**
         * Creates a List-box field
         *
         * @param $name (string) field name
         * @param $w (int) width
         * @param $h (int) height
         * @param $values (array) array containing the list of values.
         * @param $prop (array) javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
         * @param $opt (array) annotation parameters. Possible values are described on official PDF32000_2008 reference.
         * @param $x (float) Abscissa of the upper-left corner of the rectangle
         * @param $y (float) Ordinate of the upper-left corner of the rectangle
         * @param $js (boolean) if true put the field using JavaScript (requires Acrobat Writer to be rendered).
         * @public 
         * @author Nicola Asuni
         * @since 4.8.000 (2009-09-07)
         * @static 
         */
        public static function ListBox($name, $w, $h, $values, $prop = array(), $opt = array(), $x = '', $y = '', $js = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::ListBox($name, $w, $h, $values, $prop, $opt, $x, $y, $js);
        }
        
        /**
         * Creates a Combo-box field
         *
         * @param $name (string) field name
         * @param $w (int) width
         * @param $h (int) height
         * @param $values (array) array containing the list of values.
         * @param $prop (array) javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
         * @param $opt (array) annotation parameters. Possible values are described on official PDF32000_2008 reference.
         * @param $x (float) Abscissa of the upper-left corner of the rectangle
         * @param $y (float) Ordinate of the upper-left corner of the rectangle
         * @param $js (boolean) if true put the field using JavaScript (requires Acrobat Writer to be rendered).
         * @public 
         * @author Nicola Asuni
         * @since 4.8.000 (2009-09-07)
         * @static 
         */
        public static function ComboBox($name, $w, $h, $values, $prop = array(), $opt = array(), $x = '', $y = '', $js = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::ComboBox($name, $w, $h, $values, $prop, $opt, $x, $y, $js);
        }
        
        /**
         * Creates a CheckBox field
         *
         * @param $name (string) field name
         * @param $w (int) width
         * @param $checked (boolean) define the initial state.
         * @param $prop (array) javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
         * @param $opt (array) annotation parameters. Possible values are described on official PDF32000_2008 reference.
         * @param $onvalue (string) value to be returned if selected.
         * @param $x (float) Abscissa of the upper-left corner of the rectangle
         * @param $y (float) Ordinate of the upper-left corner of the rectangle
         * @param $js (boolean) if true put the field using JavaScript (requires Acrobat Writer to be rendered).
         * @public 
         * @author Nicola Asuni
         * @since 4.8.000 (2009-09-07)
         * @static 
         */
        public static function CheckBox($name, $w, $checked = false, $prop = array(), $opt = array(), $onvalue = 'Yes', $x = '', $y = '', $js = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::CheckBox($name, $w, $checked, $prop, $opt, $onvalue, $x, $y, $js);
        }
        
        /**
         * Creates a button field
         *
         * @param $name (string) field name
         * @param $w (int) width
         * @param $h (int) height
         * @param $caption (string) caption.
         * @param $action (mixed) action triggered by pressing the button. Use a string to specify a javascript action. Use an array to specify a form action options as on section 12.7.5 of PDF32000_2008.
         * @param $prop (array) javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
         * @param $opt (array) annotation parameters. Possible values are described on official PDF32000_2008 reference.
         * @param $x (float) Abscissa of the upper-left corner of the rectangle
         * @param $y (float) Ordinate of the upper-left corner of the rectangle
         * @param $js (boolean) if true put the field using JavaScript (requires Acrobat Writer to be rendered).
         * @public 
         * @author Nicola Asuni
         * @since 4.8.000 (2009-09-07)
         * @static 
         */
        public static function Button($name, $w, $h, $caption, $action, $prop = array(), $opt = array(), $x = '', $y = '', $js = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Button($name, $w, $h, $caption, $action, $prop, $opt, $x, $y, $js);
        }
        
        /**
         * Set User's Rights for PDF Reader
         * WARNING: This is experimental and currently do not work.
         * 
         * Check the PDF Reference 8.7.1 Transform Methods,
         * Table 8.105 Entries in the UR transform parameters dictionary
         *
         * @param $enable (boolean) if true enable user's rights on PDF reader
         * @param $document (string) Names specifying additional document-wide usage rights for the document. The only defined value is "/FullSave", which permits a user to save the document along with modified form and/or annotation data.
         * @param $annots (string) Names specifying additional annotation-related usage rights for the document. Valid names in PDF 1.5 and later are /Create/Delete/Modify/Copy/Import/Export, which permit the user to perform the named operation on annotations.
         * @param $form (string) Names specifying additional form-field-related usage rights for the document. Valid names are: /Add/Delete/FillIn/Import/Export/SubmitStandalone/SpawnTemplate
         * @param $signature (string) Names specifying additional signature-related usage rights for the document. The only defined value is /Modify, which permits a user to apply a digital signature to an existing signature form field or clear a signed signature form field.
         * @param $ef (string) Names specifying additional usage rights for named embedded files in the document. Valid names are /Create/Delete/Modify/Import, which permit the user to perform the named operation on named embedded files
         * Names specifying additional embedded-files-related usage rights for the document.
         * @param $formex (string) Names specifying additional form-field-related usage rights. The only valid name is BarcodePlaintext, which permits text form field data to be encoded as a plaintext two-dimensional barcode.
         * @public 
         * @author Nicola Asuni
         * @since 2.9.000 (2008-03-26)
         * @static 
         */
        public static function setUserRights($enable = true, $document = '/FullSave', $annots = '/Create/Delete/Modify/Copy/Import/Export', $form = '/Add/Delete/FillIn/Import/Export/SubmitStandalone/SpawnTemplate', $signature = '/Modify', $ef = '/Create/Delete/Modify/Import', $formex = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setUserRights($enable, $document, $annots, $form, $signature, $ef, $formex);
        }
        
        /**
         * Enable document signature (requires the OpenSSL Library).
         * 
         * The digital signature improve document authenticity and integrity and allows o enable extra features on Acrobat Reader.
         * To create self-signed signature: openssl req -x509 -nodes -days 365000 -newkey rsa:1024 -keyout tcpdf.crt -out tcpdf.crt
         * To export crt to p12: openssl pkcs12 -export -in tcpdf.crt -out tcpdf.p12
         * To convert pfx certificate to pem: openssl pkcs12 -in tcpdf.pfx -out tcpdf.crt -nodes
         *
         * @param $signing_cert (mixed) signing certificate (string or filename prefixed with 'file://')
         * @param $private_key (mixed) private key (string or filename prefixed with 'file://')
         * @param $private_key_password (string) password
         * @param $extracerts (string) specifies the name of a file containing a bunch of extra certificates to include in the signature which can for example be used to help the recipient to verify the certificate that you used.
         * @param $cert_type (int) The access permissions granted for this document. Valid values shall be: 1 = No changes to the document shall be permitted; any change to the document shall invalidate the signature; 2 = Permitted changes shall be filling in forms, instantiating page templates, and signing; other changes shall invalidate the signature; 3 = Permitted changes shall be the same as for 2, as well as annotation creation, deletion, and modification; other changes shall invalidate the signature.
         * @param $info (array) array of option information: Name, Location, Reason, ContactInfo.
         * @param $approval (string) Enable approval signature eg. for PDF incremental update
         * @public 
         * @author Nicola Asuni
         * @since 4.6.005 (2009-04-24)
         * @static 
         */
        public static function setSignature($signing_cert = '', $private_key = '', $private_key_password = '', $extracerts = '', $cert_type = 2, $info = array(), $approval = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setSignature($signing_cert, $private_key, $private_key_password, $extracerts, $cert_type, $info, $approval);
        }
        
        /**
         * Set the digital signature appearance (a cliccable rectangle area to get signature properties)
         *
         * @param $x (float) Abscissa of the upper-left corner.
         * @param $y (float) Ordinate of the upper-left corner.
         * @param $w (float) Width of the signature area.
         * @param $h (float) Height of the signature area.
         * @param $page (int) option page number (if < 0 the current page is used).
         * @param $name (string) Name of the signature.
         * @public 
         * @author Nicola Asuni
         * @since 5.3.011 (2010-06-17)
         * @static 
         */
        public static function setSignatureAppearance($x = 0, $y = 0, $w = 0, $h = 0, $page = -1, $name = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setSignatureAppearance($x, $y, $w, $h, $page, $name);
        }
        
        /**
         * Add an empty digital signature appearance (a cliccable rectangle area to get signature properties)
         *
         * @param $x (float) Abscissa of the upper-left corner.
         * @param $y (float) Ordinate of the upper-left corner.
         * @param $w (float) Width of the signature area.
         * @param $h (float) Height of the signature area.
         * @param $page (int) option page number (if < 0 the current page is used).
         * @param $name (string) Name of the signature.
         * @public 
         * @author Nicola Asuni
         * @since 5.9.101 (2011-07-06)
         * @static 
         */
        public static function addEmptySignatureAppearance($x = 0, $y = 0, $w = 0, $h = 0, $page = -1, $name = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::addEmptySignatureAppearance($x, $y, $w, $h, $page, $name);
        }
        
        /**
         * Enable document timestamping (requires the OpenSSL Library).
         * 
         * The trusted timestamping improve document security that means that no one should be able to change the document once it has been recorded.
         * Use with digital signature only!
         *
         * @param $tsa_host (string) Time Stamping Authority (TSA) server (prefixed with 'https://')
         * @param $tsa_username (string) Specifies the username for TSA authorization (optional) OR specifies the TSA authorization PEM file (see: example_66.php, optional)
         * @param $tsa_password (string) Specifies the password for TSA authorization (optional)
         * @param $tsa_cert (string) Specifies the location of TSA certificate for authorization (optional for cURL)
         * @public 
         * @author Richard Stockinger
         * @since 6.0.090 (2014-06-16)
         * @static 
         */
        public static function setTimeStamp($tsa_host = '', $tsa_username = '', $tsa_password = '', $tsa_cert = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setTimeStamp($tsa_host, $tsa_username, $tsa_password, $tsa_cert);
        }
        
        /**
         * Create a new page group.
         * 
         * NOTE: call this function before calling AddPage()
         *
         * @param $page (int) starting group page (leave empty for next page).
         * @public 
         * @since 3.0.000 (2008-03-27)
         * @static 
         */
        public static function startPageGroup($page = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::startPageGroup($page);
        }
        
        /**
         * Set the starting page number.
         *
         * @param $num (int) Starting page number.
         * @since 5.9.093 (2011-06-16)
         * @public 
         * @static 
         */
        public static function setStartingPageNumber($num = 1){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setStartingPageNumber($num);
        }
        
        /**
         * Returns the string alias used right align page numbers.
         * 
         * If the current font is unicode type, the returned string wil contain an additional open curly brace.
         *
         * @return string 
         * @since 5.9.099 (2011-06-27)
         * @public 
         * @static 
         */
        public static function getAliasRightShift(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getAliasRightShift();
        }
        
        /**
         * Returns the string alias used for the total number of pages.
         * 
         * If the current font is unicode type, the returned string is surrounded by additional curly braces.
         * This alias will be replaced by the total number of pages in the document.
         *
         * @return string 
         * @since 4.0.018 (2008-08-08)
         * @public 
         * @static 
         */
        public static function getAliasNbPages(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getAliasNbPages();
        }
        
        /**
         * Returns the string alias used for the page number.
         * 
         * If the current font is unicode type, the returned string is surrounded by additional curly braces.
         * This alias will be replaced by the page number.
         *
         * @return string 
         * @since 4.5.000 (2009-01-02)
         * @public 
         * @static 
         */
        public static function getAliasNumPage(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getAliasNumPage();
        }
        
        /**
         * Return the alias for the total number of pages in the current page group.
         * 
         * If the current font is unicode type, the returned string is surrounded by additional curly braces.
         * This alias will be replaced by the total number of pages in this group.
         *
         * @return \alias of the current page group
         * @public 
         * @since 3.0.000 (2008-03-27)
         * @static 
         */
        public static function getPageGroupAlias(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getPageGroupAlias();
        }
        
        /**
         * Return the alias for the page number on the current page group.
         * 
         * If the current font is unicode type, the returned string is surrounded by additional curly braces.
         * This alias will be replaced by the page number (relative to the belonging group).
         *
         * @return \alias of the current page group
         * @public 
         * @since 4.5.000 (2009-01-02)
         * @static 
         */
        public static function getPageNumGroupAlias(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getPageNumGroupAlias();
        }
        
        /**
         * Return the current page in the group.
         *
         * @return \current page in the group
         * @public 
         * @since 3.0.000 (2008-03-27)
         * @static 
         */
        public static function getGroupPageNo(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getGroupPageNo();
        }
        
        /**
         * Returns the current group page number formatted as a string.
         *
         * @public 
         * @since 4.3.003 (2008-11-18)
         * @see PaneNo(), formatPageNumber()
         * @static 
         */
        public static function getGroupPageNoFormatted(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getGroupPageNoFormatted();
        }
        
        /**
         * Returns the current page number formatted as a string.
         *
         * @public 
         * @since 4.2.005 (2008-11-06)
         * @see PaneNo(), formatPageNumber()
         * @static 
         */
        public static function PageNoFormatted(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::PageNoFormatted();
        }
        
        /**
         * Start a new pdf layer.
         *
         * @param $name (string) Layer name (only a-z letters and numbers). Leave empty for automatic name.
         * @param $print (boolean|null) Set to TRUE to print this layer, FALSE to not print and NULL to not set this option
         * @param $view (boolean) Set to true to view this layer.
         * @param $lock (boolean) If true lock the layer
         * @public 
         * @since 5.9.102 (2011-07-13)
         * @static 
         */
        public static function startLayer($name = '', $print = true, $view = true, $lock = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::startLayer($name, $print, $view, $lock);
        }
        
        /**
         * End the current PDF layer.
         *
         * @public 
         * @since 5.9.102 (2011-07-13)
         * @static 
         */
        public static function endLayer(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::endLayer();
        }
        
        /**
         * Set the visibility of the successive elements.
         * 
         * This can be useful, for instance, to put a background
         * image or color that will show on screen but won't print.
         *
         * @param $v (string) visibility mode. Legal values are: all, print, screen or view.
         * @public 
         * @since 3.0.000 (2008-03-27)
         * @static 
         */
        public static function setVisibility($v){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setVisibility($v);
        }
        
        /**
         * Set overprint mode for stroking (OP) and non-stroking (op) painting operations.
         * 
         * (Check the "Entries in a Graphics State Parameter Dictionary" on PDF 32000-1:2008).
         *
         * @param $stroking (boolean) If true apply overprint for stroking operations.
         * @param $nonstroking (boolean) If true apply overprint for painting operations other than stroking.
         * @param $mode (integer) Overprint mode: (0 = each source colour component value replaces the value previously painted for the corresponding device colorant; 1 = a tint value of 0.0 for a source colour component shall leave the corresponding component of the previously painted colour unchanged).
         * @public 
         * @since 5.9.152 (2012-03-23)
         * @static 
         */
        public static function setOverprint($stroking = true, $nonstroking = '', $mode = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setOverprint($stroking, $nonstroking, $mode);
        }
        
        /**
         * Get the overprint mode array (OP, op, OPM).
         * 
         * (Check the "Entries in a Graphics State Parameter Dictionary" on PDF 32000-1:2008).
         *
         * @return \array. 
         * @public 
         * @since 5.9.152 (2012-03-23)
         * @static 
         */
        public static function getOverprint(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getOverprint();
        }
        
        /**
         * Set alpha for stroking (CA) and non-stroking (ca) operations.
         *
         * @param $stroking (float) Alpha value for stroking operations: real value from 0 (transparent) to 1 (opaque).
         * @param $bm (string) blend mode, one of the following: Normal, Multiply, Screen, Overlay, Darken, Lighten, ColorDodge, ColorBurn, HardLight, SoftLight, Difference, Exclusion, Hue, Saturation, Color, Luminosity
         * @param $nonstroking (float) Alpha value for non-stroking operations: real value from 0 (transparent) to 1 (opaque).
         * @param $ais (boolean)
         * @public 
         * @since 3.0.000 (2008-03-27)
         * @static 
         */
        public static function setAlpha($stroking = 1, $bm = 'Normal', $nonstroking = '', $ais = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setAlpha($stroking, $bm, $nonstroking, $ais);
        }
        
        /**
         * Get the alpha mode array (CA, ca, BM, AIS).
         * 
         * (Check the "Entries in a Graphics State Parameter Dictionary" on PDF 32000-1:2008).
         *
         * @return \array. 
         * @public 
         * @since 5.9.152 (2012-03-23)
         * @static 
         */
        public static function getAlpha(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getAlpha();
        }
        
        /**
         * Set the default JPEG compression quality (1-100)
         *
         * @param $quality (int) JPEG quality, integer between 1 and 100
         * @public 
         * @since 3.0.000 (2008-03-27)
         * @static 
         */
        public static function setJPEGQuality($quality){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setJPEGQuality($quality);
        }
        
        /**
         * Set the default number of columns in a row for HTML tables.
         *
         * @param $cols (int) number of columns
         * @public 
         * @since 3.0.014 (2008-06-04)
         * @static 
         */
        public static function setDefaultTableColumns($cols = 4){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setDefaultTableColumns($cols);
        }
        
        /**
         * Set the height of the cell (line height) respect the font height.
         *
         * @param $h (int) cell proportion respect font height (typical value = 1.25).
         * @public 
         * @since 3.0.014 (2008-06-04)
         * @static 
         */
        public static function setCellHeightRatio($h){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setCellHeightRatio($h);
        }
        
        /**
         * return the height of cell repect font height.
         *
         * @public 
         * @since 4.0.012 (2008-07-24)
         * @static 
         */
        public static function getCellHeightRatio(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getCellHeightRatio();
        }
        
        /**
         * Set the viewer preferences dictionary controlling the way the document is to be presented on the screen or in print.
         * 
         * (see Section 8.1 of PDF reference, "Viewer Preferences").
         * <ul><li>HideToolbar boolean (Optional) A flag specifying whether to hide the viewer application's tool bars when the document is active. Default value: false.</li><li>HideMenubar boolean (Optional) A flag specifying whether to hide the viewer application's menu bar when the document is active. Default value: false.</li><li>HideWindowUI boolean (Optional) A flag specifying whether to hide user interface elements in the document's window (such as scroll bars and navigation controls), leaving only the document's contents displayed. Default value: false.</li><li>FitWindow boolean (Optional) A flag specifying whether to resize the document's window to fit the size of the first displayed page. Default value: false.</li><li>CenterWindow boolean (Optional) A flag specifying whether to position the document's window in the center of the screen. Default value: false.</li><li>DisplayDocTitle boolean (Optional; PDF 1.4) A flag specifying whether the window's title bar should display the document title taken from the Title entry of the document information dictionary (see Section 10.2.1, "Document Information Dictionary"). If false, the title bar should instead display the name of the PDF file containing the document. Default value: false.</li><li>NonFullScreenPageMode name (Optional) The document's page mode, specifying how to display the document on exiting full-screen mode:<ul><li>UseNone Neither document outline nor thumbnail images visible</li><li>UseOutlines Document outline visible</li><li>UseThumbs Thumbnail images visible</li><li>UseOC Optional content group panel visible</li></ul>This entry is meaningful only if the value of the PageMode entry in the catalog dictionary (see Section 3.6.1, "Document Catalog") is FullScreen; it is ignored otherwise. Default value: UseNone.</li><li>ViewArea name (Optional; PDF 1.4) The name of the page boundary representing the area of a page to be displayed when viewing the document on the screen. Valid values are (see Section 10.10.1, "Page Boundaries").:<ul><li>MediaBox</li><li>CropBox (default)</li><li>BleedBox</li><li>TrimBox</li><li>ArtBox</li></ul></li><li>ViewClip name (Optional; PDF 1.4) The name of the page boundary to which the contents of a page are to be clipped when viewing the document on the screen. Valid values are (see Section 10.10.1, "Page Boundaries").:<ul><li>MediaBox</li><li>CropBox (default)</li><li>BleedBox</li><li>TrimBox</li><li>ArtBox</li></ul></li><li>PrintArea name (Optional; PDF 1.4) The name of the page boundary representing the area of a page to be rendered when printing the document. Valid values are (see Section 10.10.1, "Page Boundaries").:<ul><li>MediaBox</li><li>CropBox (default)</li><li>BleedBox</li><li>TrimBox</li><li>ArtBox</li></ul></li><li>PrintClip name (Optional; PDF 1.4) The name of the page boundary to which the contents of a page are to be clipped when printing the document. Valid values are (see Section 10.10.1, "Page Boundaries").:<ul><li>MediaBox</li><li>CropBox (default)</li><li>BleedBox</li><li>TrimBox</li><li>ArtBox</li></ul></li><li>PrintScaling name (Optional; PDF 1.6) The page scaling option to be selected when a print dialog is displayed for this document. Valid values are: <ul><li>None, which indicates that the print dialog should reflect no page scaling</li><li>AppDefault (default), which indicates that applications should use the current print scaling</li></ul></li><li>Duplex name (Optional; PDF 1.7) The paper handling option to use when printing the file from the print dialog. The following values are valid:<ul><li>Simplex - Print single-sided</li><li>DuplexFlipShortEdge - Duplex and flip on the short edge of the sheet</li><li>DuplexFlipLongEdge - Duplex and flip on the long edge of the sheet</li></ul>Default value: none</li><li>PickTrayByPDFSize boolean (Optional; PDF 1.7) A flag specifying whether the PDF page size is used to select the input paper tray. This setting influences only the preset values used to populate the print dialog presented by a PDF viewer application. If PickTrayByPDFSize is true, the check box in the print dialog associated with input paper tray is checked. Note: This setting has no effect on Mac OS systems, which do not provide the ability to pick the input tray by size.</li><li>PrintPageRange array (Optional; PDF 1.7) The page numbers used to initialize the print dialog box when the file is printed. The first page of the PDF file is denoted by 1. Each pair consists of the first and last pages in the sub-range. An odd number of integers causes this entry to be ignored. Negative numbers cause the entire array to be ignored. Default value: as defined by PDF viewer application</li><li>NumCopies integer (Optional; PDF 1.7) The number of copies to be printed when the print dialog is opened for this file. Supported values are the integers 2 through 5. Values outside this range are ignored. Default value: as defined by PDF viewer application, but typically 1</li></ul>
         *
         * @param $preferences (array) array of options.
         * @author Nicola Asuni
         * @public 
         * @since 3.1.000 (2008-06-09)
         * @static 
         */
        public static function setViewerPreferences($preferences){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setViewerPreferences($preferences);
        }
        
        /**
         * Paints color transition registration bars
         *
         * @param $x (float) abscissa of the top left corner of the rectangle.
         * @param $y (float) ordinate of the top left corner of the rectangle.
         * @param $w (float) width of the rectangle.
         * @param $h (float) height of the rectangle.
         * @param $transition (boolean) if true prints tcolor transitions to white.
         * @param $vertical (boolean) if true prints bar vertically.
         * @param $colors (string) colors to print separated by comma. Valid values are: A,W,R,G,B,C,M,Y,K,RGB,CMYK,ALL,ALLSPOT,<SPOT_COLOR_NAME>. Where: A = grayscale black, W = grayscale white, R = RGB red, G RGB green, B RGB blue, C = CMYK cyan, M = CMYK magenta, Y = CMYK yellow, K = CMYK key/black, RGB = RGB registration color, CMYK = CMYK registration color, ALL = Spot registration color, ALLSPOT = print all defined spot colors, <SPOT_COLOR_NAME> = name of the spot color to print.
         * @author Nicola Asuni
         * @since 4.9.000 (2010-03-26)
         * @public 
         * @static 
         */
        public static function colorRegistrationBar($x, $y, $w, $h, $transition = true, $vertical = false, $colors = 'A,R,G,B,C,M,Y,K'){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::colorRegistrationBar($x, $y, $w, $h, $transition, $vertical, $colors);
        }
        
        /**
         * Paints crop marks.
         *
         * @param $x (float) abscissa of the crop mark center.
         * @param $y (float) ordinate of the crop mark center.
         * @param $w (float) width of the crop mark.
         * @param $h (float) height of the crop mark.
         * @param $type (string) type of crop mark, one symbol per type separated by comma: T = TOP, F = BOTTOM, L = LEFT, R = RIGHT, TL = A = TOP-LEFT, TR = B = TOP-RIGHT, BL = C = BOTTOM-LEFT, BR = D = BOTTOM-RIGHT.
         * @param $color (array) crop mark color (default spot registration color).
         * @author Nicola Asuni
         * @since 4.9.000 (2010-03-26)
         * @public 
         * @static 
         */
        public static function cropMark($x, $y, $w, $h, $type = 'T,R,B,L', $color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::cropMark($x, $y, $w, $h, $type, $color);
        }
        
        /**
         * Paints a registration mark
         *
         * @param $x (float) abscissa of the registration mark center.
         * @param $y (float) ordinate of the registration mark center.
         * @param $r (float) radius of the crop mark.
         * @param $double (boolean) if true print two concentric crop marks.
         * @param $cola (array) crop mark color (default spot registration color 'All').
         * @param $colb (array) second crop mark color (default spot registration color 'None').
         * @author Nicola Asuni
         * @since 4.9.000 (2010-03-26)
         * @public 
         * @static 
         */
        public static function registrationMark($x, $y, $r, $double = false, $cola = array(), $colb = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::registrationMark($x, $y, $r, $double, $cola, $colb);
        }
        
        /**
         * Paints a CMYK registration mark
         *
         * @param $x (float) abscissa of the registration mark center.
         * @param $y (float) ordinate of the registration mark center.
         * @param $r (float) radius of the crop mark.
         * @author Nicola Asuni
         * @since 6.0.038 (2013-09-30)
         * @public 
         * @static 
         */
        public static function registrationMarkCMYK($x, $y, $r){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::registrationMarkCMYK($x, $y, $r);
        }
        
        /**
         * Paints a linear colour gradient.
         *
         * @param $x (float) abscissa of the top left corner of the rectangle.
         * @param $y (float) ordinate of the top left corner of the rectangle.
         * @param $w (float) width of the rectangle.
         * @param $h (float) height of the rectangle.
         * @param $col1 (array) first color (Grayscale, RGB or CMYK components).
         * @param $col2 (array) second color (Grayscale, RGB or CMYK components).
         * @param $coords (array) array of the form (x1, y1, x2, y2) which defines the gradient vector (see linear_gradient_coords.jpg). The default value is from left to right (x1=0, y1=0, x2=1, y2=0).
         * @author Andreas W\FCrmser, Nicola Asuni
         * @since 3.1.000 (2008-06-09)
         * @public 
         * @static 
         */
        public static function LinearGradient($x, $y, $w, $h, $col1 = array(), $col2 = array(), $coords = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::LinearGradient($x, $y, $w, $h, $col1, $col2, $coords);
        }
        
        /**
         * Paints a radial colour gradient.
         *
         * @param $x (float) abscissa of the top left corner of the rectangle.
         * @param $y (float) ordinate of the top left corner of the rectangle.
         * @param $w (float) width of the rectangle.
         * @param $h (float) height of the rectangle.
         * @param $col1 (array) first color (Grayscale, RGB or CMYK components).
         * @param $col2 (array) second color (Grayscale, RGB or CMYK components).
         * @param $coords (array) array of the form (fx, fy, cx, cy, r) where (fx, fy) is the starting point of the gradient with color1, (cx, cy) is the center of the circle with color2, and r is the radius of the circle (see radial_gradient_coords.jpg). (fx, fy) should be inside the circle, otherwise some areas will not be defined.
         * @author Andreas W\FCrmser, Nicola Asuni
         * @since 3.1.000 (2008-06-09)
         * @public 
         * @static 
         */
        public static function RadialGradient($x, $y, $w, $h, $col1 = array(), $col2 = array(), $coords = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::RadialGradient($x, $y, $w, $h, $col1, $col2, $coords);
        }
        
        /**
         * Paints a coons patch mesh.
         *
         * @param $x (float) abscissa of the top left corner of the rectangle.
         * @param $y (float) ordinate of the top left corner of the rectangle.
         * @param $w (float) width of the rectangle.
         * @param $h (float) height of the rectangle.
         * @param $col1 (array) first color (lower left corner) (RGB components).
         * @param $col2 (array) second color (lower right corner) (RGB components).
         * @param $col3 (array) third color (upper right corner) (RGB components).
         * @param $col4 (array) fourth color (upper left corner) (RGB components).
         * @param $coords (array) <ul><li>for one patch mesh: array(float x1, float y1, .... float x12, float y12): 12 pairs of coordinates (normally from 0 to 1) which specify the Bezier control points that define the patch. First pair is the lower left edge point, next is its right control point (control point 2). Then the other points are defined in the order: control point 1, edge point, control point 2 going counter-clockwise around the patch. Last (x12, y12) is the first edge point's left control point (control point 1).</li><li>for two or more patch meshes: array[number of patches]: arrays with the following keys for each patch: f: where to put that patch (0 = first patch, 1, 2, 3 = right, top and left of precedent patch - I didn't figure this out completely - just try and error ;-) points: 12 pairs of coordinates of the Bezier control points as above for the first patch, 8 pairs of coordinates for the following patches, ignoring the coordinates already defined by the precedent patch (I also didn't figure out the order of these - also: try and see what's happening) colors: must be 4 colors for the first patch, 2 colors for the following patches</li></ul>
         * @param $coords_min (array) minimum value used by the coordinates. If a coordinate's value is smaller than this it will be cut to coords_min. default: 0
         * @param $coords_max (array) maximum value used by the coordinates. If a coordinate's value is greater than this it will be cut to coords_max. default: 1
         * @param $antialias (boolean) A flag indicating whether to filter the shading function to prevent aliasing artifacts.
         * @author Andreas W\FCrmser, Nicola Asuni
         * @since 3.1.000 (2008-06-09)
         * @public 
         * @static 
         */
        public static function CoonsPatchMesh($x, $y, $w, $h, $col1 = array(), $col2 = array(), $col3 = array(), $col4 = array(), $coords = array(), $coords_min = 0, $coords_max = 1, $antialias = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::CoonsPatchMesh($x, $y, $w, $h, $col1, $col2, $col3, $col4, $coords, $coords_min, $coords_max, $antialias);
        }
        
        /**
         * Output gradient.
         *
         * @param $type (int) type of gradient (1 Function-based shading; 2 Axial shading; 3 Radial shading; 4 Free-form Gouraud-shaded triangle mesh; 5 Lattice-form Gouraud-shaded triangle mesh; 6 Coons patch mesh; 7 Tensor-product patch mesh). (Not all types are currently supported)
         * @param $coords (array) array of coordinates.
         * @param $stops (array) array gradient color components: color = array of GRAY, RGB or CMYK color components; offset = (0 to 1) represents a location along the gradient vector; exponent = exponent of the exponential interpolation function (default = 1).
         * @param $background (array) An array of colour components appropriate to the colour space, specifying a single background colour value.
         * @param $antialias (boolean) A flag indicating whether to filter the shading function to prevent aliasing artifacts.
         * @author Nicola Asuni
         * @since 3.1.000 (2008-06-09)
         * @public 
         * @static 
         */
        public static function Gradient($type, $coords, $stops, $background = array(), $antialias = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::Gradient($type, $coords, $stops, $background, $antialias);
        }
        
        /**
         * Output gradient shaders.
         *
         * @author Nicola Asuni
         * @since 3.1.000 (2008-06-09)
         * @protected 
         * @static 
         */
        public static function _putshaders(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::_putshaders();
        }
        
        /**
         * Draw the sector of a circle.
         * 
         * It can be used for instance to render pie charts.
         *
         * @param $xc (float) abscissa of the center.
         * @param $yc (float) ordinate of the center.
         * @param $r (float) radius.
         * @param $a (float) start angle (in degrees).
         * @param $b (float) end angle (in degrees).
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $cw: (float) indicates whether to go clockwise (default: true).
         * @param $o: (float) origin of angles (0 for 3 o'clock, 90 for noon, 180 for 9 o'clock, 270 for 6 o'clock). Default: 90.
         * @author Maxime Delorme, Nicola Asuni
         * @since 3.1.000 (2008-06-09)
         * @public 
         * @static 
         */
        public static function PieSector($xc, $yc, $r, $a, $b, $style = 'FD', $cw = true, $o = 90){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::PieSector($xc, $yc, $r, $a, $b, $style, $cw, $o);
        }
        
        /**
         * Draw the sector of an ellipse.
         * 
         * It can be used for instance to render pie charts.
         *
         * @param $xc (float) abscissa of the center.
         * @param $yc (float) ordinate of the center.
         * @param $rx (float) the x-axis radius.
         * @param $ry (float) the y-axis radius.
         * @param $a (float) start angle (in degrees).
         * @param $b (float) end angle (in degrees).
         * @param $style (string) Style of rendering. See the getPathPaintOperator() function for more information.
         * @param $cw: (float) indicates whether to go clockwise.
         * @param $o: (float) origin of angles (0 for 3 o'clock, 90 for noon, 180 for 9 o'clock, 270 for 6 o'clock).
         * @param $nc (integer) Number of curves used to draw a 90 degrees portion of arc.
         * @author Maxime Delorme, Nicola Asuni
         * @since 3.1.000 (2008-06-09)
         * @public 
         * @static 
         */
        public static function PieSectorXY($xc, $yc, $rx, $ry, $a, $b, $style = 'FD', $cw = false, $o = 0, $nc = 2){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::PieSectorXY($xc, $yc, $rx, $ry, $a, $b, $style, $cw, $o, $nc);
        }
        
        /**
         * Embed vector-based Adobe Illustrator (AI) or AI-compatible EPS files.
         * 
         * NOTE: EPS is not yet fully implemented, use the setRasterizeVectorImages() method to enable/disable rasterization of vector images using ImageMagick library.
         * Only vector drawing is supported, not text or bitmap.
         * Although the script was successfully tested with various AI format versions, best results are probably achieved with files that were exported in the AI3 format (tested with Illustrator CS2, Freehand MX and Photoshop CS2).
         *
         * @param $file (string) Name of the file containing the image or a '@' character followed by the EPS/AI data string.
         * @param $x (float) Abscissa of the upper-left corner.
         * @param $y (float) Ordinate of the upper-left corner.
         * @param $w (float) Width of the image in the page. If not specified or equal to zero, it is automatically calculated.
         * @param $h (float) Height of the image in the page. If not specified or equal to zero, it is automatically calculated.
         * @param $link (mixed) URL or identifier returned by AddLink().
         * @param $useBoundingBox (boolean) specifies whether to position the bounding box (true) or the complete canvas (false) at location (x,y). Default value is true.
         * @param $align (string) Indicates the alignment of the pointer next to image insertion relative to image height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
         * @param $palign (string) Allows to center or align the image on the current line. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
         * @param $border (mixed) Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
         * @param $fitonpage (boolean) if true the image is resized to not exceed page dimensions.
         * @param $fixoutvals (boolean) if true remove values outside the bounding box.
         * @author Valentin Schmidt, Nicola Asuni
         * @since 3.1.000 (2008-06-09)
         * @public 
         * @static 
         */
        public static function ImageEps($file, $x = '', $y = '', $w = 0, $h = 0, $link = '', $useBoundingBox = true, $align = '', $palign = '', $border = 0, $fitonpage = false, $fixoutvals = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::ImageEps($file, $x, $y, $w, $h, $link, $useBoundingBox, $align, $palign, $border, $fitonpage, $fixoutvals);
        }
        
        /**
         * Set document barcode.
         *
         * @param $bc (string) barcode
         * @public 
         * @static 
         */
        public static function setBarcode($bc = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setBarcode($bc);
        }
        
        /**
         * Get current barcode.
         *
         * @return string 
         * @public 
         * @since 4.0.012 (2008-07-24)
         * @static 
         */
        public static function getBarcode(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getBarcode();
        }
        
        /**
         * Print a Linear Barcode.
         *
         * @param $code (string) code to print
         * @param $type (string) type of barcode (see tcpdf_barcodes_1d.php for supported formats).
         * @param $x (int) x position in user units (empty string = current x position)
         * @param $y (int) y position in user units (empty string = current y position)
         * @param $w (int) width in user units (empty string = remaining page width)
         * @param $h (int) height in user units (empty string = remaining page height)
         * @param $xres (float) width of the smallest bar in user units (empty string = default value = 0.4mm)
         * @param $style (array) array of options:<ul>
         * <li>boolean $style['border'] if true prints a border</li>
         * <li>int $style['padding'] padding to leave around the barcode in user units (set to 'auto' for automatic padding)</li>
         * <li>int $style['hpadding'] horizontal padding in user units (set to 'auto' for automatic padding)</li>
         * <li>int $style['vpadding'] vertical padding in user units (set to 'auto' for automatic padding)</li>
         * <li>array $style['fgcolor'] color array for bars and text</li>
         * <li>mixed $style['bgcolor'] color array for background (set to false for transparent)</li>
         * <li>boolean $style['text'] if true prints text below the barcode</li>
         * <li>string $style['label'] override default label</li>
         * <li>string $style['font'] font name for text</li><li>int $style['fontsize'] font size for text</li>
         * <li>int $style['stretchtext']: 0 = disabled; 1 = horizontal scaling only if necessary; 2 = forced horizontal scaling; 3 = character spacing only if necessary; 4 = forced character spacing.</li>
         * <li>string $style['position'] horizontal position of the containing barcode cell on the page: L = left margin; C = center; R = right margin.</li>
         * <li>string $style['align'] horizontal position of the barcode on the containing rectangle: L = left; C = center; R = right.</li>
         * <li>string $style['stretch'] if true stretch the barcode to best fit the available width, otherwise uses $xres resolution for a single bar.</li>
         * <li>string $style['fitwidth'] if true reduce the width to fit the barcode width + padding. When this option is enabled the 'stretch' option is automatically disabled.</li>
         * <li>string $style['cellfitalign'] this option works only when 'fitwidth' is true and 'position' is unset or empty. Set the horizontal position of the containing barcode cell inside the specified rectangle: L = left; C = center; R = right.</li></ul>
         * @param $align (string) Indicates the alignment of the pointer next to barcode insertion relative to barcode height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
         * @author Nicola Asuni
         * @since 3.1.000 (2008-06-09)
         * @public 
         * @static 
         */
        public static function write1DBarcode($code, $type, $x = '', $y = '', $w = '', $h = '', $xres = '', $style = '', $align = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::write1DBarcode($code, $type, $x, $y, $w, $h, $xres, $style, $align);
        }
        
        /**
         * Print 2D Barcode.
         *
         * @param $code (string) code to print
         * @param $type (string) type of barcode (see tcpdf_barcodes_2d.php for supported formats).
         * @param $x (int) x position in user units
         * @param $y (int) y position in user units
         * @param $w (int) width in user units
         * @param $h (int) height in user units
         * @param $style (array) array of options:<ul>
         * <li>boolean $style['border'] if true prints a border around the barcode</li>
         * <li>int $style['padding'] padding to leave around the barcode in barcode units (set to 'auto' for automatic padding)</li>
         * <li>int $style['hpadding'] horizontal padding in barcode units (set to 'auto' for automatic padding)</li>
         * <li>int $style['vpadding'] vertical padding in barcode units (set to 'auto' for automatic padding)</li>
         * <li>int $style['module_width'] width of a single module in points</li>
         * <li>int $style['module_height'] height of a single module in points</li>
         * <li>array $style['fgcolor'] color array for bars and text</li>
         * <li>mixed $style['bgcolor'] color array for background or false for transparent</li>
         * <li>string $style['position'] barcode position on the page: L = left margin; C = center; R = right margin; S = stretch</li><li>$style['module_width'] width of a single module in points</li>
         * <li>$style['module_height'] height of a single module in points</li></ul>
         * @param $align (string) Indicates the alignment of the pointer next to barcode insertion relative to barcode height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
         * @param $distort (boolean) if true distort the barcode to fit width and height, otherwise preserve aspect ratio
         * @author Nicola Asuni
         * @since 4.5.037 (2009-04-07)
         * @public 
         * @static 
         */
        public static function write2DBarcode($code, $type, $x = '', $y = '', $w = '', $h = '', $style = '', $align = '', $distort = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::write2DBarcode($code, $type, $x, $y, $w, $h, $style, $align, $distort);
        }
        
        /**
         * Returns an array containing current margins:
         * <ul>
         * <li>$ret['left'] = left margin</li>
         * <li>$ret['right'] = right margin</li>
         * <li>$ret['top'] = top margin</li>
         * <li>$ret['bottom'] = bottom margin</li>
         * <li>$ret['header'] = header margin</li>
         * <li>$ret['footer'] = footer margin</li>
         * <li>$ret['cell'] = cell padding array</li>
         * <li>$ret['padding_left'] = cell left padding</li>
         * <li>$ret['padding_top'] = cell top padding</li>
         * <li>$ret['padding_right'] = cell right padding</li>
         * <li>$ret['padding_bottom'] = cell bottom padding</li>
         * </ul>
         *
         * @return array containing all margins measures
         * @public 
         * @since 3.2.000 (2008-06-23)
         * @static 
         */
        public static function getMargins(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getMargins();
        }
        
        /**
         * Returns an array containing original margins:
         * <ul>
         * <li>$ret['left'] = left margin</li>
         * <li>$ret['right'] = right margin</li>
         * </ul>
         *
         * @return array containing all margins measures
         * @public 
         * @since 4.0.012 (2008-07-24)
         * @static 
         */
        public static function getOriginalMargins(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getOriginalMargins();
        }
        
        /**
         * Returns the current font size.
         *
         * @return \current font size
         * @public 
         * @since 3.2.000 (2008-06-23)
         * @static 
         */
        public static function getFontSize(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontSize();
        }
        
        /**
         * Returns the current font size in points unit.
         *
         * @return \current font size in points unit
         * @public 
         * @since 3.2.000 (2008-06-23)
         * @static 
         */
        public static function getFontSizePt(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontSizePt();
        }
        
        /**
         * Returns the current font family name.
         *
         * @return string current font family name
         * @public 
         * @since 4.3.008 (2008-12-05)
         * @static 
         */
        public static function getFontFamily(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontFamily();
        }
        
        /**
         * Returns the current font style.
         *
         * @return string current font style
         * @public 
         * @since 4.3.008 (2008-12-05)
         * @static 
         */
        public static function getFontStyle(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontStyle();
        }
        
        /**
         * Cleanup HTML code (requires HTML Tidy library).
         *
         * @param $html (string) htmlcode to fix
         * @param $default_css (string) CSS commands to add
         * @param $tagvs (array) parameters for setHtmlVSpace method
         * @param $tidy_options (array) options for tidy_parse_string function
         * @return string XHTML code cleaned up
         * @author Nicola Asuni
         * @public 
         * @since 5.9.017 (2010-11-16)
         * @see setHtmlVSpace()
         * @static 
         */
        public static function fixHTMLCode($html, $default_css = '', $tagvs = '', $tidy_options = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::fixHTMLCode($html, $default_css, $tagvs, $tidy_options);
        }
        
        /**
         * Get the internal Cell padding from CSS attribute.
         *
         * @param $csspadding (string) padding properties
         * @param $width (float) width of the containing element
         * @return array of cell paddings
         * @public 
         * @since 5.9.000 (2010-10-04)
         * @static 
         */
        public static function getCSSPadding($csspadding, $width = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getCSSPadding($csspadding, $width);
        }
        
        /**
         * Get the internal Cell margin from CSS attribute.
         *
         * @param $cssmargin (string) margin properties
         * @param $width (float) width of the containing element
         * @return array of cell margins
         * @public 
         * @since 5.9.000 (2010-10-04)
         * @static 
         */
        public static function getCSSMargin($cssmargin, $width = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getCSSMargin($cssmargin, $width);
        }
        
        /**
         * Get the border-spacing from CSS attribute.
         *
         * @param $cssbspace (string) border-spacing CSS properties
         * @param $width (float) width of the containing element
         * @return array of border spacings
         * @public 
         * @since 5.9.010 (2010-10-27)
         * @static 
         */
        public static function getCSSBorderMargin($cssbspace, $width = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getCSSBorderMargin($cssbspace, $width);
        }
        
        /**
         * Convert HTML string containing font size value to points
         *
         * @param $val (string) String containing font size value and unit.
         * @param $refsize (float) Reference font size in points.
         * @param $parent_size (float) Parent font size in points.
         * @param $defaultunit (string) Default unit (can be one of the following: %, em, ex, px, in, mm, pc, pt).
         * @return float value in points
         * @public 
         * @static 
         */
        public static function getHTMLFontUnits($val, $refsize = 12, $parent_size = 12, $defaultunit = 'pt'){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getHTMLFontUnits($val, $refsize, $parent_size, $defaultunit);
        }
        
        /**
         * Serialize an array of parameters to be used with TCPDF tag in HTML code.
         *
         * @param $data (array) parameters array
         * @return string containing serialized data
         * @public static
         * @static 
         */
        public static function serializeTCPDFtagParameters($data){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::serializeTCPDFtagParameters($data);
        }
        
        /**
         * Prints a cell (rectangular area) with optional borders, background color and html text string.
         * 
         * The upper-left corner of the cell corresponds to the current position. After the call, the current position moves to the right or to the next line.<br />
         * If automatic page breaking is enabled and the cell goes beyond the limit, a page break is done before outputting.
         * IMPORTANT: The HTML must be well formatted - try to clean-up it using an application like HTML-Tidy before submitting.
         * Supported tags are: a, b, blockquote, br, dd, del, div, dl, dt, em, font, h1, h2, h3, h4, h5, h6, hr, i, img, li, ol, p, pre, small, span, strong, sub, sup, table, tcpdf, td, th, thead, tr, tt, u, ul
         * NOTE: all the HTML attributes must be enclosed in double-quote.
         *
         * @param $w (float) Cell width. If 0, the cell extends up to the right margin.
         * @param $h (float) Cell minimum height. The cell extends automatically if needed.
         * @param $x (float) upper-left corner X coordinate
         * @param $y (float) upper-left corner Y coordinate
         * @param $html (string) html text to print. Default value: empty string.
         * @param $border (mixed) Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
         * @param $ln (int) Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right (or left for RTL language)</li><li>1: to the beginning of the next line</li><li>2: below</li></ul>
         * Putting 1 is equivalent to putting 0 and calling Ln() just after. Default value: 0.
         * @param $fill (boolean) Indicates if the cell background must be painted (true) or transparent (false).
         * @param $reseth (boolean) if true reset the last cell height (default true).
         * @param $align (string) Allows to center or align the text. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
         * @param $autopadding (boolean) if true, uses internal padding and automatically adjust it to account for line width.
         * @see Multicell(), writeHTML()
         * @public 
         * @static 
         */
        public static function writeHTMLCell($w, $h, $x, $y, $html = '', $border = 0, $ln = 0, $fill = false, $reseth = true, $align = '', $autopadding = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::writeHTMLCell($w, $h, $x, $y, $html, $border, $ln, $fill, $reseth, $align, $autopadding);
        }
        
        /**
         * Allows to preserve some HTML formatting (limited support).<br />
         * IMPORTANT: The HTML must be well formatted - try to clean-up it using an application like HTML-Tidy before submitting.
         * 
         * Supported tags are: a, b, blockquote, br, dd, del, div, dl, dt, em, font, h1, h2, h3, h4, h5, h6, hr, i, img, li, ol, p, pre, small, span, strong, sub, sup, table, tcpdf, td, th, thead, tr, tt, u, ul
         * NOTE: all the HTML attributes must be enclosed in double-quote.
         *
         * @param $html (string) text to display
         * @param $ln (boolean) if true add a new line after text (default = true)
         * @param $fill (boolean) Indicates if the background must be painted (true) or transparent (false).
         * @param $reseth (boolean) if true reset the last cell height (default false).
         * @param $cell (boolean) if true add the current left (or right for RTL) padding to each Write (default false).
         * @param $align (string) Allows to center or align the text. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
         * @public 
         * @static 
         */
        public static function writeHTML($html, $ln = true, $fill = false, $reseth = false, $cell = false, $align = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::writeHTML($html, $ln, $fill, $reseth, $cell, $align);
        }
        
        /**
         * Set the default bullet to be used as LI bullet symbol
         *
         * @param $symbol (string) character or string to be used (legal values are: '' = automatic, '!' = auto bullet, '#' = auto numbering, 'disc', 'disc', 'circle', 'square', '1', 'decimal', 'decimal-leading-zero', 'i', 'lower-roman', 'I', 'upper-roman', 'a', 'lower-alpha', 'lower-latin', 'A', 'upper-alpha', 'upper-latin', 'lower-greek', 'img|type|width|height|image.ext')
         * @public 
         * @since 4.0.028 (2008-09-26)
         * @static 
         */
        public static function setLIsymbol($symbol = '!'){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setLIsymbol($symbol);
        }
        
        /**
         * Set the booklet mode for double-sided pages.
         *
         * @param $booklet (boolean) true set the booklet mode on, false otherwise.
         * @param $inner (float) Inner page margin.
         * @param $outer (float) Outer page margin.
         * @public 
         * @since 4.2.000 (2008-10-29)
         * @static 
         */
        public static function SetBooklet($booklet = true, $inner = -1, $outer = -1){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::SetBooklet($booklet, $inner, $outer);
        }
        
        /**
         * Set the vertical spaces for HTML tags.
         * 
         * The array must have the following structure (example):
         * $tagvs = array('h1' => array(0 => array('h' => '', 'n' => 2), 1 => array('h' => 1.3, 'n' => 1)));
         * The first array level contains the tag names,
         * the second level contains 0 for opening tags or 1 for closing tags,
         * the third level contains the vertical space unit (h) and the number spaces to add (n).
         * If the h parameter is not specified, default values are used.
         *
         * @param $tagvs (array) array of tags and relative vertical spaces.
         * @public 
         * @since 4.2.001 (2008-10-30)
         * @static 
         */
        public static function setHtmlVSpace($tagvs){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setHtmlVSpace($tagvs);
        }
        
        /**
         * Set custom width for list indentation.
         *
         * @param $width (float) width of the indentation. Use negative value to disable it.
         * @public 
         * @since 4.2.007 (2008-11-12)
         * @static 
         */
        public static function setListIndentWidth($width){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setListIndentWidth($width);
        }
        
        /**
         * Set the top/bottom cell sides to be open or closed when the cell cross the page.
         *
         * @param $isopen (boolean) if true keeps the top/bottom border open for the cell sides that cross the page.
         * @public 
         * @since 4.2.010 (2008-11-14)
         * @static 
         */
        public static function setOpenCell($isopen){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setOpenCell($isopen);
        }
        
        /**
         * Set the color and font style for HTML links.
         *
         * @param $color (array) RGB array of colors
         * @param $fontstyle (string) additional font styles to add
         * @public 
         * @since 4.4.003 (2008-12-09)
         * @static 
         */
        public static function setHtmlLinksStyle($color = array(), $fontstyle = 'U'){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setHtmlLinksStyle($color, $fontstyle);
        }
        
        /**
         * Convert HTML string containing value and unit of measure to user's units or points.
         *
         * @param $htmlval (string) String containing values and unit.
         * @param $refsize (string) Reference value in points.
         * @param $defaultunit (string) Default unit (can be one of the following: %, em, ex, px, in, mm, pc, pt).
         * @param $points (boolean) If true returns points, otherwise returns value in user's units.
         * @return float value in user's unit or point if $points=true
         * @public 
         * @since 4.4.004 (2008-12-10)
         * @static 
         */
        public static function getHTMLUnitToUnits($htmlval, $refsize = 1, $defaultunit = 'px', $points = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getHTMLUnitToUnits($htmlval, $refsize, $defaultunit, $points);
        }
        
        /**
         * Move a page to a previous position.
         *
         * @param $frompage (int) number of the source page
         * @param $topage (int) number of the destination page (must be less than $frompage)
         * @return true in case of success, false in case of error.
         * @public 
         * @since 4.5.000 (2009-01-02)
         * @static 
         */
        public static function movePage($frompage, $topage){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::movePage($frompage, $topage);
        }
        
        /**
         * Remove the specified page.
         *
         * @param $page (int) page to remove
         * @return true in case of success, false in case of error.
         * @public 
         * @since 4.6.004 (2009-04-23)
         * @static 
         */
        public static function deletePage($page){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::deletePage($page);
        }
        
        /**
         * Clone the specified page to a new page.
         *
         * @param $page (int) number of page to copy (0 = current page)
         * @return true in case of success, false in case of error.
         * @public 
         * @since 4.9.015 (2010-04-20)
         * @static 
         */
        public static function copyPage($page = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::copyPage($page);
        }
        
        /**
         * Output a Table of Content Index (TOC).
         * 
         * This method must be called after all Bookmarks were set.
         * Before calling this method you have to open the page using the addTOCPage() method.
         * After calling this method you have to call endTOCPage() to close the TOC page.
         * You can override this method to achieve different styles.
         *
         * @param $page (int) page number where this TOC should be inserted (leave empty for current page).
         * @param $numbersfont (string) set the font for page numbers (please use monospaced font for better alignment).
         * @param $filler (string) string used to fill the space between text and page number.
         * @param $toc_name (string) name to use for TOC bookmark.
         * @param $style (string) Font style for title: B = Bold, I = Italic, BI = Bold + Italic.
         * @param $color (array) RGB color array for bookmark title (values from 0 to 255).
         * @public 
         * @author Nicola Asuni
         * @since 4.5.000 (2009-01-02)
         * @see addTOCPage(), endTOCPage(), addHTMLTOC()
         * @static 
         */
        public static function addTOC($page = '', $numbersfont = '', $filler = '.', $toc_name = 'TOC', $style = '', $color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::addTOC($page, $numbersfont, $filler, $toc_name, $style, $color);
        }
        
        /**
         * Output a Table Of Content Index (TOC) using HTML templates.
         * 
         * This method must be called after all Bookmarks were set.
         * Before calling this method you have to open the page using the addTOCPage() method.
         * After calling this method you have to call endTOCPage() to close the TOC page.
         *
         * @param $page (int) page number where this TOC should be inserted (leave empty for current page).
         * @param $toc_name (string) name to use for TOC bookmark.
         * @param $templates (array) array of html templates. Use: "#TOC_DESCRIPTION#" for bookmark title, "#TOC_PAGE_NUMBER#" for page number.
         * @param $correct_align (boolean) if true correct the number alignment (numbers must be in monospaced font like courier and right aligned on LTR, or left aligned on RTL)
         * @param $style (string) Font style for title: B = Bold, I = Italic, BI = Bold + Italic.
         * @param $color (array) RGB color array for title (values from 0 to 255).
         * @public 
         * @author Nicola Asuni
         * @since 5.0.001 (2010-05-06)
         * @see addTOCPage(), endTOCPage(), addTOC()
         * @static 
         */
        public static function addHTMLTOC($page = '', $toc_name = 'TOC', $templates = array(), $correct_align = true, $style = '', $color = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::addHTMLTOC($page, $toc_name, $templates, $correct_align, $style, $color);
        }
        
        /**
         * Stores a copy of the current TCPDF object used for undo operation.
         *
         * @public 
         * @since 4.5.029 (2009-03-19)
         * @static 
         */
        public static function startTransaction(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::startTransaction();
        }
        
        /**
         * Delete the copy of the current TCPDF object used for undo operation.
         *
         * @public 
         * @since 4.5.029 (2009-03-19)
         * @static 
         */
        public static function commitTransaction(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::commitTransaction();
        }
        
        /**
         * This method allows to undo the latest transaction by returning the latest saved TCPDF object with startTransaction().
         *
         * @param $self (boolean) if true restores current class object to previous state without the need of reassignment via the returned value.
         * @return \TCPDF object.
         * @public 
         * @since 4.5.029 (2009-03-19)
         * @static 
         */
        public static function rollbackTransaction($self = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::rollbackTransaction($self);
        }
        
        /**
         * Set multiple columns of the same size
         *
         * @param $numcols (int) number of columns (set to zero to disable columns mode)
         * @param $width (int) column width
         * @param $y (int) column starting Y position (leave empty for current Y position)
         * @public 
         * @since 4.9.001 (2010-03-28)
         * @static 
         */
        public static function setEqualColumns($numcols = 0, $width = 0, $y = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setEqualColumns($numcols, $width, $y);
        }
        
        /**
         * Remove columns and reset page margins.
         *
         * @public 
         * @since 5.9.072 (2011-04-26)
         * @static 
         */
        public static function resetColumns(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::resetColumns();
        }
        
        /**
         * Set columns array.
         * 
         * Each column is represented by an array of arrays with the following keys: (w = width, s = space between columns, y = column top position).
         *
         * @param $columns (array)
         * @public 
         * @since 4.9.001 (2010-03-28)
         * @static 
         */
        public static function setColumnsArray($columns){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setColumnsArray($columns);
        }
        
        /**
         * Set position at a given column
         *
         * @param $col (int) column number (from 0 to getNumberOfColumns()-1); empty string = current column.
         * @public 
         * @since 4.9.001 (2010-03-28)
         * @static 
         */
        public static function selectColumn($col = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::selectColumn($col);
        }
        
        /**
         * Return the current column number
         *
         * @return int current column number
         * @public 
         * @since 5.5.011 (2010-07-08)
         * @static 
         */
        public static function getColumn(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getColumn();
        }
        
        /**
         * Return the current number of columns.
         *
         * @return int number of columns
         * @public 
         * @since 5.8.018 (2010-08-25)
         * @static 
         */
        public static function getNumberOfColumns(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getNumberOfColumns();
        }
        
        /**
         * Set Text rendering mode.
         *
         * @param $stroke (int) outline size in user units (0 = disable).
         * @param $fill (boolean) if true fills the text (default).
         * @param $clip (boolean) if true activate clipping mode
         * @public 
         * @since 4.9.008 (2009-04-02)
         * @static 
         */
        public static function setTextRenderingMode($stroke = 0, $fill = true, $clip = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setTextRenderingMode($stroke, $fill, $clip);
        }
        
        /**
         * Set parameters for drop shadow effect for text.
         *
         * @param $params (array) Array of parameters: enabled (boolean) set to true to enable shadow; depth_w (float) shadow width in user units; depth_h (float) shadow height in user units; color (array) shadow color or false to use the stroke color; opacity (float) Alpha value: real value from 0 (transparent) to 1 (opaque); blend_mode (string) blend mode, one of the following: Normal, Multiply, Screen, Overlay, Darken, Lighten, ColorDodge, ColorBurn, HardLight, SoftLight, Difference, Exclusion, Hue, Saturation, Color, Luminosity.
         * @since 5.9.174 (2012-07-25)
         * @public 
         * @static 
         */
        public static function setTextShadow($params = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setTextShadow($params);
        }
        
        /**
         * Return the text shadow parameters array.
         *
         * @return Array of parameters.
         * @since 5.9.174 (2012-07-25)
         * @public 
         * @static 
         */
        public static function getTextShadow(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getTextShadow();
        }
        
        /**
         * Returns text with soft hyphens.
         *
         * @param $text (string) text to process
         * @param $patterns (mixed) Array of hypenation patterns or a TEX file containing hypenation patterns. TEX patterns can be downloaded from http://www.ctan.org/tex-archive/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
         * @param $dictionary (array) Array of words to be returned without applying the hyphenation algorithm.
         * @param $leftmin (int) Minimum number of character to leave on the left of the word without applying the hyphens.
         * @param $rightmin (int) Minimum number of character to leave on the right of the word without applying the hyphens.
         * @param $charmin (int) Minimum word length to apply the hyphenation algorithm.
         * @param $charmax (int) Maximum length of broken piece of word.
         * @return array text with soft hyphens
         * @author Nicola Asuni
         * @since 4.9.012 (2010-04-12)
         * @public 
         * @static 
         */
        public static function hyphenateText($text, $patterns, $dictionary = array(), $leftmin = 1, $rightmin = 2, $charmin = 1, $charmax = 8){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::hyphenateText($text, $patterns, $dictionary, $leftmin, $rightmin, $charmin, $charmax);
        }
        
        /**
         * Enable/disable rasterization of vector images using ImageMagick library.
         *
         * @param $mode (boolean) if true enable rasterization, false otherwise.
         * @public 
         * @since 5.0.000 (2010-04-27)
         * @static 
         */
        public static function setRasterizeVectorImages($mode){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setRasterizeVectorImages($mode);
        }
        
        /**
         * Enable or disable default option for font subsetting.
         *
         * @param $enable (boolean) if true enable font subsetting by default.
         * @author Nicola Asuni
         * @public 
         * @since 5.3.002 (2010-06-07)
         * @static 
         */
        public static function setFontSubsetting($enable = true){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setFontSubsetting($enable);
        }
        
        /**
         * Return the default option for font subsetting.
         *
         * @return boolean default font subsetting state.
         * @author Nicola Asuni
         * @public 
         * @since 5.3.002 (2010-06-07)
         * @static 
         */
        public static function getFontSubsetting(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontSubsetting();
        }
        
        /**
         * Left trim the input string
         *
         * @param $str (string) string to trim
         * @param $replace (string) string that replace spaces.
         * @return \left trimmed string
         * @author Nicola Asuni
         * @public 
         * @since 5.8.000 (2010-08-11)
         * @static 
         */
        public static function stringLeftTrim($str, $replace = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::stringLeftTrim($str, $replace);
        }
        
        /**
         * Right trim the input string
         *
         * @param $str (string) string to trim
         * @param $replace (string) string that replace spaces.
         * @return \right trimmed string
         * @author Nicola Asuni
         * @public 
         * @since 5.8.000 (2010-08-11)
         * @static 
         */
        public static function stringRightTrim($str, $replace = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::stringRightTrim($str, $replace);
        }
        
        /**
         * Trim the input string
         *
         * @param $str (string) string to trim
         * @param $replace (string) string that replace spaces.
         * @return \trimmed string
         * @author Nicola Asuni
         * @public 
         * @since 5.8.000 (2010-08-11)
         * @static 
         */
        public static function stringTrim($str, $replace = ''){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::stringTrim($str, $replace);
        }
        
        /**
         * Return true if the current font is unicode type.
         *
         * @return true for unicode font, false otherwise.
         * @author Nicola Asuni
         * @public 
         * @since 5.8.002 (2010-08-14)
         * @static 
         */
        public static function isUnicodeFont(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::isUnicodeFont();
        }
        
        /**
         * Return normalized font name
         *
         * @param $fontfamily (string) property string containing font family names
         * @return string normalized font name
         * @author Nicola Asuni
         * @public 
         * @since 5.8.004 (2010-08-17)
         * @static 
         */
        public static function getFontFamilyName($fontfamily){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontFamilyName($fontfamily);
        }
        
        /**
         * Start a new XObject Template.
         * 
         * An XObject Template is a PDF block that is a self-contained description of any sequence of graphics objects (including path objects, text objects, and sampled images).
         * An XObject Template may be painted multiple times, either on several pages or at several locations on the same page and produces the same results each time, subject only to the graphics state at the time it is invoked.
         * Note: X,Y coordinates will be reset to 0,0.
         *
         * @param $w (int) Template width in user units (empty string or zero = page width less margins).
         * @param $h (int) Template height in user units (empty string or zero = page height less margins).
         * @param $group (mixed) Set transparency group. Can be a boolean value or an array specifying optional parameters: 'CS' (solour space name), 'I' (boolean flag to indicate isolated group) and 'K' (boolean flag to indicate knockout group).
         * @return int the XObject Template ID in case of success or false in case of error.
         * @author Nicola Asuni
         * @public 
         * @since 5.8.017 (2010-08-24)
         * @see endTemplate(), printTemplate()
         * @static 
         */
        public static function startTemplate($w = 0, $h = 0, $group = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::startTemplate($w, $h, $group);
        }
        
        /**
         * Print an XObject Template.
         * 
         * You can print an XObject Template inside the currently opened Template.
         * An XObject Template is a PDF block that is a self-contained description of any sequence of graphics objects (including path objects, text objects, and sampled images).
         * An XObject Template may be painted multiple times, either on several pages or at several locations on the same page and produces the same results each time, subject only to the graphics state at the time it is invoked.
         *
         * @param $id (string) The ID of XObject Template to print.
         * @param $x (int) X position in user units (empty string = current x position)
         * @param $y (int) Y position in user units (empty string = current y position)
         * @param $w (int) Width in user units (zero = remaining page width)
         * @param $h (int) Height in user units (zero = remaining page height)
         * @param $align (string) Indicates the alignment of the pointer next to template insertion relative to template height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
         * @param $palign (string) Allows to center or align the template on the current line. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
         * @param $fitonpage (boolean) If true the template is resized to not exceed page dimensions.
         * @author Nicola Asuni
         * @public 
         * @since 5.8.017 (2010-08-24)
         * @see startTemplate(), endTemplate()
         * @static 
         */
        public static function printTemplate($id, $x = '', $y = '', $w = 0, $h = 0, $align = '', $palign = '', $fitonpage = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::printTemplate($id, $x, $y, $w, $h, $align, $palign, $fitonpage);
        }
        
        /**
         * Set the percentage of character stretching.
         *
         * @param $perc (int) percentage of stretching (100 = no stretching)
         * @author Nicola Asuni
         * @public 
         * @since 5.9.000 (2010-09-29)
         * @static 
         */
        public static function setFontStretching($perc = 100){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setFontStretching($perc);
        }
        
        /**
         * Get the percentage of character stretching.
         *
         * @return float stretching value
         * @author Nicola Asuni
         * @public 
         * @since 5.9.000 (2010-09-29)
         * @static 
         */
        public static function getFontStretching(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontStretching();
        }
        
        /**
         * Set the amount to increase or decrease the space between characters in a text.
         *
         * @param $spacing (float) amount to increase or decrease the space between characters in a text (0 = default spacing)
         * @author Nicola Asuni
         * @public 
         * @since 5.9.000 (2010-09-29)
         * @static 
         */
        public static function setFontSpacing($spacing = 0){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setFontSpacing($spacing);
        }
        
        /**
         * Get the amount to increase or decrease the space between characters in a text.
         *
         * @return int font spacing (tracking) value
         * @author Nicola Asuni
         * @public 
         * @since 5.9.000 (2010-09-29)
         * @static 
         */
        public static function getFontSpacing(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getFontSpacing();
        }
        
        /**
         * Return an array of no-write page regions
         *
         * @return array of no-write page regions
         * @author Nicola Asuni
         * @public 
         * @since 5.9.003 (2010-10-13)
         * @see setPageRegions(), addPageRegion()
         * @static 
         */
        public static function getPageRegions(){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::getPageRegions();
        }
        
        /**
         * Set no-write regions on page.
         * 
         * A no-write region is a portion of the page with a rectangular or trapezium shape that will not be covered when writing text or html code.
         * A region is always aligned on the left or right side of the page ad is defined using a vertical segment.
         * You can set multiple regions for the same page.
         *
         * @param $regions (array) array of no-write regions. For each region you can define an array as follow: ('page' => page number or empy for current page, 'xt' => X top, 'yt' => Y top, 'xb' => X bottom, 'yb' => Y bottom, 'side' => page side 'L' = left or 'R' = right). Omit this parameter to remove all regions.
         * @author Nicola Asuni
         * @public 
         * @since 5.9.003 (2010-10-13)
         * @see addPageRegion(), getPageRegions()
         * @static 
         */
        public static function setPageRegions($regions = array()){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::setPageRegions($regions);
        }
        
        /**
         * Add a single no-write region on selected page.
         * 
         * A no-write region is a portion of the page with a rectangular or trapezium shape that will not be covered when writing text or html code.
         * A region is always aligned on the left or right side of the page ad is defined using a vertical segment.
         * You can set multiple regions for the same page.
         *
         * @param $region (array) array of a single no-write region array: ('page' => page number or empy for current page, 'xt' => X top, 'yt' => Y top, 'xb' => X bottom, 'yb' => Y bottom, 'side' => page side 'L' = left or 'R' = right).
         * @author Nicola Asuni
         * @public 
         * @since 5.9.003 (2010-10-13)
         * @see setPageRegions(), getPageRegions()
         * @static 
         */
        public static function addPageRegion($region){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::addPageRegion($region);
        }
        
        /**
         * Remove a single no-write region.
         *
         * @param $key (int) region key
         * @author Nicola Asuni
         * @public 
         * @since 5.9.003 (2010-10-13)
         * @see setPageRegions(), getPageRegions()
         * @static 
         */
        public static function removePageRegion($key){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::removePageRegion($key);
        }
        
        /**
         * Embedd a Scalable Vector Graphics (SVG) image.
         * 
         * NOTE: SVG standard is not yet fully implemented, use the setRasterizeVectorImages() method to enable/disable rasterization of vector images using ImageMagick library.
         *
         * @param $file (string) Name of the SVG file or a '@' character followed by the SVG data string.
         * @param $x (float) Abscissa of the upper-left corner.
         * @param $y (float) Ordinate of the upper-left corner.
         * @param $w (float) Width of the image in the page. If not specified or equal to zero, it is automatically calculated.
         * @param $h (float) Height of the image in the page. If not specified or equal to zero, it is automatically calculated.
         * @param $link (mixed) URL or identifier returned by AddLink().
         * @param $align (string) Indicates the alignment of the pointer next to image insertion relative to image height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul> If the alignment is an empty string, then the pointer will be restored on the starting SVG position.
         * @param $palign (string) Allows to center or align the image on the current line. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
         * @param $border (mixed) Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
         * @param $fitonpage (boolean) if true the image is resized to not exceed page dimensions.
         * @author Nicola Asuni
         * @since 5.0.000 (2010-05-02)
         * @public 
         * @static 
         */
        public static function ImageSVG($file, $x = '', $y = '', $w = 0, $h = 0, $link = '', $align = '', $palign = '', $border = 0, $fitonpage = false){
            //Method inherited from \TCPDF            
            return \App\Libs\Pdf::ImageSVG($file, $x, $y, $w, $h, $link, $align, $palign, $border, $fitonpage);
        }
        
    }


    class Md5 extends \App\Facades\Md5{
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 32文字
         * @static 
         */
        public static function make($value, $options = array()){
            return \App\Libs\Hash\Md5::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function check($value, $hashedValue, $options = array()){
            return \App\Libs\Hash\Md5::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function needsRehash($hashedValue, $options = array()){
            return \App\Libs\Hash\Md5::needsRehash($hashedValue, $options);
        }
        
    }


    class Sha1 extends \App\Facades\Sha1{
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 40文字
         * @static 
         */
        public static function make($value, $options = array()){
            return \App\Libs\Hash\Sha1::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function check($value, $hashedValue, $options = array()){
            return \App\Libs\Hash\Sha1::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function needsRehash($hashedValue, $options = array()){
            return \App\Libs\Hash\Sha1::needsRehash($hashedValue, $options);
        }
        
    }


    class Sha256 extends \App\Facades\Sha256{
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 64文字
         * @static 
         */
        public static function make($value, $options = array()){
            return \App\Libs\Hash\Sha256::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function check($value, $hashedValue, $options = array()){
            return \App\Libs\Hash\Sha256::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function needsRehash($hashedValue, $options = array()){
            return \App\Libs\Hash\Sha256::needsRehash($hashedValue, $options);
        }
        
    }


    class Sha512 extends \App\Facades\Sha512{
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 128文字
         * @static 
         */
        public static function make($value, $options = array()){
            return \App\Libs\Hash\Sha512::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function check($value, $hashedValue, $options = array()){
            return \App\Libs\Hash\Sha512::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function needsRehash($hashedValue, $options = array()){
            return \App\Libs\Hash\Sha512::needsRehash($hashedValue, $options);
        }
        
    }


}

