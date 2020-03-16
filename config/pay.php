<?php

return [
    'alipay' => [
        'app_id'         => '2021001141648664',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiDMyj1BHXAKMq3gz3M7g02qmEgFxNXCxGTlLzyjFwmUsP4Fbz8w0vQyt+PfiBQfh7zAwj9PEYnDfAW3I6yt7nvgSHv1pVyXCVk1xM/6lsYl/+8IBNSRxp56ZYjR5LIj2/IuQGr3uZZGCDAfAATy6Gx+ZLjD+QsUF/clSPjoy4qbrVqx6s02kwOws/b+qXHahdy5jYRKXfF6OI7QRHN++5fz9OmMsyQtwrkPbcp8savyGAxmfx+o40g639zolSiXzmdFTjcpPEgEv1zLxdBDI4XVC5orTljfydQIbMAEQmJgnnIJqBAJoIf3085631jiRWkYhtBxka47bmdDTb6EODwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAiDMyj1BHXAKMq3gz3M7g02qmEgFxNXCxGTlLzyjFwmUsP4Fbz8w0vQyt+PfiBQfh7zAwj9PEYnDfAW3I6yt7nvgSHv1pVyXCVk1xM/6lsYl/+8IBNSRxp56ZYjR5LIj2/IuQGr3uZZGCDAfAATy6Gx+ZLjD+QsUF/clSPjoy4qbrVqx6s02kwOws/b+qXHahdy5jYRKXfF6OI7QRHN++5fz9OmMsyQtwrkPbcp8savyGAxmfx+o40g639zolSiXzmdFTjcpPEgEv1zLxdBDI4XVC5orTljfydQIbMAEQmJgnnIJqBAJoIf3085631jiRWkYhtBxka47bmdDTb6EODwIDAQABAoIBAC1cd9NZVlrjknwtTYCV+jUPiP3oMw8sWB9hgMke+DZVQdZou+5KQapRBcQssr8gL/RcpV/RlM+AbhVovgjs84AveMGPfr0Cm2Xo5vH9NqwZcmGj7IkJeTztSoJ1nYHin/fed4EgjryPKLPfBOiklAsii/7hXF1ahzNOELEe6wGnP8qv5HgBxX0WG63J75nzAErPHBJKUSS/74EYUiCdBhYKaThwrR/6Y+VJ0eRsQCpbDS9IYLLT+isHlKwn6lnGN8CgXdZ736Ae9dVU4sd8Z9OCLMf8jRcUEESVPhxm/bQR2C6FDsZ7eejtMs3xPUlBvpTg2BpPTAMsBZNy2e0f+bkCgYEAuss7GD/FmGqHR1hng8/0qJyTzxBIvoBKDBpAj5jjUfGqcyD7ig+tCqZawOhGHujiA5BZkBO1PlWTh0wPmcD7q6HTKand//58geEolakckjVKN77SU3k+FForBJByTLlEyZqfkNJV2kbDmjWdnDJctVwMOTktuBBNBr9Y1eN0INUCgYEAuqlOv4rVVXSHlM1I4xlcbRAj4CviwQi7/UHVJNNFAXMIRVwVRVVXXOXppx3STstPljr/ZV3+bcc7AMWqeYA4p3n6u8K2Cha2m9NEuwBLHmg2cLwPX4wXR2KE9OVgdZtUHWnqevLOSu2j/D5HiRXiQ9qr/gwaqddPYYVHZ/wdRVMCgYEApKl60omE+jMORYpc1gl/txMwCRxlw+j7XWfW+b7gxN+wTgUJOE9RT04OOneHOMA6XMHm8ectomF1x5L5PaStNkNVDik8FeqUfzmouSV2ljx7zGBesE70tqQ1v7RFzfST+tRfTR7dp6kxzMLuyT5sE0OtUtRgxR05iXUsLoBvYnECgYANkN57R0DH7CcqZl0EvEQeXQzubuIU+2iGOHGgMoaSW2TffZjCKDioNMFtdtphBZ+sIG+NU255VgBwxuzj1bDIYzIY0UbfptTwsEMPgC71b8d9G/3WCN1sP7m//qerBHXxiVAUTW82vNytKW2ThfaizdKwLPsHGvHW+ZO99/G8pwKBgCgSomCnnxLry7qWPn1LYRvK5QOcyCDccs8QM2PkIqIARS8cWLvNZ2vFeg7f348nkNE/K2+FI1eFk87wenwhX08HIcS/DEDUogjOxChTgBz/2kMDSrAnKI+KyZxsPj7ZJZM35BX0o/9xjqECwzmdVCQaOgq2WM+4HM5MDfUIwH9+',
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