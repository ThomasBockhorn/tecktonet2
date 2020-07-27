 <!-- ============================================================== -->
 <!-- Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->
 <aside class="left-sidebar">
     <!-- Sidebar scroll-->
     <div class="scroll-sidebar">
         <!-- Sidebar navigation-->
         <nav class="sidebar-nav">
             <ul id="sidebarnav">
                 <li> <a class="waves-effect waves-dark" href="/home" aria-expanded="false"><i
                             class="fas fa-tachometer-alt"></i><span class="hide-menu"> Dashboard</span></a>
                 </li>
                 <li> <a class="waves-effect waves-dark" href="/posts" aria-expanded="false"><i
                             class="fas fa-blog"></i><span class="hide-menu">Posts</span></a>
                 </li>
                 <li> <a class="waves-effect waves-dark" href="/posts/create" aria-expanded="false"><i
                             class="fas fa-plus"></i><span class="hide-menu">Create A Post</span></a>
                 </li>
                 <li> <a class="waves-effect waves-dark" href="/projects" aria-expanded="false"><i
                             class="fas fa-project-diagram"></i><span class="hide-menu">Projects</span></a>
                 </li>
                 <li> <a class="waves-effect waves-dark" href="/projects/create" aria-expanded="false"><i
                             class="fas fa-folder-plus"></i><span class="hide-menu">Create A Project</span></a>
                 </li>
                 <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i
                             class="mdi mdi-book-open-variant"></i><span class="hide-menu">Update Info</span></a>
                 </li>
                 <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i
                             class="mdi mdi-help-circle"></i><span class="hide-menu">Subscription List</span></a>
                 </li>
                 <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i
                             class="mdi mdi-help-circle"></i><span class="hide-menu">Inquiry List</span></a>
                 </li>
             </ul>
         </nav>
         <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
     <!-- Bottom points-->
     <div class="sidebar-footer">
         <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="fas fa-cogs"></i></a>
         <!-- item--><a href="https://www.gmail.com" class="link" data-toggle="tooltip" title="Email"><i
                 class="fas fa-inbox"></i></a>
         <a class="link" data-toggle="tooltip" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
             <i class="fas fa-sign-out-alt"></i>
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             {{ csrf_field() }}
         </form>
     </div>
     <!-- End Bottom points-->
 </aside>
 <!-- ============================================================== -->
 <!-- End Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->