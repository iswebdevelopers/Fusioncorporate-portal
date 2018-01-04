<?php

namespace App\Traits;

use App\UserLabelPrint;

trait CreateLabelPrint
{
    public function addLabelPrint($label, $data, string $type)
    {
        $label_print = new UserLabelPrint();
        $label_print->order_id = $label['order_number'];
        $label_print->user_id = $this->user['id'];
        $label_print->type = $type;
        $label_print->raw_data = $data;
        $label_print->printed = 0;
        $label_print->creator = $this->user['email'];
        $label_print->quantity = $label['quantity'];
        
        $label_print->save();
    }
}
