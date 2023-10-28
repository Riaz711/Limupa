              <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">Menu</li>
                            <li>
                                <a class="has-arrow" href="" aria-expanded="false"><i class="nav-icon ti ti-home"></i><span class="nav-title">Dshboard</span></a>
                                <ul aria-expanded="false">
                                   <li class="scoop-hasmenu">
                                        <a class="has-arrow" href="">Category</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="{{route('category.show')}}">Category add</a> </li>
                                            <li> <a href="{{route('category.manage')}}">Category manage</a> </li>
                                        </ul>
                                    </li>
                                   <li class="scoop-hasmenu">
                                        <a class="has-arrow" href="">Sub Category</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="{{route('subCategory.show')}}">Sub Category add</a> </li>
                                            <li> <a href="{{route('subCategory.manage')}}">Sub Category manage</a> </li>
                                            
                                        </ul>
                                    </li>
                                   <li class="scoop-hasmenu">
                                        <a class="has-arrow" href="">Unit</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="{{route('unit.create')}}">Unit add</a> </li>
                                            <li> <a href="{{route('unit.index')}}">Unit manage</a> </li>
                                            
                                        </ul>
                                    </li>
                                   <li class="scoop-hasmenu">
                                        <a class="has-arrow" href="">Brand</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="{{route('brand.create')}}">Brand add</a> </li>
                                            <li> <a href="{{route('brand.index')}}">Brand manage</a> </li>
                                            
                                        </ul>
                                    </li>
                                   <li class="scoop-hasmenu">
                                        <a class="has-arrow" href="">Product</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="{{route('product.create')}}">Product add</a> </li>
                                            <li> <a href="{{route('product.index')}}">Product manage</a> </li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                          
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>