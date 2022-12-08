<div class="wrap">
@foreach ($userscard as $user)
    @if ($user['active'] == $showcard['active'] && $user['role'] == $showcard['role'])

            <div class="font-blue card">
                    <br>
                    <label class="font-red">NAMA</label>
                    <h1>{{ $user['nama'] }}</h1>
                    <br>
                    <img src="{{ $user['foto'] }}" style="width:250px; height:250px;">
                    <br><br>
                    <label class="font-red">Bio</label>
                    <h3>{{ $user['bio'] }}</h3>
                    <br>
                    <label class="font-red">Is Active</label>
                    <h2>{{ $user['active']? 'aktif':'tidak aktif' }}</h2>
                    <br>
                    <label class="font-red">Alamat</label>
                    <h4>{{ $user['alamat'] }}</h4>
                    <br>
                    <label class="font-red">Role</label>
                    <h2>{{ $user['role'] }}</h2>
                    <br>
            </div>

    @endif
@endforeach
</div>
