<?php

/*
 * This file is part of app/ads.
 *
 * Copyright (c) 2019 Tirth Bodawala.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace App\Ads;

use Flarum\Extend;

class AdsExtend {
    public function init() {
        return [
            (new Extend\Frontend('forum'))
                ->js(__DIR__.'/js/dist/forum.js')
                ->css(__DIR__.'/resources/less/forum.less'),
            (new Extend\Frontend('admin'))
                ->js(__DIR__.'/js/dist/admin.js')
                ->css(__DIR__.'/resources/less/admin.less'),

        ];
    }
}

