<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('notification', function ($user) { 
    // Authorization logic here 
    return true; 
    // Allow access to the channel for now 
});