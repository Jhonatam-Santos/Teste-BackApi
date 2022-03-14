<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.Dev.{dev_id}', function ($dev, $dev_id) {
    return (int) $dev->dev_id === (int) $dev_id;
});
