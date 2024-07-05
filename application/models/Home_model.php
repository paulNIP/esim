<?php

class Home_model extends CI_Model{

        // Function to make GET requests
        function getTokenRequest($url,$access_token) {


            $headers = [
                'Accept: application/json',
                'Authorization: Bearer ' . $access_token,
            ];
            
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
            return $response;
        }



        // Function to make GET requests
        function getRequest($url) {
            global $access_token;
            // Define your access token
            $access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI3MTIiLCJqdGkiOiJhZDIyZDgzNGNhNTEyMzliZTRmZTJlZGRiYzdkMjY4NzY0NTMxZTZmNDQyZmYzMjcyZDIzMDIxOGM4NzUwYjQ3MmY3ZTY3ZGRjMzk5M2U5YyIsImlhdCI6MTcxNzU2NjkxNCwibmJmIjoxNzE3NTY2OTE0LCJleHAiOjE3NDkxMDI5MTQsInN1YiI6IiIsInNjb3BlcyI6W119.zyv7pNRJa-7aWim6bp1dansovzwLMdJ818jjLV_2Tw0LbfbMohcw-5q3Th1g_2GDQ8-ILKXMwcsdNgjTDDTUNPkOpiiSQso8dk1jNB_r3ThwgHm9KYgFQB78ibKWlL00GTBnRSLT5GgIO0olf-EowB3E68OOT3oDqEhYHZ_7RLYor9uorDHMJx-MPbgDC-2UDdrUmYTTTcOXraGrntWN4VmEaos8Du7agA3N6MFFV_rQWVtiVU3ZwK3hw8fhHZwRbaSFyELW82PXYKkINXHJJYzj91N7YwFLTmB9Ubo22sY1v7-xUFjqQmG6SW0HZq6eULRPdngz2UOWcO5qxU1cJeUdmdOmx1sQIf166xe3vrjy6wg7DXdqiXcuVl0l0F-0aCrlkTU5y_F-6bbRXaycWCZARgk_Z6xR9rnQVbHa5dIVNnGYOQZopioekTH3OheqyM87FAEq-02yoxVWcOa9jfsfUFbVJ7SWYxSLk3rd1TEiJ11Gvsoqcr5DfRJtFhIiFa6L0iN4kgXsYQubHVe9CJSfcQR7T4zfxXuhRqJoW7aqiy-PUp7UWqEtAbvsNpXJAJMNrmf_4VZad_vLYz1i9wDtlMpHkPx9eeu-rhPCz8-9xQdceplHGUANwgIaKFz6WUcfl4mB-PggGkStaQKy7_4_18eWEMotz7PSOz5qJMA";


            $headers = [
                'Accept: application/json',
                'Authorization: Bearer ' . $access_token,
            ];
            
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
            return $response;
        }

        // Function to make GET requests
        function tokenRequest() {

            $postParameter = array(
                'client_id' => '64f9a8455488956d2f8cb4e43b67bfaf',
                'client_secret' => 'PkxSaPUauy8MODwmPP2PW0Nsidrb5vor5mPxQQLR',
                'grant_type' => 'client_credentials'
            );
            
            $curlHandle = curl_init('https://sandbox-partners-api.airalo.com/v2/token');
            
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
            
            $curlResponse = curl_exec($curlHandle);
            curl_close($curlHandle);
            return $curlResponse;
        }

        function orderRequest($url,$token,$postParameter) {

            $headers = [
                'Accept: application/json',
                'Authorization: Bearer ' . $token,
            ];

            $curlHandle = curl_init($url);
            
            curl_setopt($curlHandle, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
            
            $curlResponse = curl_exec($curlHandle);
            curl_close($curlHandle);
            return $curlResponse;
        }

        function topupRequest($package_id,$iccid,$description) {
            // Define your access token
            $access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI3MTIiLCJqdGkiOiJhZDIyZDgzNGNhNTEyMzliZTRmZTJlZGRiYzdkMjY4NzY0NTMxZTZmNDQyZmYzMjcyZDIzMDIxOGM4NzUwYjQ3MmY3ZTY3ZGRjMzk5M2U5YyIsImlhdCI6MTcxNzU2NjkxNCwibmJmIjoxNzE3NTY2OTE0LCJleHAiOjE3NDkxMDI5MTQsInN1YiI6IiIsInNjb3BlcyI6W119.zyv7pNRJa-7aWim6bp1dansovzwLMdJ818jjLV_2Tw0LbfbMohcw-5q3Th1g_2GDQ8-ILKXMwcsdNgjTDDTUNPkOpiiSQso8dk1jNB_r3ThwgHm9KYgFQB78ibKWlL00GTBnRSLT5GgIO0olf-EowB3E68OOT3oDqEhYHZ_7RLYor9uorDHMJx-MPbgDC-2UDdrUmYTTTcOXraGrntWN4VmEaos8Du7agA3N6MFFV_rQWVtiVU3ZwK3hw8fhHZwRbaSFyELW82PXYKkINXHJJYzj91N7YwFLTmB9Ubo22sY1v7-xUFjqQmG6SW0HZq6eULRPdngz2UOWcO5qxU1cJeUdmdOmx1sQIf166xe3vrjy6wg7DXdqiXcuVl0l0F-0aCrlkTU5y_F-6bbRXaycWCZARgk_Z6xR9rnQVbHa5dIVNnGYOQZopioekTH3OheqyM87FAEq-02yoxVWcOa9jfsfUFbVJ7SWYxSLk3rd1TEiJ11Gvsoqcr5DfRJtFhIiFa6L0iN4kgXsYQubHVe9CJSfcQR7T4zfxXuhRqJoW7aqiy-PUp7UWqEtAbvsNpXJAJMNrmf_4VZad_vLYz1i9wDtlMpHkPx9eeu-rhPCz8-9xQdceplHGUANwgIaKFz6WUcfl4mB-PggGkStaQKy7_4_18eWEMotz7PSOz5qJMA";


            $headers = [
                'Accept: application/json',
                'Authorization: Bearer ' . $access_token,
            ];

            $postParameter = array(
                'package_id'=>$package_id,
                'iccid'=>$iccid,
                'description'=>$description
            );
            
            $curlHandle = curl_init('https://sandbox-partners-api.airalo.com/v2/orders/topups');
            
            curl_setopt($curlHandle, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
            
            $curlResponse = curl_exec($curlHandle);
            curl_close($curlHandle);
            return $curlResponse;
        }
}?>