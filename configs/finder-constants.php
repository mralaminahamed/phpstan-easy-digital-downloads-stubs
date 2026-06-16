<?php

use StubsGenerator\Finder;

return Finder::create()
    ->in( array(
        'source/easy-digital-downloads/',
    ) )
    ->notPath( 'vendor' )
    ->notPath( 'libraries' )
    ->notPath( 'assets' )
    ->sortByName( true );
