@include('partials.navbar.index')
<div class="container mt-5">
    <div class="btn-block pull-right">
        <p> Selamat Datang {{ auth() -> user()->role}}</p>
    </div>
</div>
@include('content.sdm.karyawan')