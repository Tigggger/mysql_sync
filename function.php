    function remote_curl_get($query) {
        $url = 'https://yourdomain.com/?password=xxxxxxxxxxxxxxxxx&query=';
        $url.= urlencode($query);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
