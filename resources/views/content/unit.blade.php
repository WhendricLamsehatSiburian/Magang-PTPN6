@include('partials.navbar.index')
<div class="container">
    <div class="btn-block pull-right">
        <p> Selamat Datang {{ auth() -> user()->role}}</p>
    </div>
</div>
@include('unit.index')