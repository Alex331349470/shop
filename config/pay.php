<?php

return [
    'alipay' => [
        'app_id'         => '2016091400506766',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0dvKSZmw6GDxFRspi/htR7Be3+7fvTG4MXHKc3yfCD78eDIplSXEtcJPz2LRqPQvtYyt9ZsLcnUQocvla+/gT+S3P1IZzIInrqr9yAwMTWXhcKRIkdALaVXNEtBEKyYP6ysSbVI5HC3s2LtoqMatCeF9M6X59HE5FgnBtkgQClPxVXBY3CXVbg0/exRnRRPVZH/CYWTPJUXQrX8ORnmHEhdkvHRsj4pIKA8H6Ae3eAG5LcvgSTDIa72CiPAHE2PjpKv/ciLVvhykxR4Z9ja/cuwU1vO87kAGuQUbU02dPJcphtso4N1zegUS6I1S2xPe3yLPb4GmWRnc0AOVu/CgIQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA0dvKSZmw6GDxFRspi/htR7Be3+7fvTG4MXHKc3yfCD78eDIplSXEtcJPz2LRqPQvtYyt9ZsLcnUQocvla+/gT+S3P1IZzIInrqr9yAwMTWXhcKRIkdALaVXNEtBEKyYP6ysSbVI5HC3s2LtoqMatCeF9M6X59HE5FgnBtkgQClPxVXBY3CXVbg0/exRnRRPVZH/CYWTPJUXQrX8ORnmHEhdkvHRsj4pIKA8H6Ae3eAG5LcvgSTDIa72CiPAHE2PjpKv/ciLVvhykxR4Z9ja/cuwU1vO87kAGuQUbU02dPJcphtso4N1zegUS6I1S2xPe3yLPb4GmWRnc0AOVu/CgIQIDAQABAoIBAQCBLJzzeNrf7uv2ZeXI9n2tpu5/QHYP6s7KAJTxSUBKvxqAkb/uwnS2vIiLyvPq34OOaK2bhHgjV9OJBAyPx/N2uf3hyBOBQoxSg4X64Q+hhJij0TuqJTkg+WNltTSAqskZpEWPbREiO1KShakCWmigsF90rzGQOTE+U3sdTHYzJCMMFTLD39qcuANgSSwIkm9c85BW4K9NQF1DOhID7KB9G+Cl6ZvSrIT8OkTBxspyxRoaVl8urbjThRFhnbNxnZ/ntLf/v/p23qpkInEbFB1pdtWtixnJmBRW394wqMN3/EAN2G9CF1NIFAatER6UZRQzRjMhOXhyvptf1fujYo8BAoGBAOiuY10wwPrJa2KexfIudACACLsUhmuRQOhwdqeWGxK86+y9jtM9SI2oJeR+yulQED/8YJoPocPi1djdsN3ofG10QHpyA3dREH+vsX3PBjJ2m9PXXawNKMFIuAVCe/jxF2unERdCJ3dvnWUyq0+33ljyblU8EQtOgIy8z2wRksW5AoGBAObj3qoG6bMKQQvySSZpXHzWoynbrIVAM9ogm1EzgzVK6Yjj5iv22JBU6h8/brwSkpTkC31tyy52L0qWg30Km86YD1NsDnLrGS8xuO635b2CnrJWKrhiqmLQm4rHcJJX8GWMk6NVtv2+w63OGcieBSmTFVqM6lz5v+8ke1fuqWGpAoGAeZJ0NEK+8cm/o92VSz5eOcyrwyOsQBO6uDfapyFUr+up0R4Ru+kvOWR7t/FPj6vXcbcpuhUkzjZ8yTy7ppZMPNwavF9J1FO0rSJdOICsmj1CmeLS/Iw7mRGnpIfiQmWleQfndCGKgWr979wTiillsU+pujsSJLg1jlMwhSSBbXECgYEAvOC0CgtVqm09APTW+mE+k7FSEK/v1aHLySjbZfXp4/LAUId+h4CLcKbGT4GoqJnY54wWCimDCSMNVMsEDYpcIwkpoGjI+SFxnLXkPwSZIAp2oBT1JZkxIVzdoQ29/TmLIsd5DyjTZYhksw3i8cazGmuEEGsuXZjBdnQ1op1OWuECgYBLpvCxHH/JniIyPIxchBGkxlU1a00BB7U0lgtRj+v69Ti6tUu1j8NZMaoLBZttRd03jm+dojbBqItbG32tixLQUfgiN6pY6p/3ShKS7+vlVS2J/VeVWAg/nuyXTpODsE9fqqWT7e3SUYnMJMmtn3Do+hsqgur8KY52ZAXduu92lg==
',
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