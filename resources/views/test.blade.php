<h1>Chào mừng đến test</h1>

{{ $x = 9}}
    
@if ($x==10)
    <div style="background-color: green; color:white">10 diểm về chỗ</div>
@elseif($x<10)
    <div style="background-color: red; color:white">dưới 10 học lại</div>
    
    
        
    <@php
        $data = DB::select("SELECT * from account WHERE role = :role",[
            'role' => 3
]);
        dd ($data);
        
    @endphp

@endif

