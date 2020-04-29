<?php

// print_r( glob( './*' ) );
print_r( glob( './*', GLOB_ONLYDIR ) );
print_r( glob( './*1', GLOB_ONLYDIR ) );