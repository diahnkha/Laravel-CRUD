@extends("parent")

@section("title")
    <title>DIAH'S TUGAS</title>
@endsection

@section("icon")
    <link rel="shortcut icon" href="{{ asset('bukanslicing/favicon.ico')}}" type="image/x-icon">
@endsection

@section("content")
@php
    $users = [
        [
            "nama" => "diah",
            "foto" => "https://images.unsplash.com/photo-1670348281724-a69405c54123?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1MXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "terbuat dari tanaman herbal nan asri",
            "active" => false,
            "alamat" => "jl taman",
            "role" => "admin"
        ],
        [
            "nama" => "watson",
            "foto" => "https://images.unsplash.com/photo-1670425550461-76c0b8b82679?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4MXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "love my softness",
            "active" => false,
            "alamat" => "jl watson",
            "role" => "admin"
        ],
        [
            "nama" => "nice",
            "foto" => "https://images.unsplash.com/photo-1670403243210-e85bf594bd2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5OXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "you is a nice people in the world",
            "active" => false,
            "alamat" => "jl nice",
            "role" => "admin"
        ],
        [
            "nama" => "white",
            "foto" => "https://images.unsplash.com/photo-1670373314792-4bdf07cba6be?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMTB8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "bio" => "yellow is a color for banana ",
            "active" => false,
            "alamat" => "jl white",
            "role" => "admin"
        ],
        [
            "nama" => "nur",
            "foto" => "https://images.unsplash.com/photo-1670362415280-94da1d867865?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1M3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "berbunga bunga nan banyak",
            "active" => true,
            "alamat" => "jl bunga",
            "role" => "admin"
        ],
        [
            "nama" => "khasanah",
            "foto" => "https://images.unsplash.com/photo-1670443987416-d372e177691c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0N3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "berbunga bunga nan banyak",
            "active" => true,
            "alamat" => "jl bunga",
            "role" => "admin"
        ],
        [
            "nama" => "hamsiah",
            "foto" => "https://images.unsplash.com/photo-1670436435729-98403c284817?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0MXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "people around the world",
            "active" => true,
            "alamat" => "jl people",
            "role" => "admin"
        ],
        [
            "nama" => "putri",
            "foto" => "https://images.unsplash.com/photo-1670258880607-286451a67b6b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "black is color that natural essence",
            "active" => false,
            "alamat" => "jl black",
            "role" => "user"
        ],
        [
            "nama" => "blue",
            "foto" => "https://plus.unsplash.com/premium_photo-1669652639337-c513cc42ead6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1NHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "blue is color that not natural essence",
            "active" => false,
            "alamat" => "jl blue",
            "role" => "user"
        ],
        [
            "nama" => "putri",
            "foto" => "https://images.unsplash.com/photo-1670382393921-516cfd9f3119?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMjl8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "bio" => "black is color that natural essence",
            "active" => false,
            "alamat" => "jl black",
            "role" => "user"
        ],
        [
            "nama" => "blue",
            "foto" => "https://images.unsplash.com/photo-1670387740115-a3e5db14c9cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "bio" => "blue is color that not natural essence",
            "active" => false,
            "alamat" => "jl blue",
            "role" => "user"
        ],
        [
            "nama" => "summer",
            "foto" => "https://images.unsplash.com/photo-1670427254802-155cc1fa7fe0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3N3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "tissue is white and soft",
            "active" => true,
            "alamat" => "jl tissue",
            "role" => "user"
        ],
        [
            "nama" => "roti",
            "foto" => "https://images.unsplash.com/photo-1670389135500-051327c99f13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMjB8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "bio" => "natal is color hiyahiya",
            "active" => false,
            "alamat" => "jl natal",
            "role" => "user"
        ],
        [
            "nama" => "putri",
            "foto" => "https://images.unsplash.com/photo-1670258880607-286451a67b6b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "black is color that natural essence",
            "active" => false,
            "alamat" => "jl black",
            "role" => "user"
        ],
        [
            "nama" => "blue",
            "foto" => "https://plus.unsplash.com/premium_photo-1669652639337-c513cc42ead6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1NHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "blue is color that not natural essence",
            "active" => false,
            "alamat" => "jl blue",
            "role" => "user"
        ],
        [
            "nama" => "putri",
            "foto" => "https://images.unsplash.com/photo-1670382393921-516cfd9f3119?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMjl8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "bio" => "black is color that natural essence",
            "active" => false,
            "alamat" => "jl black",
            "role" => "user"
        ],
        [
            "nama" => "blue",
            "foto" => "https://images.unsplash.com/photo-1670387740115-a3e5db14c9cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "bio" => "blue is color that not natural essence",
            "active" => false,
            "alamat" => "jl blue",
            "role" => "user"
        ],
        [
            "nama" => "summer",
            "foto" => "https://images.unsplash.com/photo-1670427254802-155cc1fa7fe0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3N3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "bio" => "tissue is white and soft",
            "active" => true,
            "alamat" => "jl tissue",
            "role" => "user"
        ],
        [
            "nama" => "roti",
            "foto" => "https://images.unsplash.com/photo-1670389135500-051327c99f13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMjB8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "bio" => "natal is color hiyahiya",
            "active" => false,
            "alamat" => "jl natal",
            "role" => "user"
        ]
    ];
    $show = [
        "active" => false,
        "role" => "user"
    ];

@endphp

    @include("component", ['userscard' => $users,'showcard' => $show])


@endsection
