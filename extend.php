<?php

/*
 * This file is part of yannisme/purelistitemtheme.
 *
 * Copyright (c) 2022 yannis.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Yannisme\PureListItemTheme;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        
        ->css(__DIR__.'/less/admin.less'),
    
];
