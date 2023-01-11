<?php

namespace App\Status;

class OrderStatus
{
    const received = 'received';
    const approved = 'approved';
    const preparing = 'preparing';
    const onDelivery = 'on delivery';
    const delivered = 'delivered';
    const reviewed = 'reviewed';
    const closed = 'closed';
}
