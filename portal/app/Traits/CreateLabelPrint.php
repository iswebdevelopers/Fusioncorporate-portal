<?php

namespace App\Traits;

use App\UserLabelPrint;

trait CreateLabelPrint
{
    public function addLabelPrint($label, $data, string $type)
    {
        $label_print = new UserLabelPrint();
        $label_print->order_id = $label[0]['order_number'];
        $label_print->user_id = $this->user['id'];
        $label_print->type = $type;
        $label_print->raw_data = $data;
        $label_print->printed = 0;
        $label_print->creator = $this->user['email'];

        if($type != 'sticky'){
            $label_print->quantity = array_sum(array_column($label, 'quantity'));
        } else {
            $label_print->quantity = $label[0]['quantity'];
        }
        
        $label_print->save();
    }
}
