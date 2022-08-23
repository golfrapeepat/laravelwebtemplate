<nav class="navbar navbar-expand-md navbar-dark fixed-top mynav">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">Laravel 8</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('about')}}">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('service')}}">บริการของเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('contact')}}">เนื้อหา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('login')}}">ลงชื่อเข้าใช้</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
      </div>
    </div>
  </nav>
<script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>