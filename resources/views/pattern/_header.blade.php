{{$get_data = callAPI('GET', 'https://teslascope.com/api/vehicle/'.env('TESLA_SCOPE_PUBLIC_ID'), false)}}
{{var_dump($get_data[0][0])}}

