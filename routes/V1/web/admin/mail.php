<?php

use App\Http\Controllers\Admin\MailController;
use Illuminate\Support\Facades\Route;

Route::get('send-test-email', [MailController::class, 'sendTestEmail']);
