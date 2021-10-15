<ul class="sidebar-menu">
           
           <li class="treeview">
             <a href="#">
               <i class="fa fa-dashboard"></i> <span>الرئيسية</span> <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
               <li><a href="{{ url("/admin") }}"><i class="fa fa-circle-o"></i> Admin </a></li>
               <li><a href="{{ url("/home") }}" target="_blank"><i class="fa fa-circle-o"></i> المتجر</a></li>

             </ul>
           </li>
           <li class="treeview">
             <a href="#">
               <i class="fa fa-files-o"></i>
               <span>الجداول</span>
               <span class="fa fa-angle-left pull-right">4</span>
             </a>
             <ul class="treeview-menu">
               <li><a href="{{ url("/category") }}"><i class="fa fa-circle-o"></i> التصنيفات</a></li>
               <li><a href="{{ url("/contact") }}"><i class="fa fa-circle-o"></i> الرسائل و الشكاوى</a></li>
               <li><a href="{{ url("/books") }}"><i class="fa fa-circle-o"></i> المنتجات</a></li>
               <li><a href="{{ url("/customer") }}"><i class="fa fa-circle-o"></i> الزبائن</a></li>
              
              
               <li><a href="{{ url("/payments") }}"><i class="fa fa-circle-o"></i> المدفوعات</a></li>
               <li><a href="{{ url("/payments_return") }}"><i class="fa fa-circle-o"></i> الطلبيات االمرجعة</a></li>
             </ul>
           </li>
           <li class="treeview">
             <a href="#">
               <i class="fa fa-pie-chart"></i>
               <span>المنتجات</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
               <li><a href="{{ url("/product/create") }}"><i class="fa fa-circle-o"></i> اضافة منتج</a></li>
               <li><a href="{{ url("/product") }}"><i class="fa fa-circle-o"></i>المنتجات</a></li>
       
             </ul>
           </li>
           <li class="treeview">
             <a href="#">
               <i class="fa fa-laptop"></i>
               <span>التصنيفات</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
               <li><a href="{{ url("/category/create") }}"><i class="fa fa-circle-o"></i> اضافة تصنيف</a></li>
             </ul>
           </li>
          
          
            
           
             <ul class="treeview-menu">
               <li><a href="{{ url("/ourcontact/create") }}"><i class="fa fa-circle-o"></i>اضافة وسيلة تواصل</a></li>
               <li class="active"><a href="{{ url("/ourcontact") }}"><i class="fa fa-circle-o"></i> كل المعلومات</a></li>
             </ul>
           </li>
          
       
              
       
         </ul>