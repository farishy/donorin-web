<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary" style="position: fixed;">
  <!-- Brand Logo -->
  <a href="/dashboard/" class="brand-link">
    <img src="<?= base_url()?>/favicon.ico" alt="Tinker" class="brand-image"
         style="opacity: .8">
    <span class="brand-text font-weight-bold">DONORIN</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url()?>/admin/dist/img/default.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Forms
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/penulisform" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Penulis Form</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/artikelform" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Artikel Form</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/lokasiForm" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lokasi Form</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/agendaForm" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Event dan Agenda Form</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/faqForm" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>FAQ Form</p>
              </a>
            </li>
          </ul>
      </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tables Konten
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/artikelTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Artikel</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/agendaTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Event dan Agenda</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/faqTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>FAQ</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/jobstable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Komentar</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/penulisTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Penulis</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/lokasiTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Lokasi</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Tables User
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/adminTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Admin</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/akundonorTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Akun Donor</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Tables Darah
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/goldarTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Golongan Darah</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/stokdarahTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Stok Darah</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/dashboard/transaksiTable" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Transaksi Donor</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="/logout" class="nav-link">
          <i class="far ion-log-out nav-icon"></i>
          <p>Sign out</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
