<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
      <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li class="pin-title sidebar-main-title">
              <div> 
                <h6>Pinned</h6>
              </div>
            </li>
            <li class="sidebar-main-title">
              <div>
                <h6 class="lan-1">General</h6>
              </div>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
              <a class="sidebar-link sidebar-title" href="{{ route('sdm.index') }}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                </svg><span class="lan-3">Dashboard </span></a>

            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
             <a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                </svg><span>Parameter</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ route('sdm.kategori') }}">Kategori</a></li>
                <li><a href="{{ route('sdm.question') }}">Pertanyaan</a></li>
                <li><a href="{{ route('sdm.index.answer') }}">Jawaban</a></li>
              </ul>
            </li>
       
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                </svg><span>Users</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ route('tes.index') }}">Test User</a></li>
                {{-- <li><a href="edit-profile.html">Users Edit</a></li>
                <li><a href="user-cards.html">Users Cards</a></li> --}}
              </ul>
            </li>

       
                       
        </div>
        {{-- <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div> --}}
      </nav>
    </div>
  </div>