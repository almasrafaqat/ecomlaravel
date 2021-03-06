
@php
$prefix = Request::route()->getPrefix();

$route = Route::current()->getName();

@endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>AlmasTheme</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		    <li class="{{($route == 'dashboard' ? 'active': '')}}">
          <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
			       <span>Dashboard</span>
          </a>
        </li>  
			<!-- Brand -->
        <li class="treeview {{($prefix == '/brand' ? 'active': '')}}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{($route == 'all.brand' ? 'active': '')}}"><a href="{{route('all.brand')}}"><i class="ti-more"></i>View Brand</a></li>
            
          </ul>
        </li> 
        <!-- Category -->
        <li class="treeview {{($prefix == '/category' ? 'active': '')}}">
          <a href="#">
            <i data-feather="layers"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{($route == 'all.category' ? 'active': '')}}"><a href="{{route('all.category')}}"><i class="ti-more"></i>All Category</a></li>
            <li class="{{ ($route == 'all.subcategory')? 'active':'' }}"><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All SubCategory</a></li>
            <li class="{{ ($route == 'all.subsubcategory')? 'active':'' }}"><a href="{{ route('all.subsubcategory') }}"><i class="ti-more"></i>All Sub->SubCategory</a></li>
          </ul>
        </li> 
        <!-- Product -->
        <li class="treeview {{($prefix == '/product' ? 'active': '')}}">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{($route == 'add-product' ? 'active': '')}}"><a href="{{route('add-product')}}"><i class="ti-more"></i>Add Product</a></li>
            <li class="{{ ($route == 'add-product')? 'active':'' }}"><a href="{{ route('add-product') }}"><i class="ti-more"></i>Manage Product</a></li>
       
          </ul>
        </li> 
		  
     
				  
		 
      
		
 
 
		
		  
		 		  		  
		  
		
  
		  
		<li>
          <a href="{{route('admin.logout')}}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>