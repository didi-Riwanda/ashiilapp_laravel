<?php

$raws = json_decode(file_get_contents('php://input'), true);

$transaction = [
    'id' => request('transaction_id'),
    'time' => request('transaction_time'),
    'status' => request('transaction_status'),
];
$payment = [
    'type' => request('payment_type'),
    'amounts' => request('payment_amounts'),
];
$status = [
    'code' => request('status_code'),
    'message' =>  request('status_message'),
];
$signature = request('signature_key');
$merchant = request('merchant_id');
$order = request('order_id');
$fraud = request('fraud_status');
$currency = request('currency');
$amount = request('gross_amount');
$settlement = request('settlement_time');


$url = 'http://superpay.biz.id/donation/transaction/webhooks/notification';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded',
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_POST, true);
if ($payment['type'] == 'credit_card') {
    $channel = [
        'response' => [
            'code' => request('channel_response_code'),
            'message' => request('channel_response_message'),
        ],
    ];
    file_put_contents('info.log', json_encode([
        'transaction' => $transaction,
        'status' => $status,
        'payment' => $payment,
    ]));
} else if ($payment['type'] == 'bank_transfer') {
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'TransactionId' => $transaction['id'],
        'TransactionTime' => $transaction['time'],
        'TransactionStatus' => $transaction['status'],
        'StatusCode' => $status['code'],
        'StatusMessage' => $status['message'],
        'PaymentType' => $payment['type'],
        'PaymentData' => array_map(function ($row) {
            return [
                'Amount' => $row['amount'],
                'PaidAt' => $row['paid_at'],
            ];
        }, getPaymentData($payment['amounts'])),
        'SignatureKey' => $signature,
        'MerchantId' => $merchant,
        'OrderId' => $order,
        'FraudStatus' => $fraud,
        'Currency' => $currency,
        'GrossAmount' => $amount,
        'SettlementTime' => $settlement,
    ]));
} else if (in_array($payment['type'], ['gopay', 'qris'])) {
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'TransactionId' => $transaction['id'],
        'TransactionTime' => $transaction['time'],
        'TransactionStatus' => $transaction['status'],
        'StatusCode' => $status['code'],
        'StatusMessage' => $status['message'],
        'PaymentType' => $payment['type'],
        'SignatureKey' => $signature,
        'MerchantId' => $merchant,
        'OrderId' => $order,
        'FraudStatus' => $fraud,
        'Currency' => $currency,
        'GrossAmount' => $amount,
        'SettlementTime' => $settlement,
    ]));

}
$output = curl_exec($ch);
curl_close($ch);

file_put_contents('http.log', $output);

file_put_contents('info.log', json_encode([
    'transaction' => $transaction,
    'status' => $status,
    'payment' => $payment,
    'signature' => $signature,
    'merchant' => $merchant,
    'order' => $order,
    'fraud' => $fraud,
    'currency' => $currency,
    'amount' => $amount,
    'settlement' => $settlement,
]));

function request($name) {
    $method = $_SERVER['REQUEST_METHOD'];
    $raws = json_decode(file_get_contents('php://input'), true);
    if (strtolower($method) == 'get') {
        if (isset($_GET[$name])) {
            return $_GET[$name];
        }
        return isset($raws[$name]) ? $raws[$name] : null;
    } else if (strtolower($method) == 'post') {
        if (isset($_POST[$name])) {
            return $_POST[$name];
        }
        return isset($raws[$name]) ? $raws[$name] : null;
    }
    return null;
}

function getPaymentData($values) {
    if (is_array($values)) {
        return $values;
    }
    return [];
}
