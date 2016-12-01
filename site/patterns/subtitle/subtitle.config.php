<?php

// Option 1: Return a random module of the respective type
return array(
    'preview' => function() {
        return array(
            'module' => site()->index()->filterBy('intendedTemplate', 'module.subtitle')->shuffle()->first()
        );
    }
);
