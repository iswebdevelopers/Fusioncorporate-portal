<?php

namespace App\Traits;

use App\UserLabelPrint;

trait CreateLabelPrint
{
    public function addLabelPrint($label, $data, string $type)
    {
        if((isset($label['description'])) and (isset($label['item_size']))) {
            $description = $label['description'] .' - '.  $label['item_size']; 
        } elseif(isset($label['description'])) {
            $description = $label['description'];
        } else {
            $description = '';
        }
        
        $label_print = new UserLabelPrint();
        $label_print->order_id = (isset($label['order_number'])) ? $label['order_number'] : $label['item'];
        $label_print->user_id = $this->user['id'];
        $label_print->type = $type;
        $label_print->raw_data = $data;
        $label_print->printed = 0;
        $label_print->creator = $this->user['email'];
        $label_print->quantity = $label['quantity'];
        $label_print->description =  $description;
        $label_print->save();
    }
}
