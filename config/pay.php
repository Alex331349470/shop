<?php

return [
    'alipay' => [
        'app_id'         => '2021001141648664',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiTy12E4jdyZ+YYVr6UgQuGyjnQ30S3GPAsvfdEkKz2hhxODZQnEVISsZZD+MReMnDCeSw4iwhHsx9+yvYgqgRqvS2PTTdPyZ1UbUlzmDDOVXo1+oOEwlZ8timGYIRzPaKnalbVfzDHg3CAuhYfmJSH+7IyxZKbQiMmlq7HWWkFqE67tdB1H2GllFnDm82RsW6bXV7cdwr1dz8jxnn2LbVfjlRlm+Uyrc0CEVt3QE+B8xhKBuvkszq6GUIEAn+8pSo8IGWHcUBfcucNZgcXVtt7Tc6rQpVJuskg6xr9p4T3gW8HERfNoFDj0yDrKmp79uFtkRFC/vGlm5KvpzB+U7gwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAhFqVIJIHsa4hinB3f6iNPhAsPFlXJbApObPbZRwXyZnVGr902UWbZ75o5Rrtmmf8u7bUrSFPeZDFeFb6kkPHn/ORjOZRr8wXUIrtvWCksuTheWgz9nB1C3z7+VMb9teYjsRiiUdqOhHailX4+RlY9DuCbcn8g8sYS2vReNAPZTk8NmkbbVZfWB4RfLBIPJ3F1zbv6yS8ArWqXz+xFYtca4rJ4ktiDsPIjV26e0htuGVlPX15ddJBk+wBHhm+JyGHPXEFOj1w5Z6vys5RY0Ozr0gTyV/QKzyRuXYQ6fymJJ9B/pYc3VTC+T7q7Kyu9kUmuA6GK+780/WQrBqXAcXwYwIDAQABAoIBAGUdozL3/eLUKxHOLK2eAxJ4XqNYigjkFgrcivArT00ZNsMxpD7ePAU9ZnwqX36IlYCABOmkOkigvwzaPqMCH3/nILrpt1y8as+A5HK7Y/i8fjo3zwMnFXTKbuMjiIjEW+wuwy0oH1LwEut/FTCSGfC1ikcAeufhgNUWMTnAkxJ8V2yOu7xsaxzJ4zXlv9qel6pUigI8o6BYRR1FatOEKyT995iLiZvA/0VGiQUO86GlMohw5TJpmn97kdFbV3PN4l2MWi/hi/8U/gSaiIxH+VG5g/GjrRaKXs1nLki19jbKJffFRbKayI1Dl6+oDuMA2hFmLPTIe8oKI9AOnu42ZiECgYEAuYBs/Yxn1RG/vqf4ooFhk3m6i3MnxNR7GvgvCi90UbR1cgWVbggPQBUka+frjeFsFXSiiYalB7PH9YjA/5z8i6MUs8Dt7APm3gPDRCpi+Vcd8GIVwOxyesELNzh9T9g5AhldVdvVNN5pjRdkpUSitjb+Qdy/kfYAXDd1mhYGuXMCgYEAtqdfCQw2St5COQrWjSGRhSTmYH9BZI05AORQajvqeVvD/5WlL+W0Au2osN/Cs0MVNPwAv9M0a6JgR4CaRdPPXu4PmuEURVmkZ7OKIhLe46iU8wthhjUAOpvXrlS+Aw+cGbEf8P/EgzgYFzjbd4JnCXOUV7Py6b33bLesR3Kw8VECgYBrT/E9SLF0oJz1VcTPdduV7jDNpWOXSXiiJHtKACPhdG0Q9kv46G6yGskEJ5msbYESdHPm7V6hMw71axSDizTKLyC10GGTTLqNK04WLBMvvYcTXhrJjb+4Zd7wJhzQSPzJyxSkq9UOjbAwMB1IQomCshOq1GJ6tP6GWosNBbsEIwKBgHKnKR6Szdm9HjCUPw0kDyZWfU4BU1j81NVce6XTqmE3WxaqJqCkPZTA/ezY6GyCJWO28/l1aChQKsN3VF+Uj0z1flIoCwNlO6/koUa2NbcN8UGG2VbXGiev/3jstMFTIRd3eadbxUzg/y5EgG7KKkdih7FtwYM7vX4+5SOMOMmhAoGAUsUsR/HKKxSWOTR4PJqEM+D5OnJx0i0LLNeJ2mikag15O47JGx7cs0GXki6n8N5Phw60Jj8uSpMDv8+fTL3Njm3InwNzsgCai6o/rSwgEWEG26td9yOt5Cupyalg6QPVjlsCxUKHPhKTRdJFvrOJajyBN9vMxRcFvJtTX7p67vQ=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wx6bc424019aa5f8ca',
        'mch_id'      => '1432605102',
        'key'         => '40EeWysUtcuHBMImylECiDDpyHxvE2OD',
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];