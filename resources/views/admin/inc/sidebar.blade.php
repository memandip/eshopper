<!-- Main sidebar -->
<div class="sidebar sidebar-main">
  <div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-user">
      <div class="category-content">
        <div class="media">
          <a href="{{url('es/admin/profile')}}" class="media-left"><img src="{{url('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
          <div class="media-body">
            <span class="media-heading text-semibold">{{Auth::user()->first_name}}</span>
            <div class="text-size-mini text-muted">
              <i class="icon-pin text-size-small"></i> &nbsp;{{Auth::user()->address1}}
            </div>
          </div>

          <div class="media-right media-middle">
            <ul class="icons-list">
              <li>
                <a href="{{url('es/admin/setting')}}"><i class="icon-cog3"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="sidebar-category sidebar-category-visible">
      <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

          <!-- Main -->
          <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
          <li class="active"><a href="{{url('es/admin/dashboard')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
          <li>
            <a href="#"><i class="icon-user"></i> <span>User</span></a>
            <ul>
              <li>
                <a href="{{url('es/admin/adduser')}}">
                  <span class="glyphicon glyphicon-plus"></span> Add User
                </a>
              </li>
              <li>
                <a href="{{url('es/admin/viewusers')}}">
                  <span class="glyphicon glyphicon-eye-open"></span> View users
                </a>
              </li>
            </ul>
          </li>

          <li>
              <a href="#"><i class="icon-grid"></i><span> Brand</span></a>
            <ul>
              <li>
                <a href="{{url('es/admin/addbrand')}}">
                  <span class="glyphicon glyphicon-plus"></span> Add Brand
                </a>
              </li>
              <li>
                <a href="{{url('es/admin/viewbrands')}}">
                  <span class="glyphicon glyphicon-eye-open"></span> View Brands
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#"><i class="icon-grid2"></i><span> Category</span></a>
            <ul>
              <li>
                <a href="{{url('es/admin/addcategory')}}">
                  <span class="glyphicon glyphicon-plus"></span> Add Category
                </a>
              </li>
              <li>
                <a href="{{url('es/admin/viewcategories')}}">
                  <span class="glyphicon glyphicon-eye-open"></span> View Categories
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#"><i class="icon-grid4"></i><span> Product</span></a>
            <ul>
              <li>
                <a href="{{url('es/admin/addproduct')}}">
                  <span class="glyphicon glyphicon-plus"></span> Add Product
                </a>
              </li>
              <li>
                <a href="{{url('es/admin/viewproducts')}}">
                  <span class="glyphicon glyphicon-eye-open"></span> View Products
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#">
              <i class="icon-users4"></i>
              <span> User Group</span>
            </a>
            <ul>
              <li>
                <a href="{{url('es/admin/addusergroup')}}">
                  <span class="glyphicon glyphicon-plus"></span> Add User Group
                </a>
              </li>
              <li>
                <a href="{{url('es/admin/viewusergroup')}}">
                  <span class="glyphicon glyphicon-eye-open"></span> View User Group
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#">
              <i class="icon icon-accessibility"></i> 
              <span> User permissions</span>
            </a>
            <ul>
              <li>
                <a href="{{url('es/admin/addpermission')}}">
                  <span class="glyphicon glyphicon-plus"></span> Add permission
                </a>
              </li>
              <li>
                <a href="{{url('es/admin/viewpermissions')}}">
                  <span class="glyphicon glyphicon-eye-open"></span> view permissions
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#">
              <i class="icon-bubbles10"></i>
              <span> Contact Us</span>
            </a>
            <ul>
              <li>
                <a href="{{url('es/admin/viewcontacts')}}">
                  <span class="glyphicon glyphicon-eye-open"></span> View Contact Messages
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#">
              <i class="glyphicon glyphicon-globe"></i>
              <span> Country</span>
            </a>
            <ul>
              <li>
                <a href="{{url('es/admin/country/add')}}">
                  <span class="glyphicon glyphicon-plus"></span> Add country
                </a>
              </li>
              <li>
                <a href="{{url('es/admin/viewcountries')}}">
                  <span class="glyphicon glyphicon-eye-open"></span> View Countries
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </div>

    </div>
    <!-- /main navigation -->

  </div>
</div>
<!-- /main sidebar -->
