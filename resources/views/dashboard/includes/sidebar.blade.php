<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">{{ __('sidebar.main') }} </span></a>
            </li>


            <li class="nav-item"><a href=""><i class="la la-bullseye"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ __('sidebar.m1') }} </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"> {{\App\Models\Brand::count()}}</span> </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.brands')}}"
                                          data-i18n="nav.dash.ecommerce"> {{ __('sidebar.view') }} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.brands.create')}}" data-i18n="nav.dash.crypto">{{ __('sidebar.m2') }}
                              </a>
                    </li>
                </ul>
            </li>


            <li><a class="menu-item" href="#"
                   data-i18n="nav.templates.vert.main"> <i class="la la-bullseye"></i><span class="menu-title" data-i18n="nav.dash.main">{{ __('sidebar.products') }} </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"> {{\App\Models\Product::count()}}</span> </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.products')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.view') }} </a>
                    </li>

                </ul>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.products.general.create')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.addnewproduct') }} </a>
                    </li>
                </ul>
            </li>

            <li><a class="menu-item" href="#"
                   data-i18n="nav.templates.vert.main"> <i class="la la-bullseye"></i><span class="menu-title" data-i18n="nav.dash.main">{{ __('sidebar.attribute') }}  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"> {{\App\Models\Attribute::count()}}</span> </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.attributes')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.view') }} </a>
                    </li>

                </ul>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.attributes.create')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.addnewatt') }}  </a>
                    </li>
                </ul>
            </li>

            <li><a class="menu-item" href="#"
                   data-i18n="nav.templates.vert.main"><i class="la la-bullseye"></i> <span class="menu-title" data-i18n="nav.dash.main">{{ __('sidebar.option') }}  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"> {{\App\Models\Option::count()}}</span> </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.options')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.view') }} </a>
                    </li>

                </ul>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.options.create')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.addnewoption') }}  </a>
                    </li>
                </ul>
            </li>

            <li><a class="menu-item" href="#"
                   data-i18n="nav.templates.vert.main"> <i class="la la-bullseye"></i><span class="menu-title" data-i18n="nav.dash.main">{{ __('sidebar.maincat') }}  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"> 90</span> </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.maincategories')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.view') }} </a>
                    </li>

                </ul>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.maincategories.create')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.addnewcat') }}  </a>
                    </li>
                </ul>
            </li>

            <li><a class="menu-item" href="#"
                   data-i18n="nav.templates.vert.main"> <i class="la la-bullseye"></i><span class="menu-title" data-i18n="nav.dash.main">{{ __('sidebar.maincat1') }}  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"> 90</span> </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.subcategories')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.view') }} </a>
                    </li>

                </ul>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.subcategories.create')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.addnewcat2') }}  </a>
                    </li>
                </ul>
            </li>

            <li><a class="menu-item" href="#"
                   data-i18n="nav.templates.vert.main"> <i class="la la-bullseye"></i><span class="menu-title" data-i18n="nav.dash.main">{{ __('sidebar.tag') }}  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"> {{\App\Models\Tag::count()}}</span> </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.tags')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.view') }} </a>
                    </li>

                </ul>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.tags.create')}}"
                           data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.addtag') }}  </a>
                    </li>
                </ul>
            </li>




            <li class=" nav-item"><a href="#"><span class="menu-title"
                       data-i18n="nav.templates.main"> <i class="la la-bullseye"></i>{{ __('sidebar.settings') }}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#"
                           data-i18n="nav.templates.vert.main"> {{ __('sidebar.shipping') }} </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('edit.shippings.methods','free')}}"
                                   data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.free') }} </a>
                            </li>
                            <li><a class="menu-item" href="{{route('edit.shippings.methods','inner')}}">
                                    {{ __('sidebar.inner') }} </a>
                            </li>
                            <li><a class="menu-item" href="{{route('edit.shippings.methods','outer')}}"
                                   data-i18n="nav.templates.vert.compact_menu">  {{ __('sidebar.outer') }} </a>
                            </li>
                        </ul>
                    </li>

                    <li><a class="menu-item" href="#"
                           data-i18n="nav.templates.vert.main"> {{ __('sidebar.slider') }} </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('admin.sliders.create')}}"
                                   data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.v1') }} </a>
                            </li>

                        </ul>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('admin.sliders.show')}}"
                                   data-i18n="nav.templates.vert.classic_menu">{{ __('sidebar.v2') }}  </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </li>




        </ul>
    </div>
</div>
