<ul class="sidebar-menu">
           
           <li class="treeview">
             <a href="#">
               <i class="fa fa-dashboard"></i> <span>الرئيسية</span> <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
               <li><a href="{{ url("/admin") }}"><i class="fa fa-circle-o"></i> customer </a></li>
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
              
               <li><a href="{{ url("/cart") }}"><i class="fa fa-circle-o"></i> السلة</a></li>
             
             </ul>
           </li>
          
           <li class="treeview active">
             <a href="#">
               <i class="fa fa-table"></i> <span>السلة</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">

               <li class="active"><a href="{{ url("/cart") }}"><i class="fa fa-circle-o"></i> السلة</a></li>
             </ul>
           </li>
          
          
       
              
       
         </ul>