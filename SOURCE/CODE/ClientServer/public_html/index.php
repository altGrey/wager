<?php
/*		Wager is Open Source Distance Learning 3D Web Software.
		Wager is Copyright (C) 2014 Joel Ward.
		Wager is available for use under the terms of the MIT License.
		
		To view the MIT License, see the "LICENSE" document included in this
		archive or visit: http://opensource.org/licenses/MIT
		
		For the Latest Versions of this software see: https://github.com/altGrey/wager
*/
session_start();
function wageCheck() { return TRUE; }
include("path.php");
include(pathREL."conf/common/defaultCONF.php");
include(pathREL."indexCALL.php");