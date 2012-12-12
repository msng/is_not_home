<?php
//! を使わないとりくみ
function is_not_home() {
	if ( is_home() ) {
		return false;
	} else {
		return true;
	}
}

