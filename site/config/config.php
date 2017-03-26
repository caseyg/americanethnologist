<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('debug',true);

c::set('cache',true);

c::set('patterns.title', 'AES Styleguide');
c::set('patterns.path', 'styleguide');
c::set('patterns.preview.css', ['https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css', '//cloud.typenetwork.com/projects/578/fontface.css/', 'assets/css/index.min.css', 'assets/css/styleguide.css']);
c::set('patterns.preview.js', ['https://use.typekit.net/zsj4lxh.js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js', 'https://use.fontawesome.com/5450ef4433.js']);

c::set('modules.directory', kirby()->roots()->site() . DS . 'patterns');

c::set('meta-tags.default', [
    'title' => function($page) {
      return $page->isHomePage()
              ? site()->title()
              : $page->title() . " | " . site()->title();
      },
    'og' => [
        'title' => function($page) {
          return $page->isHomePage()
                  ? site()->title()
                  : $page->title() . " | " . site()->title();
          },
        'type' => 'website',
        'site_name' => site()->title(),
        'url' => function($page) { return $page->url(); }
     ],
     'twitter' => [
         'card' => 'summary',
         'site' => "@amethno",
         'title' => function($page) {
           return $page->isHomePage()
                   ? site()->title()
                   : $page->title() . " | " . site()->title();
           },
     ]
]);
