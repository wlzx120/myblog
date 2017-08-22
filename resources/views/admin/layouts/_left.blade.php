<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <li class="treeview">
          <a href="javascript:void(0)"><i class="fa fa-link"></i> <span>文章管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.articles.create') }}">添加文章</a></li>
            <li><a href="{{ route('admin.articles.index') }}">文章列表</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>其他管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">列表一</a></li>
            <li><a href="#">列表二</a></li>
          </ul>
        </li>
        <li><a href="/admin-lte/index.html" target="_blank"><i class="fa fa-link"></i><span>其他链接</span></a></li>
        <li><a href="/admin-lte/index.html" target="_blank"><i class="fa fa-link"></i><span>AdminLTE</span></a></li>
      </ul>
    </section>
  </aside>