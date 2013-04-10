# Readme

## Hello Dolly Composer Package

A very basic and primitive "Hello world"-style script and a tribute to WordPress's default plugin.

### Usage

1. [Install Composer](http://getcomposer.org) if you haven't already.
2. Add ```"bobloco/hellodolly": "*"``` to your composer.json file
3. Run ``` composer update ```
4. Add the following to the list of service providers (found in ```app/config/app.php``` in Laravel)
```
'Bobloco\Hellodolly\HellodollyServiceProvider',
```
5. If you're using Laravel, you can add the following to the aliases in ```app/config/app.php```, and then use ```HelloDolly::output();``` to return a line.
```
'HelloDolly'	  => 'Bobloco\Hellodolly\Facades\Hellodolly',
```

Please note that this package is primarily designed to teach you about how composer packages work, particularly with regard to integration into Laravel. Take a look at the code, and see what you make of it. At some point I'll get 'round to writing it all step-by-step, but for the moment this will have to do.