<?php

namespace App\Enums;

enum UserStatus: int
{
    case PENDING_APPROVAL = 0;
    case APPROVED = 1;
    case REJECTED = 2;
    case LOCKED = 3;

    public function label(): string
    {
        return match($this) {
            self::PENDING_APPROVAL => 'chờ phê duyệt',
            self::APPROVED => 'được phê duyệt',
            self::REJECTED => 'bị từ chối',
            self::LOCKED => 'bị khoá',
        };
    }
}
