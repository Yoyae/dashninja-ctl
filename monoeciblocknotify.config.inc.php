<?php

/*
    This file is part of Monoeci Ninja.
    https://github.com/Yoyae/monoecininja-ctl

    Monoeci Ninja is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Monoeci Ninja is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Monoeci Ninja.  If not, see <http://www.gnu.org/licenses/>.

 */

// Indicate for each of your nodes which one you need to retrieve blocktemplate from (bt) and/or block info (block)
// Best practice for now is only retrieve block from one node and blocktemplate from all
$unamelist = array(
       'monoeci' => array('bt' => true,   'block' => true,   'mempool' => false),
       'dmn02' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn03' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn04' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn05' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn06' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn07' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn08' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn09' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn10' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn11' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn12' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn13' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn14' => array('bt' => true,   'block' => false,   'mempool' => false),
       'dmn15' => array('bt' => true,   'block' => false,   'mempool' => false),
       'p2pool' => array('bt' => true,   'block' => true,   'mempool' => true),
       'tdmn01' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn02' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn03' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn04' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn05' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn06' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn07' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn08' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn09' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn10' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn11' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn12' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn13' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn14' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tdmn15' => array('bt' => true,   'block' => false,   'mempool' => false),
       'tp2pool' => array('bt' => true,   'block' => true,   'mempool' => true),
);

?>
