
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">MAIN</li>

                <li class="nav-item">
                    <a href="{{route('admin.post.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-sticky-note"></i>
                        <p>
                            Posts
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.category.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.tag.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>

            </ul>

        </div>
        <!-- /.sidebar -->
    </aside>
