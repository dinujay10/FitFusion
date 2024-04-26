<?php

class Payment
{
    use Controller;

    public function index()
    {
        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'amount' => trim($_POST['amount'])
            ];
        }
        // $amount = $data['amount'];
        $merchant_id = "1226456";
        $order_id = 2; ///////////////////// uniqid() ??????
        $currency = 'LKR';
        $merchant_secret = "MzczNDA0MzA2MTI1OTczMjI5MjgxMDQ5NDcwMDExMTM3NTIyMjUwNQ==";
        $hash = strtoupper(
            md5(
                $merchant_id .
                    $order_id .
                    // number_format($amount, 2, '.', '') .
                    $currency .
                    strtoupper(md5($merchant_secret))
            )
        );
        $array = [];

        // $array['amount'] = $amount;
        $array['merchant_id'] = $merchant_id;
        $array['order_id'] = $order_id;
        $array['currency'] = $currency;
        $array['hash'] = $hash;
        $array['first_name'] = 'dinu';
        $array['last_name'] = 'jayatissa';
        $array['email'] = 'dinu@gmail.com';
        $array['phone'] = '0766120103';
        $array['address'] = 'No.1, Galle Road';
        $array['city'] = 'Colombo';
        $array['country'] = 'Sri Lanka';
        $array['items'] = 'Package';

        $jsonObj = json_encode($array);
        // echo $jsonObj;

  
        $this->view('Member/payment', $data);
    }

}