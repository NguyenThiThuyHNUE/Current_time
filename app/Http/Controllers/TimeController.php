<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class TimeController extends Controller
{
    public function view(){
        return view('View_time');
    }

    public function time($Current_time = null){
        if (!empty($Current_time)) {
            // Khởi tạo giá trị giờ theo múi giờ UTC
            $time = new DateTime(date('Y-m-d H:i:s'), new \DateTimeZone('UTC'));

            // Thay đổi về múi giờ được chọn
            $time->setTimezone(new \DateTimeZone(str_replace('-', '/', $Current_time)));

            // Hiển thị giờ theo định dạng mong muốn
            echo 'Múi giờ bạn chọn ' . $Current_time . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
        }
        return view('View_time');
    }

}
