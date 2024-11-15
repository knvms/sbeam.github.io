function generateCard($length = 8) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $cardNumber = '';
    for ($i = 0; $i < $length; $i++) {
        $cardNumber .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $cardNumber;
}

function generatePassword($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}