<?php
define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "*********************");
    define("PayPalSecret", "*********************");
    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "AcqDmAEbaLvF-Rl0VVSa_5Qcm_sbuvoIinByluOLntrzeROMdPimB7Gh6dTWBeX0qysf0-UEdPWUbdSa");
    define("PayPalSecret", "EFtn0dTHbfI6QfxB-8dNXWn6mSKONb2En1LNeeXr8WQpja72Gs5SHN3EAxNEznra9uiiI5XOp3-wLzYi");
    define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
    define("PayPalENV", "sandbox");
}
?>