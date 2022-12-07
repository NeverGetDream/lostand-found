      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fa fa-cog" aria-hidden="true"></i>
              </div>
              <div class="sidebar-brand-text mx-3">Admin Panel</div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0" />

          <!-- Nav Item - Dashboard -->
          <li class="nav-item">
              <a class="nav-link" href=<?= base_url('admin'); ?>>
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider" />

          <!-- Heading -->
          <div class="sidebar-heading">INFO USER</div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Mengenai User</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Atur User</h6>
                      <a class="collapse-item" href="<?= base_url('admin/listUser'); ?>">List User</a>
                      <a class="collapse-item" href="">Edit User</a>
                  </div>
              </div>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider" />

          <!-- Heading -->
          <div class="sidebar-heading">Addons</div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item active">
              <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                  <i class="fas fa-fw fa-folder"></i>
                  <span>Mengenai Barang</span>
              </a>
              <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Tentang Barang:</h6>
                      <a class="collapse-item" href="">Barang hilang</a>
                      <a class="collapse-item" href="">Barang ditemukan</a>
                  </div>
              </div>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block" />

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
      </ul>
      <!-- End of Sidebar -->